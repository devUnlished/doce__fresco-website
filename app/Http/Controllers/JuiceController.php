<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JuiceController extends Controller
{
    /**
     * Show the landing page with the hero section.
     */
    public function index()
    {
        return view('landing');
    }

    /**
     * Handle wholesale / contact inquiries.
     */
    public function submitInquiry(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'inquiryType' => 'required|string',
            'message' => 'required|string|max:2000',
        ]);

        return redirect()->to(url()->previous() . '#contact')
            ->with('success', 'Obrigado, ' . $validated['name'] . '! A sua mensagem foi enviada.');
    }
}
