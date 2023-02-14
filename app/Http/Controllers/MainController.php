<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Typology;
use App\Models\Product;

class MainController extends Controller
{
    
    public function home() {

        return view('pages.home');
    }
}
