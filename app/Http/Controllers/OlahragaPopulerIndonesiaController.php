<?php

namespace App\Http\Controllers;
use App\Models\OlahragaPopulerIndonesia;
use Illuminate\Http\Request;
use App\Http\Requests\OlahragaPopulerIndonesiaRequest;

class OlahragaPopulerIndonesiaController extends Controller
{
    public function index(){
        $OlahragaPopulerIndonesia = OlahragaPopulerIndonesia::get();
        return view ('index', compact ('OlahragaPopulerIndonesia'));
    }
    public function tambah(){
        return view ('tambah');
    }

    public function edit($id){
        $OlahragaPopulerIndonesia = OlahragaPopulerIndonesia::where('id', $id)->first();
        return view ('edit', compact ('OlahragaPopulerIndonesia'));
    }

    public function lihat($id){
        $OlahragaPopulerIndonesia = OlahragaPopulerIndonesia::where('id', $id)->first();
        return view ('lihat', compact ('OlahragaPopulerIndonesia'));
    }
    public function store(OlahragaPopulerIndonesiaRequest $request) 
    { 
        $OlahragaPopulerIndonesia = new OlahragaPopulerIndonesia(); 
 
        $OlahragaPopulerIndonesia->nama_olahraga = $request->nama_olahraga; 
        $OlahragaPopulerIndonesia->deskripsi = $request->deskripsi; 
 
        $OlahragaPopulerIndonesia->save(); 
 
        return redirect('/'); 
    }

    public function hapus($id) 
    { 
        $olahragapopulerindonesia = OlahragaPopulerIndonesia::where('id', $id)->first();
        $olahragapopulerindonesia->delete();
 
        return redirect('/'); 
    }

    public function update(OlahragaPopulerIndonesiaRequest $request, $id) 
    { 
        $olahragapopulerindonesia = OlahragaPopulerIndonesia::where('id', $id)->first();
        $olahragapopulerindonesia->nama_olahraga = $request->nama_olahraga; 
        $olahragapopulerindonesia->deskripsi = $request->deskripsi; 
        $olahragapopulerindonesia->update();
 
        return redirect('/'); 
    }

}

