<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function price()
    {
        $categories = Category::all();
        $services = Service::all();
        return view('price', compact('services', 'categories'));
    }
}
