<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Service;
use App\Models\CompanyInfo;

class HomeController extends Controller
{
    public function index()
    {
        $companyInfo = CompanyInfo::first();
        $products = Product::where('is_active', true)->take(6)->get();
        $services = Service::where('is_active', true)->take(4)->get();
        
        return view('home', compact('companyInfo', 'products', 'services'));
    }
}
