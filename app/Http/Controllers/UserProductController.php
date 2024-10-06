<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProductController extends Controller
{
    public function index() {
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
