<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use App\Models\Contact;
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
    public function create(Request $request)
    { 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $contact = Contact::findOrFail($id);

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
