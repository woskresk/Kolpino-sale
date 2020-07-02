<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;

class Product extends Model
{

    protected $fillable = [
        'id', 'user_id', 'name', 'file', 'old_price',
        'price',  'sale',  'address',  'tel',  'desc', 'category'];

    public function scopeName($query, $name)
    {
        if (!is_null($name)) {
            return $query->where('name', 'like', '%'.$name.'%');
        }

        return $query;
    }

    public function scopePrice($query, $price)
    {
        if (!is_null($price)) {
            return $query->where(compact('price'));
        }

        return $query;
    }

    public function getWithNewOrders($input, $id)
    {
       $this->name = $input['message'];

       $this->save();
       $rfv = 'dfjffj';
    //    orderBy('created_at', 'desc')->take(5)->get();
            return $rfv;
    }
    public function saveInStorage($input, $user_id)
    {
        $wsx = $input['foto'];
        $path = Storage::disk('public')->put('uploads', $wsx);
        
        $this->name = $input['name'];
        $this->category = $input['cat'];
        $this->user_id = $user_id;
        $this->file = $path;
        $this->old_price = $input['old_price'];
        $this->price = $input['price'];
        $this->sale = $input['sale'];
        $this->address = $input['address'];
        $this->tel = $input['tel'];
        $this->desc = $input['desc'];
        $this->save();
    }
    public function changeInStorage($input, $id)
    {
        if(Arr::has($input, 'foto')){
            $wsx = $input['foto'];
        $path = Storage::disk('public')->put('uploads', $wsx);
        }
        
        $edc = $this->find($id);
        $edc->name = $input['name'];
        if(Arr::has($input, 'cat')){
            $edc->category = $input['cat'];
        }
        
        if(isset($path)){
            $edc->file = $path;
        }
        
        $edc->old_price = $input['old_price'];
        $edc->price = $input['price'];
        $edc->sale = $input['sale'];
        $edc->address = $input['address'];
        $edc->tel = $input['tel'];
        $edc->desc = $input['desc'];
        $edc->save();
    }
    public function sortProduct($wsx, $name)
    {
        if($wsx == 1){
            $prod = $this::where('category', $name)->orderBy('created_at', 'asc')->paginate(12);
            $zd = 'selected'; $zd1 = '';$zd2 = '';$zd3 = ''; $count = $prod->lastPage();
        }elseif($wsx == 2){
            $prod = $this::where('category', $name)->orderBy('created_at', 'desc')->paginate(12);
            $zd1 = 'selected';$zd = '';$zd2 = '';$zd3 = ''; $count = $prod->lastPage();
        }elseif($wsx == 3){
    
            $prod = $this::where('category', $name)->orderBy('price', 'asc')->paginate(12);
            $zd2 = 'selected';$zd1 = '';$zd = '';$zd3 = ''; $count = $prod->lastPage();
        }elseif($wsx == 4){
            $prod = $this::where('category', $name)->orderBy('price', 'desc')->paginate(12);
            $zd3 = 'selected';$zd1 = '';$zd2 = '';$zd = ''; $count = $prod->lastPage();
        }   
        
        return  array($prod, $zd, $zd1, $zd2, $zd3, $count);
    }

    public function choiseCustomer()
    {

    if(Session::has('cart')){
        $qaz = Session::get('cart');
    }else{
        $qaz = [];
    }
    
    $wsx = array_unique($qaz);
    $qwerty = count($wsx);
    if ($qwerty<4)
    {
        $prod = $this::orderBy('created_at', 'desc')->take(4)->get();
        $zd = $prod->get(0);
        $zd1 = $prod->get(1);
        $zd2 = $prod->get(2);
        $zd3 = $prod->get(3);
    }else{
        
        $edc = array_keys($wsx);
    $zd = $this::find($wsx[$edc[0]]);
    $zd1 = $this::find($wsx[$edc[1]]);
    $zd2 = $this::find($wsx[$edc[2]]);
    $zd3 = $this::find($wsx[$edc[3]]);
    }
    return  array($zd, $zd1, $zd2, $zd3);
}
    //  ДОБАВИТЬ НА САЙТ 
    public function deleteById($id)
    {
        $flight = $this::find($id);
        // Дабавить эти две строки
        $qaz = $flight->file; 
        Storage::disk('public')->delete($qaz);

        $flight->delete();
    }

}
