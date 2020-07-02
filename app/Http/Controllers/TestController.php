<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Product;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class TestController extends Controller
{

    public $client;

    public function __construct(User $user)
    {
        $this->client = $user;
    }

//AJAX 
    public function ajax(Request $request) {
        $input = $request->input('name');
        $inputs = $request->input('email');
        return response()->json(array('msg'=> $input, 'msgs'=> $inputs), 200);
     }
    
    public function index(){
        return view('testi.test');
    }


    public function inde(Request $request){
        $search = $request->search;
        $prod = Product::where('name', 'LIKE', '%'.$search.'%')->get();
        // $prod = [];
        // $prodd = 'Результатов не найдено';
        // $contains = Arr::has($prod, 'name');
        if($prod->isEmpty()){
            return 'fff';
        }else{
            return 'wwww';
        
    }
}









    

    


   // ТЕСТ
   public function testOne()
   {
    $qaz = Session::get('cart');
    $wsx = array_unique($qaz);
    $qwerty = count($wsx);

    $edc = array_keys($wsx);
        $zd = Product::find($wsx[$edc[0]]);
        $zd1 = Product::find($wsx[$edc[1]]);
        $zd2 = Product::find($wsx[$edc[2]]);
        $zd3 = Product::find($wsx[$edc[3]]);
    return view('test', compact('zd', 'zd1', 'zd2', 'zd3'));

    // return $edc;
    }
   

   public function testTwo(Request $request)
   {
       $time = Product::find(20);
       $json = $time->toJson();

       return response()->json(["data"=>$json]);
   }


   public function testos()
   {
       $product = Session::get('cart');
       // $product = $productService->all();
       $qaz = Product::qwerrt();
       $product = array_unique($product);
       // $qaz = $product[0];
       $qaz1 = $product[1];
       $qaz2 = $product[2];
       
       return view('test', compact('qaz', 'qaz1', 'qaz2'));
   }
 
   public function testos1()
   {   if(Session::has('cart')){
           $qaz = Session::get('cart');
       }
       $wsx = array_unique($qaz);
       $qwerty = count($wsx);
       if ($qwerty>2)
       {
           $product = 'yes';
       }else{
           $product = 'no';
       }
       return view('test', compact('product'));
   }
}
