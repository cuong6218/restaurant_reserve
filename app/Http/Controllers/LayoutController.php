<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LayoutController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function changeLanguage($locale)
    {
        Session::put('locale', $locale);
        return redirect()->back();
    }
}
