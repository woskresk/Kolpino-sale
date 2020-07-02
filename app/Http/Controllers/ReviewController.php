<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;

class ReviewController extends Controller
{
    /**
     * 1 шаг: Просмотр товаров конкретным пользователем.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact-qaz');
    }
    public function contacts(Request $request)
    {
        $qaz = new Review;
        $qaz->name = $request->name;
        $qaz->email = $request->email;
        $qaz->text = $request->text;
        $qaz->save();

        $prodd = 'Письмо успешно отправлено!';
        return view('contact-qaz', compact('prodd'));
    }
}
