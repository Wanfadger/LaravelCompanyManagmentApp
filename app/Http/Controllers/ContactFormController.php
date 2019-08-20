<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail ;

class ContactFormController extends Controller
{

    /***
     * Show the form for creating a new resource.
     ***
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("contact.contact-form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $data = request()->validate(
            ["name" => "required" ,
             "email" => "email|required" ,
             "message" => 'required'
            ]
        );

        // dd($data);
        Mail::to("test@test.com")->send(new ContactFormMail($data));
        session()->flash("message" , "Thanks for your message, will be in touch");
        return redirect('/contact-us');
    }

  
}
