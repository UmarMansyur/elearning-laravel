<?php

namespace App\Http\Controllers;

use App\Models\ClassModel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ClassController extends Controller
{
    public function index()
    {
        return view('teacher.class.index');
    }

    public function get_data_kelas()
    {
        $classes = ClassModel::all();
        return DataTables::of($classes)
            ->addIndexColumn()
            ->addColumn('action', function ($class) {
                return "
                <div class='text-center'>
                    <a href='#modalKelas' data-bs-toggle='modal' class='bg-main-50 text-main-600 py-2 px-14 rounded-pill hover-bg-main-600 hover-text-white' onClick='editKelas(" . json_encode($class) . ")'>Edit</a>
                    <button type='button' class='bg-danger-300 text-white py-2 px-14 rounded-pill hover-bg-danger-600' onClick='hapusKelas(" . json_encode($class->id) . ")'>Hapus</button>
                </div>";
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function checkExist(Request $request, $id = 0)
    {
        $class = ClassModel::where('name', $request->name)->first();
        if ($id) {
            $class = ClassModel::where('name', $request->name)->where('id', '!=', $id)->first();
        }
        if ($class) {
            return redirect()->back()->with(['error' => 'Kelas sudah ada']);
        }
    }

    public function store(Request $request)
    {
        try {
            if ($request->id) {
                $class = ClassModel::find($request->id);
                $class->name = $request->kelas;
                $this->checkExist($request, $request->id);
                $class->save();
                return redirect()->back()->with('success', 'Kelas berhasil diupdate');
            } else {
                $this->checkExist($request);
                $class = ClassModel::create([
                    'name' => $request->kelas
                ]);
                return redirect()->back()->with('success', 'Kelas berhasil ditambahkan');
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }



    public function deleteKelas(Request $request)
    {
        try {
            $class = ClassModel::find($request->id);
            $class->delete();
            return redirect()->back()->with('success', 'Kelas berhasil dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['error' =>  $th->getMessage()]);
        }
    }
}
