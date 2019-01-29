<?php

namespace Modules\Management\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Telegram\Bot\Laravel\Facades\Telegram;


class TelegramController extends Controller
{
    protected $telegram;
    protected $chat_id;
    protected $username;
    protected $text;

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
        $url = 'https://acms-ee.herokuapp.com/management/' . env('TELEGRAM_BOT_TOKEN') . '/webhook';
        $response = $this->telegram->setWebhook(['url' => $url]);
    
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
