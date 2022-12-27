<?php

namespace App\Http\Controllers\Halaman_landing_page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('landing_page.layouts.content.konten');
    }
}
