<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComprofController extends Controller
{
    public function companyIndex()
    {
        return view('companyProfile');
    }
}
