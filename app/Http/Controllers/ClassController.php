<?php

namespace App\Http\Controllers;

use App\Models\ClassModel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ClassController extends Controller
{
    public function index()
    {
        return view('teacher.role.index');
    }

    public function get_data_role()
    {
        $classes = ClassModel::all();
        return DataTables::of($classes)
            ->addIndexColumn()
            ->addColumn('action', function ($class) {
                return "
                <div class='text-center'>
                    <a href='#modalRole' data-bs-toggle='modal' class='bg-main-50 text-main-600 py-2 px-14 rounded-pill hover-bg-main-600 hover-text-white' onClick='editRole(" . json_encode($class) . ")'>Edit</a>
                    <button type='button' class='bg-danger-300 text-white py-2 px-14 rounded-pill hover-bg-danger-600' onClick='hapusRole(" . json_encode($class->id) . ")'>Hapus</button>
                </div>";
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function checkExist(Request $request)
    {
        $class = ClassModel::where('name', $request->name)->first();
        if ($class) {
            return redirect()->back()->withErrors(['error' => 'Role already exist']);
        }
    }

    public function store(Request $request)
    {
        try {
            if ($request->id) {
                $class = ClassModel::find($request->id);
                $class->name = $request->role;
                $class->save();
                return redirect()->back()->with('success', 'Role berhasil diupdate');
            } else {
                $class = ClassModel::create([
                    'name' => $request->role
                ]);
                return redirect()->back()->with('success', 'Role berhasil ditambahkan');
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }



    public function deleteRole(Request $request)
    {
        try {
            $class = ClassModel::find($request->id);
            $class->delete();
            return redirect()->back()->with('success', 'Role berhasil dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['error' =>  $th->getMessage()]);
        }
    }
}
