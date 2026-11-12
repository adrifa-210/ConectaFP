<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;    
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class MainController extends Controller
{
    function index(): View {
        return view("index");
    }
}
