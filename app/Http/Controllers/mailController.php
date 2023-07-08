<?php

namespace App\Http\Controllers;

use App\Mail\cartMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailController extends Controller
{
    public function sendMail(Request $req){
        $userDetails = [
            'name' => auth()->user()->username,
            'email' => auth()->user()->email,
        ];
        
        $formFields = $req->validate([
            'name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'image' => 'required',
        ]);

        Mail::to('test@mail.com')->send(new cartMail($formFields,$userDetails));
        return back();
    }
}
