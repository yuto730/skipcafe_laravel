<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\NewsInfo;

class NewsInfoController extends Controller
{
    public function newsInfo()
    {
        return view('newsinfo');
    }
}
