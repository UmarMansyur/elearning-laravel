<?php

namespace App\Http\Controllers;
use App\Models\Phase;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PhaseController extends Controller
{
    public function index() {
        return view('teacher.phase.index');
    }

    public function get_data_phase()
    {
        $phases = Phase::all();
        return DataTables::of($phases)
            ->addIndexColumn()
            ->addColumn('action', function ($phase) {
                return "
                <div class='text-center'>
                    <a href='#modalFase' data-bs-toggle='modal' class='bg-main-50 text-main-600 py-2 px-14 rounded-pill hover-bg-main-600 hover-text-white' onClick='editFase(" . json_encode($phase) . ")'>Edit</a>
                    <button type='button' class='bg-danger-300 text-white py-2 px-14 rounded-pill hover-bg-danger-600' onClick='hapusFase(" . json_encode($phase->id) . ")'>Hapus</button>
                </div>";
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function checkExist(Request $request, $id = 0)
    {
        $phase = Phase::where('name', $request->phase)->first();
        if ($id) {
            $phase = Phase::where('name', $request->phase)->where('id', '!=', $id)->first();
        }
        if ($phase) {
            return redirect()->back()->with(['error' => 'Fase sudah ada']);
        }
    }

    public function store(Request $request)
    {
        try {
            if ($request->id) {
                $class = Phase::find($request->id);
                $class->name = $request->phase;
                $this->checkExist($request, $request->id);
                $class->save();
                return redirect()->back()->with('success', 'Fase berhasil diupdate');
            } else {
                $this->checkExist($request);
                $class = Phase::create([
                    'name' => $request->phase
                ]);
                return redirect()->back()->with('success', 'Fase berhasil ditambahkan');
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $phase = Phase::find($id);
            $phase->delete();
            return redirect()->back()->with('success', 'Fase berhasil dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

}
