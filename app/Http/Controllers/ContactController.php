<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $unreadMessages = Contact::where('read', false)->get();
        $readMessages = Contact::where('read', true)->get();

        return view('admin.messages', compact('unreadMessages', 'readMessages'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function sendEmail(Request $request)
    { 
      
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'read' => 'boolean',
            'message' => 'required|string',
        ]);

        // Store the message in the database
        Contact::create($data);

        // Send email notification
        Mail::to('admin@example.com')->send(new ContactMail($data));

        return redirect()->back()->with('success', 'Message sent and stored successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $contact = Contact::findOrFail($id);

        // Mark the contact as read if it is not already read
        if (!$contact->read) {
            $contact->update(['read' => true]);
        }

        return view('admin.message_show', compact('contact'));
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
    public function destroy(Request $request): RedirectResponse
    {
        //
        $id = $request->id;
        Contact::where('id', $id)->delete();
        return redirect()->route('message.index');

    }
}
