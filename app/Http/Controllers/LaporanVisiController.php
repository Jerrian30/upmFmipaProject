<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visi;
use App\Imports\VisiImport;
use Maatwebsite\Excel\Facades\Excel;


class LaporanVisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visis = Visi::all();
        return view('laporanSurvei.visi.index', compact('visis'));
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

        Excel::import(new VisiImport, $file);

        return redirect()->route('visi.index')->with('success', 'Data berhasil diimpor.');
    }

    public function delete(Request $request)
    {
        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'exists:visis,id',
        ]);

        Visi::destroy($request->ids);

        return back()->with('success', 'Data berhasil dihapus.');
    }

}
