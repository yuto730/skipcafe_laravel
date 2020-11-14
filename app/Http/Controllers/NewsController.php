<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function model()
    {
        $md = new News();
        $data = $md->getNewsData();

        return view('index', ['data' => $data]);
    }
}
