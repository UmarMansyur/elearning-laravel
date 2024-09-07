<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function teacher() {
        $data = Teacher::where('user_id', auth()->user()->id)->first();
        return view('teacher.dashboard.index', compact('data'));
    }
}
