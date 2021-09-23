<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class SearchController extends Controller
{


    public function SearchText()
    {
        $search_text = $_GET['srch'];

        $search_result = Service::where(
            'title',
            'LIKE',
            '%' . $search_text . '%'
        )->get();

        return view('/search', compact('search_text', 'search_result'));
    }
}
