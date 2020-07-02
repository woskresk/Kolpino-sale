<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Arr;

class HomeController extends Controller
{

    
    protected $propper;

    public function __construct(Product $product)
    {

      $this->propper = $product; // Установить переменной client экземпляр класса product
    }


    public function index()
    {   
        $rtg = $this->propper->choiseCustomer(); 
        $zd = $rtg[0]; $zd1 = $rtg[1]; $zd2 = $rtg[2]; $zd3 = $rtg[3]; 
       
        $prod = Product::orderBy('created_at', 'desc')->take(5)->get();
        $qrod = Product::orderBy('price', 'asc')->take(5)->get();
        $arod = Product::orderBy('sale', 'desc')->take(5)->get();
        
        return view('main-qaz', compact('prod', 'qrod', 'arod', 'zd', 'zd1', 'zd2', 'zd3'));
    }
  
   

    // КАТЕГОРИИ
    public function categoryAll($name)
    {
        $prod = Product::where('category', $name)->orderBy('created_at', 'desc')->paginate(12);
        $count = $prod->lastPage();
        return view('category-qaz', compact('prod', 'name', 'count'));
    }


    public function categoryPut(Request $request, $name)
    {
        $wsx = $request->wjs;
        $rtg = $this->propper->sortProduct($wsx, $name); 
        $prod = $rtg[0]; $zd = $rtg[1]; $zd1 = $rtg[2]; $zd2 = $rtg[3]; $zd3 = $rtg[4]; $count = $rtg[5];
        return view('category-qaz', compact('prod', 'name', 'zd', 'zd1', 'zd2', 'zd3', 'count'));
    }


    // Search response
    public function search(Request $request)
    {
        $search = $request->search;
        $prod = Product::where('name', 'LIKE', '%'.$search.'%')->get();
        $prodd = 'Результатов не найдено';
        if(!$prod->isEmpty()){return view('search-qaz', compact('prod'));
        }else{return view('search-qaz', compact('prodd'));}
    }

    
    
}
