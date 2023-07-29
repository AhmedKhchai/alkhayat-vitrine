<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function saveContact( Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'subject' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);

         $contact = new Contact;

        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->phone = $request->phone;
        $contact->message = $request->message;

        //$contact->save();
        
        \Mail::send('contact_email',
             array(
                 'email' => $request->get('email'),
                 'subject' => $request->get('subject'),
                 'phone' => $request->get('phone'),
                 'user_message' => $request->get('message'),
             ), function($message) use ($request)
               {
                  $message->from($request->email);
                  $message->to('testyboi7887@gmail.com');
               });
        
        return back()->with('success', 'Thank you for contact us!');
    }

}
