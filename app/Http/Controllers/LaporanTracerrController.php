<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tracerr;
use App\Imports\TracerrImport;
use Maatwebsite\Excel\Facades\Excel;


class LaporanTracerrController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tracerrs = Tracerr::all();
        return view('laporanSurvei.tracer.index', compact('tracerrs'));
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

        return redirect()->route('tracerr.index')->with('success', 'Data berhasil diimpor.');
    }

    public function delete(Request $request)
    {
        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'exists:tracerrs,id',
        ]);

        Tracerr::destroy($request->ids);

        return back()->with('success', 'Data berhasil dihapus.');
    }

}
