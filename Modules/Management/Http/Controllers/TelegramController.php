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
        $url = 'https://acms-ee.herokuapp.com/' .'786415118:AAGVh5ixRGHkTQfx0fnV0X5yJhW_t4pCJZg';
        $response = $this->telegram->setWebhook(['url' => $url]);
        //dd($response);
        return $response == true ? redirect()->back() : dd($response);
    }


    public function removeWebHook()
    {
        $telegram = new Api('786415118:AAGVh5ixRGHkTQfx0fnV0X5yJhW_t4pCJZg');

        $response = $telegram->removeWebhook();

        //dd($response);
    
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
            
            
            default:
                $this->getTicker();
        }
    }



    public function showMenu($info = null)
    {
        $message = '';
        if ($info) {
            $message .= $info . chr(10);
        }
        $message .= '/menu' . chr(10);
        $message .= '/getTicker' . chr(10);
 
        $this->sendMessageX($message);
    }
 
    
 
    public function getTicker()
    {
        
        $this->sendMessageX('jam sekarang');
    }
 
    
 
    protected function formatArray($data)
    {
        $formatted_data = "";
        foreach ($data as $item => $value) {
            $item = str_replace("_", " ", $item);
            if ($item == 'last updated') {
                $value = Carbon::createFromTimestampUTC($value)->diffForHumans();
            }
            $formatted_data .= "<b>{$item}</b>\n";
            $formatted_data .= "\t{$value}\n";
        }
        return $formatted_data;
    }
 
    protected function sendMessageX($message, $parse_html = false)
    {
        $data = [
            'chat_id' => $this->chat_id,
            'text' => $message,
        ];
 
        if ($parse_html) $data['parse_mode'] = 'HTML';
 
        $this->telegram->sendMessage($data);
    }
}

