<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function product()
    {
        $data = [
            'itemOne' => 'product : mobile', 
            'itemtwo' => 'Brand : iphone',
            'itemthree' => 'price : 100000 tk'
        ];

        return view('product')->with('data',$data);
    }
}
