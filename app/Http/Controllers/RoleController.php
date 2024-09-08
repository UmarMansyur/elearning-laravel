<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class RoleController extends Controller
{
    public function index()
    {
        return view('teacher.role.index');
    }

    public function get_data_role()
    {
        $roles = Roles::all();
        return DataTables::of($roles)
            ->addIndexColumn()
            ->addColumn('action', function ($role) {
                return "
                <div class='text-center'>
                    <a href='#modalRole' data-bs-toggle='modal' class='bg-main-50 text-main-600 py-2 px-14 rounded-pill hover-bg-main-600 hover-text-white' onClick='editRole(" . json_encode($role) . ")'>Edit</a>
                    <button type='button' class='bg-danger-300 text-white py-2 px-14 rounded-pill hover-bg-danger-600' onClick='hapusRole(" . json_encode($role->id) . ")'>Hapus</button>
                </div>";
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function checkExist(Request $request)
    {
        $role = Roles::where('name', $request->name)->first();
        if ($role) {
            return redirect()->back()->withErrors(['error' => 'Role already exist']);
        }
    }

    public function store(Request $request)
    {
        try {
            if($request->id){
                $role = Roles::find($request->id);
                $role->name = $request->role;
                $role->save();
                return redirect()->back()->with('success', 'Role berhasil diupdate');
            }else{
                $role = Roles::create([
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
            $role = Roles::find($request->id);
            $role->delete();
            return redirect()->back()->with('success', 'Role berhasil dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['error' =>  $th->getMessage()]);
        }
    }
}
