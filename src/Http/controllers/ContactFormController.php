<?php

/**
 * Author: tuandv
 * Function: store new contact
 */

namespace Tuandv\Contactform\Http\Controllers;

use Tuandv\Contactform\Models\ContactForm;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class ContactFormController extends Controller {

    public function index()
    {
       return view('contactform::contact');
    }

    public function store(Request $request)
    {
        /**
         * Store new contact from user
         * Info store: name, email and message
         */
        ContactForm::create($request->all());

        return redirect(route('contact'))->with(['message' => 'Thank you, your mail has been sent successfully.']);
    }


}