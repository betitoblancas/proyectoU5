<?php

namespace App\Http\Controllers;

use App\Models\Product;
use PDF;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('product.index', compact('products'));
    }
    public function pdf(){
        $products = Product::all();
        $pdf = PDF::loadView('livewire.pdf',['product'=>$products]);
        //$pdf->locale_get_display_loadHTML('<h1>test</h1>');
        return $pdf->download('__receta.pdf');
        //return view('livewire.pdf', compact('products'));
    }
    
}