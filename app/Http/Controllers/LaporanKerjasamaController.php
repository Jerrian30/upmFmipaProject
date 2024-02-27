<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kerjasama;
use App\Imports\KerjasamaImport;
use Maatwebsite\Excel\Facades\Excel;


class LaporanKerjasamaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kerjasamas = Kerjasama::all();
        return view('laporanSurvei.kerjasama.index', compact('kerjasamas'));
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

        Excel::import(new KerjasamaImport, $file);

        return redirect()->route('kerjasama.index')->with('success', 'Data berhasil diimpor.');
    }

    public function delete(Request $request)
    {
        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'exists:kerjasamas,id',
        ]);

        Kerjasama::destroy($request->ids);

        return back()->with('success', 'Data berhasil dihapus.');
    }

}
