<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name'                 => 'required',
            'email'                => 'required|email',
            'message'              => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        // Send email
        Mail::send('emails.contact', ['data' => $validated], function ($message) use ($validated) {
            $message->to('info@bionictech.com.au')
                ->subject('New Contact Message from ' . $validated['name']);
        });

        return back()->with('success', 'Thanks for contacting us! We will get back to you soon.');
    }
}
