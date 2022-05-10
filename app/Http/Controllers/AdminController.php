<?php

namespace App\Http\Controllers;
use App\services;

class AdminController extends Controller
{
    public function __construct()
    {
        //هاد التابع مشان ما اقدر فوت عرابط الادمن بدون مصادقة وبدون ماكون ادمن
        $this->middleware(['auth', 'role:owner']);
    }
    public function index(){
        return view('home');
    }
    public function approval($id)
    {
       $data=services::find($id);
       $data->status='فعالة';
       $data->value_status='1';
       $data->save();
       return back();
    }
    public function cancel($id)
    {
        $service = services::findOrFail($id);
        $service->delete();
        return redirect('/services');
    }
}

