<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Valkyrie;

class ValkyrieController extends Controller
{
    public function tampil(){
        $valkyrie = Valkyrie::all();
        return view('valkyrie.valkyrie', compact('valkyrie'));
    }

    public function tambah(){
        return view('valkyrie.tambah_valkyrie');
    }

    public function upload(Request $request){
        $this->validate($request, [
            'nama' => 'required',
            'rank' => 'required',
            'tipe' => 'required',
            'role' => 'required',
            'foto' => 'file|image|mimes:jpeg,png,jpg:max:2048'
        ]);
        $foto = $request->file('foto');
        $nama_foto = time()."_".$foto->getClientOriginalName();
        $tujuan_upload = 'image_valkyrie';
        $foto->move($tujuan_upload,$nama_foto);
        
        Valkyrie::create([
            'nama' => $request->nama,
            'rank' => $request->rank,
            'tipe' => $request->tipe,
            'role' => $request->role,
            'foto' => $nama_foto
        ]);
        return redirect('/valkyrie');
    }
}
