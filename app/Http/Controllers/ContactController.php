<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ConctactUsMailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index() {
        return view('contact.index');
    }

    public function store(Request $request) {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $correo = new ConctactUsMailable($request->all());
        Mail::to('marco.37099p@gmail.com')->send($correo);
        return redirect()->route('contact.index')->with('info', 'Tu mensaje ha sido enviado');
    }
}
