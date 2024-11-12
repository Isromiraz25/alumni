<?php

namespace App\Http\Controllers;

use App\Models\Saran;
use Illuminate\Http\Request;

class SaranController extends Controller
{
    public function index()
    {
        $saran = Saran::all();
        return view('admin.saran.index', compact('saran'));
    }

    public function create()
    {
        return view('admin.saran.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pengirim' => 'required',
            'isi_saran' => 'required',
        ]);

        Saran::create($request->all());

        return redirect()->back()
            ->with('success', 'Saran berhasil disimpan.');
    }
    public function deletesaran($id)
    {
        $saran = Saran::find($id);

        if (!$saran) {
            return redirect()->route('admin.saran.index')->with('error', 'Saran not found.');
        }

        $saran->delete();

        return redirect()->route('admin.saran.index')->with('success', 'Saran deleted successfully.');
    }
}
