<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public static function middleware(): array
    {
        return [
            'auth'
        ];
    }
    public function index() {
        return view('admin.dashboard');
    }
}
