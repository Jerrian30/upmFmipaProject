<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Imports\DosenImport;
use Maatwebsite\Excel\Facades\Excel;


class LaporanDosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosens = Dosen::all();
        return view('laporanSurvei.dosen.index', compact('dosens'));
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

        Excel::import(new DosenImport, $file);

        return redirect()->route('dosen.index')->with('success', 'Data berhasil diimpor.');
    }

    public function delete(Request $request)
    {
        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'exists:dosens,id',
        ]);

        Dosen::destroy($request->ids);

        return back()->with('success', 'Data berhasil dihapus.');
    }

}
