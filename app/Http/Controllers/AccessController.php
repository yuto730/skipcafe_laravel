<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Access;

class AccessController extends Controller
{
    public function access()
    {
        return view('access');
    }
}
