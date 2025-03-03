<?php
namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controller;

class PengalamanKerjaController extends Controller
{


    public function index()
    {
        return view('backend.pengalaman_kerja.index');
    }
    public function create()
    {
        $pengalaman_kerja = null;
        return view ('backend.pengalaman_kerja.create',compact('pengalaman_kerja'));
    }
}


    public function store(Request $request)
    {
        DB::table('pengalaman_kerja')-> insert([
            'nama' =>$request->nama,
            'jabatan' =>$request->jabatan,
            'tahun_masuk'=> $request->tahun_masuk,
            'tahun_keluar'=> $request->tahun_keluar, 
            ]);
             return redirect()->route('pengalaman_kerja.index')
             ->with('success','Data pengalaman_kerja b aru telah berhasil di simpan.');
    }

    public function indexlagi()
    {
        $pengalaman_kerja = DB::table('pengalaman_kerja')->get();
return view('backend.pengalaman_kerja.index',compact('pengalaman_kerja'));
    }
    public function edit($id)
    {
        $pengalaman_kerja =DB::table('pengalaman_kerja')->where('id',$id)->first();
        return view('backend.pengalaman_kerja.create',compact('pengalaman_kerja'));
    }
    public function update (Request $request)
    {
    DB::table('pengalaman_kerja')->where('id',$request->id)->update([
        'nama'=> $request->nama,
        'jabatan'=> $request->jabatan,
        'tahun_masuk'=>$request->tahun_masuk,
        'tahun_keluar'=>$request->tahun_keluar
    ]);
    return edirect()->route('pengalaman_kerja.index')
    ->with('success','pengalaman kerja berhasil di perbarui.');
    
}