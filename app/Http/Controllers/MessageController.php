<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Config;
use App\Mail\ContactUs;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

            $validated = $request->validate([
                'customer_email' => 'required|email',
                'subject' => 'required|string|max:255',
                'customer_name' => 'required|string',
                'customer_message' => 'required|string|min:10',
            ]);

            $message = Message::create($validated);

            $adminEmail = 'umutkaanarslan@gmail.com';



            Mail::to($adminEmail)->send(new ContactUs($message));


            return redirect()->back()->with('success', 'Mesajınız başarıyla gönderildi!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
