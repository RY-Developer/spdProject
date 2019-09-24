<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\ref_kegiatan;

class RKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data = ref_kegiatan::where('ket_kegiatan','LIKE','%'.$request->cari. '%')->paginate(10);
        }else{
            $data = ref_kegiatan::paginate(10);
        }
        return view('kegiatan.index', compact('data'));
    }
    
    public function create(Request $request)
    {
        ref_kegiatan::create($request->all());
        return redirect('/kegiatan')->with('success','Data success added!!');
        
    }
    
    public function store(Request $request)
    {
        //
    }
    
    
    public function show($id)
    {
        //
    }
    
    
    public function edit($id)
    {
        $kegiatan = ref_kegiatan::find($id);
        return view('kegiatan.edit', ['kegiatan'=>$kegiatan]);
    }
    
    
    public function update(Request $request, $id)
    {
        $data=ref_kegiatan::find($id);
        $data->update($request->all());
        return redirect('/kegiatan')->with('success','Data success updated!!');
    }
    
    
    public function delete($id)
    {
        $data=ref_kegiatan::find($id);
        $data->delete($kegiatan);
        return redirect('/kegiatan')->with('success','Data Deleted!!');
    }
}
