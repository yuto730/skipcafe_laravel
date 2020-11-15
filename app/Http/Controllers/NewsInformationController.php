<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\NewsInformation;

class NewsInformationController extends Controller
{
    public function newsInformation()
    {
        return view('news-information');
    }
}
