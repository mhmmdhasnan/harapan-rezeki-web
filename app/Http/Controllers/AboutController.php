<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyInfo;

class AboutController extends Controller
{
    public function index()
    {
        $companyInfo = CompanyInfo::first();
        
        return view('about', compact('companyInfo'));
    }
}
