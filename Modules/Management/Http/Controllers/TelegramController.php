<?php

namespace Modules\Management\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Telegram\Bot\Laravel\Facades\Telegram;

use Telegram\Bot\Api;


class TelegramController extends Controller
{
    protected $telegram;
    protected $chat_id;
    protected $username;
    protected $text;

 
    public function __construct()
    {
        $this->telegram = new Api('786415118:AAGVh5ixRGHkTQfx0fnV0X5yJhW_t4pCJZg');
    }
 
    public function getMe()
    {
        $response = $this->telegram->getMe();
        return $response;
    }

    public function updatedActivity()
    {
        $activity = Telegram::getUpdates();
        dd($activity);
    }

    public function sendMessage()
    {
        return view('management::telegram.telegram-view');
    }

    public function storeMessage(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'message' => 'required'
        ]);
 
        $text = "A new contact us query\n"
            . "<b>Email Address: </b>\n"
            . "$request->email\n"
            . "<b>Message: </b>\n"
            . $request->message;
 
        Telegram::sendMessage([
            'chat_id' => env('TELEGRAM_CHANNEL_ID', '-1001182970371'),
            'parse_mode' => 'HTML',
            'text' => $text
        ]);
 
        return redirect()->back();
    }


    public function setWebHook()
    {
        $url = 'https://acms-ee.herokuapp.com/management/' .'786415118:AAGVh5ixRGHkTQfx0fnV0X5yJhW_t4pCJZg'. '/webhook';
        $response = $this->telegram->setWebhook(['url' => $url]);
        dd($response);
        return $response == true ? redirect()->back() : dd($response);
    }


    public function removeWebHook()
    {
        $telegram = new Api('786415118:AAGVh5ixRGHkTQfx0fnV0X5yJhW_t4pCJZg');

        $response = $telegram->removeWebhook();

        dd($response);
    
        return $response == true ? redirect()->back() : dd($response);
    }

    public function handleRequest(Request $request)
    {
        $this->chat_id = $request['message']['chat']['id'];
        $this->username = $request['message']['from']['username'];
        $this->text = $request['message']['text'];

        dd($this->chat_id.' '.$this->username.' '.$this->text);
 
        switch ($this->text) {
            case '/start':
            case '/menu':
                $this->showMenu();
                break;
            case '/getGlobal':
                $this->showGlobal();
                break;
            case '/getTicker':
                $this->getTicker();
                break;
            case '/getCurrencyTicker':
                $this->getCurrencyTicker();
                break;
            default:
                $this->checkDatabase();
        }
    }


}
