<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $confessions = DB::table('confessions')->latest()->get();
        return view('admin', compact('confessions'));
    }
}