<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LayoutController extends Controller
{
    public function index()
    {
        return redirect()->route('tables.list');
    }
    public function changeLanguage($locale)
    {
        Session::put('locale', $locale);
        return redirect()->back();
    }
    public function showTable()
    {
        return view('tables');
    }
}
