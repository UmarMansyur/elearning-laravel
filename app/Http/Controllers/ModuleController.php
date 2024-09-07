<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function index() {
        return view('teacher.module.index');
    }

    public function create() {
        return view('teacher.module.create');
    }
}
