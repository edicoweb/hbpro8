<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

use App\Mail\MessageReceived;

class ContactController extends Controller
{

    public function index()
    {
        return view('contact');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $message = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:5'
        ]);

        Mail::to('edicoweb@hackbots.io')->queue(new MessageReceived($message));

        return 'Mensaje enviado';
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
