<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreBlogPost;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;


class ProductController extends Controller
{
     /**
     * Создаёт посредников для методов контролера.
     *
     * @return void
     */ 
    // $this->middleware('log')->only('index');
    // $this->middleware('subscribed')->except('store');
    protected $client;

    public function __construct(Product $product)
    {
      $this->middleware('auth')->except('show'); // установить посредника(аутентификация) для всех методов этого контроллера кроме show
      $this->client = $product; // Установить переменной client экземпляр класса product
    }
   

    /**
     * 1 шаг: Просмотр товаров конкретным пользователем.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        $prod = Product::where('user_id', $id)->get();
        return view('moio-qaz', compact('prod'));
    }

    /**
     * 2/1 шаг: Вывести форму для вставки нового товара
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('create-qaz');
    }

    /**
     * 2/2 шаг: POST - вставляет товар в базу данных из формы (create())
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogPost $request)
    {
        // $validated = $request->validated();
        $input = $request->all();
        $user_id = Auth::user()->id;
        $this->client->saveInStorage($input, $user_id);
        $path4 = 'Объявление добавленно!';
        return view('create-qaz', compact('path4'));
    }

    /**
     * 3 шаг: Покаывает товар из базы по id 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->supportShow($id);
        // Счётчик остатка дней до конца акции
        $ydh = Carbon::now()->addDays(-30);
        $flb = Product::find($id);
        $wsx = $flb->created_at;
        $time = $ydh->diffInDays($wsx, false);
        $item = Product::find($id);
        $prod = Product::orderBy('created_at', 'desc')->take(4)->get();
        // return $time;

        return view('product-qaz', compact('item', 'time', 'prod'));
    }

    public function supportShow($id)
        {
            if (Session::has('cart'))
            {
                return Session::push('cart', $id);
            }else{
                $products = [];
                return Session::put('cart', $products);
            }
        }
    /**
     * 4/1 шаг: Выводоит форму для редактирования товара то id 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Счётчик остатка дней до конца акции
        $ydh = Carbon::now()->addDays(-30);
        $flb = Product::find($id)->value('created_at');
        $time = $ydh->diffInDays($flb, false);
        $item = Product::find($id);
        return view('change-qaz', compact('item', 'time'));
    }

    /**
     * 4/2 шаг: POST - вставляет отредактированный товар в базу из формы (edit($id)).
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $this->client->changeInStorage($input, $id);
        return redirect('/products');
    }

   

    // ДОБАВИТЬ НА ХОСТИНГ ФУНКЦИЮ УДАЛЕНИЯ ФАЙЛА ИЗ 
    public function destroy($id)
    {
        $this->client->deleteById($id);

        return redirect()->route('products.index');
    }

}

