<?php
namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class PegawaiController extends Controller 
   {
    //    public function index($nama){
    //         return $nama;
    //    }

    // public function index(Request $request){
    //     return $request->segment(2);
    // }

    public function formulir(){
        return view ('formulir');
    }
   
    
    public function proses(Request $request){
            $messages = [
                'required' => 'Input atribute wajib di isi!',
                'min' =>'Input atribute harus di isi minimal :min karakter!',
                'max' =>'Input atribute harus di isi maksimal :max karakter!',
            ];
            $this->validate($request,[
                'nama' => 'required|min:1|max:20',
                'alamat' => 'required|alpha'
            ], $messages);
            $nama = $request->input('nama');
            $alamat = $request->input('alamat');
            return "Nama : ".$nama.",Alamat: ".$alamat;
           }
         }
    //Mengubah pesan error
