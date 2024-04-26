<?php

namespace App\Http\Controllers;

use App\Mail\FormSubmissionMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function handleSubmit(Request $request)
    {
        // Validate the input
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'category' => 'required'
        ]);

        try {
            Mail::to('marvinbarretto@gmail.com')->send(new FormSubmissionMail($validatedData));
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error sending email: ' . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
