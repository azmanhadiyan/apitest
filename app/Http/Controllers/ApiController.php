<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function index()
    {
        $response = Http::get("https://backendexample.sanbersy.com/api/data-game");
        $data = $response->json();
        return view('index', compact('data'));
    }
}
