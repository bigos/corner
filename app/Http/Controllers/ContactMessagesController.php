<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContactMessagesController extends Controller
{
    //
    public function index()
    {
        return view('contact_messages.index');
    }
}
