<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pendidikan;

class PendidikanController extends Controller
{
    public function index()
    {
        $pendidikan = Pendidikan::all();
        return view('backend.pendidikan.index', compact('pendidikan'));
    }

    public function create()
    {
        return view('backend.pendidikan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'tingkatan' => 'required|string|max:10',
            'tahun_masuk' => 'required|integer',
            'tahun_keluar' => 'required|integer',
        ]);

        Pendidikan::create($request->all());

        return redirect()->route('pendidikan.index')
            ->with('success', 'Data Pendidikan baru berhasil disimpan.');
    }

    public function edit(Pendidikan $pendidikan)
    {
       
        return view('backend.pendidikan.edit', compact('pendidikan'));
    }
    public function update(Request $request, Pendidikan $pendidikan)
    {
    
        $pendidikan->update($request->all());
        return redirect()->route ('pendidikan.index')
        ->with('success','pendidikan berhasil di perbaharui.');

    }

    public function destroy($id)
    {
        $pendidikan = Pendidikan::findOrFail($id);
        $pendidikan->delete();

        return redirect()->route('pendidikan.index')
            ->with('success', 'Data Pendidikan berhasil dihapus.');
    }
} 
