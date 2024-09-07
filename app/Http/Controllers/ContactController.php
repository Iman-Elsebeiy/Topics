<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;

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
    public function create()
    {
        return view('contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'read' => 'boolean',
            'message' => 'required|string',

        ]);
          
          Contact::create($data);
        
          return redirect()->back()->with('success', 'Message sent successfully!');
    
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
