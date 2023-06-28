<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(){   
        return view('products');

        {

            $busca = request('search');
        
            return view('products', ['busca' => $busca]);
        }
}
}