<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyInfo;

class ContactController extends Controller
{
    public function index()
    {
        $companyInfo = CompanyInfo::first();
        
        return view('contact', compact('companyInfo'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string'
        ]);

        // Di sini bisa ditambahkan logika untuk menyimpan atau mengirim email
        // Untuk saat ini, kita hanya redirect dengan success message
        
        return redirect()->back()->with('success', 'Pesan Anda telah terkirim!');
    }
}
