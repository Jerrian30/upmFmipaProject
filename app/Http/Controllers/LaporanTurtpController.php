<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turtp;
use App\Imports\TurtpImport;
use Maatwebsite\Excel\Facades\Excel;


class LaporanTurtpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $turtps = Turtp::all();
        return view('laporanSurvei.turtp.index', compact('turtps'));
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

        Excel::import(new TurtpImport, $file);

        return redirect()->route('turtp.index')->with('success', 'Data berhasil diimpor.');
    }

}
