<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ], [
            'name.required' => 'Please provide your name.',
            'email.required' => 'Please provide your email address.',
            'email.email' => 'Please provide a valid email address.',
            'subject.required' => 'Please provide a subject.',
            'message.required' => 'Please provide a message.',
            'message.max' => 'Your message is too long. Maximum 5000 characters allowed.',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput()
                ->with('contact_error', 'Please correct the errors below.');
        }

        try {
            // Get the recipient email from config or use a default
            $recipientEmail = config('mail.from.address', 'hello@example.com');
            
            Mail::to($recipientEmail)->send(new ContactMail(
                $request->name,
                $request->email,
                $request->subject,
                $request->message
            ));

            return back()->with('contact_success', 'Thank you for your message! We will get back to you as soon as possible.');
        } catch (\Illuminate\Http\Exceptions\ThrottleRequestsException $e) {
            return back()
                ->withInput()
                ->with('contact_error', 'Too many requests. Please wait a moment before sending another message.');
        } catch (\Exception $e) {
            \Log::error('Contact form error: ' . $e->getMessage());
            
            return back()
                ->withInput()
                ->with('contact_error', 'Sorry, there was an error sending your message. Please try again later.');
        }
    }
}

