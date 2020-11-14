<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Mail\Mailer as MailMailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send()
    {
       Mail::send(['text'=>'mail'], ['name','Hello friend'], function($message){
           $message->to('hunter202006@yandex.ru',' Hello my dear friend')->subject('Good morning');
           $message->from('hunter20157@gmail.com','Hello Sun');
       });
    }
}
