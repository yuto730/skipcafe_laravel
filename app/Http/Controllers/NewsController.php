<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function newsList()
    {
        return view('news');
    }
}
