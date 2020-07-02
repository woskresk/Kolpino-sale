<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderShipped;
class MailController extends Controller {

    public function index(){
        return view('mail');
    }

   public function basic_email() {
      $data = array('name'=>"Virat Gandhi");
      Mail::send(['text'=>'mail'], $data, function($message) {
         $message->to('woskresk@gmail.com', 'Tutorials Point')->subject
            ('Laravel Basic Testing Mail');
         $message->from('xyz@gmail.com','Virat Gandhi');
      });
      Mail::send('mail', $data, function ($m) use ($pathu) {
         $m->from('hello@app.com', 'Your Application');
         $m->to($pathu)->subject('Your Reminder!');
       });
      echo "Basic Email Sent. Check your inbox.";
   }


   public function html_email(Request $request) {
      $path1 = $request->input('title');
      $pathu = $request->input('titlew');
      $data  = 'df';
      $data = array('name'=>'dgeg');

       Mail::send('mail', $data, function($message) use ($pathu) {
         $message->to($pathu, 'Tutorials Point')->subject
            ('Laravel Basic Testing Mail');
         $message->from('xyz@gmail.com','Virat Gandhi');
      });
      echo "Basic Email Sent. Check your inbox.";
   }

  

   public function attachment_email() {
      $data = array('name'=>"Virat Gandhi");
      Mail::send('mail', $data, function($message) {
         $message->to('abc@gmail.com', 'Tutorials Point')->subject
            ('Laravel Testing Mail with Attachment');
         $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
         $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
         $message->from('xyz@gmail.com','Virat Gandhi');
      });
      echo "Email Sent with attachment. Check your inbox.";
   }
}