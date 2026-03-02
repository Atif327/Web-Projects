<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactMessageRequest;
use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function store(ContactMessageRequest $request): RedirectResponse
    {
        $data = $request->validated();

        // Persist message
        ContactMessage::create($data);

        return redirect()->route('contact.show')->with('success', 'Thanks — your message has been sent. We will respond shortly.');
    }
}
