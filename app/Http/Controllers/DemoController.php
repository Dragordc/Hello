<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Mail\Mymail;
use Illuminate\Support\Facades\Mail;
class DemoController extends Controller
{
    public function send(){
        $obj = new \stdClass();
        Mail::to("190103334@stu.sdu.edu.kz")->send(new Mymail($obj));
        //abylay.omar@sdu.edu.kz
        return "I have sent email to you";
    }
}