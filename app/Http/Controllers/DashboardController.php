<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class DashboardController extends Controller
{
    public function getLogin()
    {
        if (Auth::check()) return redirect()->route('admin.dashboard.index');
        return view('dashboard.login');
    }

    public function postLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->route('admin.login')->withErrors($validator)->withInput();
        }
        $validatedData = $validator->validated();
        if (Auth::guard('admin')->attempt(['name' => $validatedData['name'], 'password' => $validatedData['password']])) {
            if(Auth::guard('admin')->user()->status == 1 ) {
                return redirect()->route('admin.user.dashboard');
            } else {
                Auth::guard('admin')->logout();
                return redirect()->route('admin.login')->with('messageError', 'Bạn không có quyền truy cập');;
            }   
        }
        return redirect()->route('admin.login')->with('messageError',  config('message.login_failed'))->withInput();
    }

    public function getLogOut()
    {
        if ( Auth::guard('admin')) {
            return redirect()->route('admin.login');
        }
        return redirect()->route('admin.login');
    }

    // public function getData() {
    //     return view('index');
    // }

    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     return view('admin.dashboard.index');
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
