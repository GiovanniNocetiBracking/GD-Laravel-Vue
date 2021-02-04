<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent;
use Mail;
use App\Models\Subscribers;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function sendContact (Request $request)
    {
      

        $email= \Mail::send('contact',
             array(
                 'name' => $request->get('name'),
                 'email' => $request->get('email'),
                 'subject' => $request->get('subject'),                
                 'user_message' => $request->get('message'),
             ), function($message) use ($request)
               {
                  $message->from($request->email);
                  $message->to('giovanni.noceti@gmail.com');                  
               });
               return response()->json(['message' => $email] );
    }

    public function saveSubscriber(Request $request){

       /*  $request -> validate ([
            'email' => 'required|email|unique:users,email'
        ]);
 */

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:subscribers,mail'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator ->errors() ]);
                    
        }

        $data =  [
            'mail' => $request ['email']
        ];
        $subscriber = Subscribers::create($data);

        return $subscriber;
    }
}
