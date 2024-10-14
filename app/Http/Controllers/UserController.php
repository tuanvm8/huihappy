<?php

namespace App\Http\Controllers;
use App\Http\Requests\User\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function getLogin() 
    // {
    //     if (Auth::check()) return redirect()->route('user.dashboard');
    //     return view('dashboard.login');
    // }

    // public function postLogin(Request $request)
    // {

    //     dd(242345235);
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required',
    //         'password' => 'required',
    //     ]);
    //     if ($validator->fails()) {
    //         return redirect()->route('login')->withErrors($validator)->withInput();
    //     }

    //     $validatedData = $validator->validated();
    //     try {
    //         if (Auth::guard('admin')->attempt(['name' => $validatedData['name'], 'password' => $validatedData['password']])) {
    //             if (Auth::guard('admin')->user()->status == 1) {
    //                 return redirect()->route('trang-chu');
    //             } else {
    //                 Auth::guard('admin')->logout();
    //                 return redirect()->route('login')->with('messageError', 'Bạn không có quyền truy cập');;
    //             }
    //         }
    //     } catch (\Throwable $th) {
    //         dd($th->getMessage());      
    //         return redirect()->route('login')->with('messageError',  config('message.login_failed'))->withInput();
    //     }
    // }
    
    public function dashboard() {
        return view('index');
    }

    public function create() {
        return view('category');
    }

    public function report() {
        return view('report');
    }

    public function listYinHui() {
        return view('list_yin_hui');
    }

    public function detail() {
        return view('detail');
    }

    public function bill() {
        return view('bill');
    }
}
