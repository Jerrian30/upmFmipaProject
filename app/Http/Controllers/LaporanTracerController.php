<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tracer;
use App\Imports\TracerImport;
use Maatwebsite\Excel\Facades\Excel;


class LaporanTracerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tracers = Tracer::all();
        return view('laporanSurvei.tracer.index', compact('tracers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function import(Request $request)
    {
        $request->validate([
            'excel_file' => 'required|mimes:xlsx,csv',
        ]);

        $file = $request->file('excel_file');

        Excel::import(new TracerImport, $file);

        return redirect()->route('tracer.index')->with('success', 'Data berhasil diimpor.');
    }

    public function delete(Request $request)
    {
        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'exists:tracers,id',
        ]);

        Tracer::destroy($request->ids);

        return back()->with('success', 'Data berhasil dihapus.');
    }

}
