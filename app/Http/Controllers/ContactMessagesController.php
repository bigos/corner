<?php

namespace App\Http\Controllers;

use App\ContactMessage;
use Illuminate\Http\Request;

use App\Http\Requests;

class ContactMessagesController extends Controller
{
    //
    public function index()
    {
        return view('contact_messages.index',
                    ['contact_messages' => ContactMessage:: all()]
        );
    }
}
