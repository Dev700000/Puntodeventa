<?php

namespace App\Http\Controllers;
use App\Models\client;
use App\Models\category;
use App\Models\image;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ClientController extends Controller
{
    
    public function index()
    {

       $productsasc = product::skip(0)->take(6)->get();
       $products = product::orderByRaw('created_at DESC')->take(4)->get();
       $images = image::get();
       return view('welcome',[
       	'products' => $products,
       	'images' => $images,
       	'productsasc' => $productsasc,
       ]);
    }
    public function show(Request $request)
    {
    	$products = product::where('idproduct',$request->id)->get();
      	$images = image::where('idproduct',$request->id)->get();
    	return view('productos',[
       	'products' => $products,
       	'images' => $images,
       	
       ]);
    }
    public function search(Request $request){
    	 $images = image::get();
    	$results = product::where('name','LIKE','%'.$request->key.'%')->get();
        $count = $results->count();
    	return view('busqueda',[
    		'images' => $images,
    		'key' => $request->key,
    		'results' => $results,
    		'count' => $count,
    	]);
    }
    public function add (Request $request){
      $shop = ['idproduct' => $request->idproduct, 'quantity' => $request->quantity, 'size' => $request->size];

      if (Arr::has(session('carrito'), 'idproduct')) {
        // $num = count(session('carrito'));
       session()->push('carrito',[$shop]);
      
      }
      else{ 
       session(['carrito'=>$shop]);
      }
      // print_r(session('carrito'));
     session()->flash('status', 'Producto agregado al carrito');
      return redirect()->route('client.show',$request->idproduct);
    }
}
