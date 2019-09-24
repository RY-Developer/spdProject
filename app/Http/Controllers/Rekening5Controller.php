<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\DB;
use \App\ref_rek_5;

use Illuminate\Http\Request;

class Rekening5Controller extends Controller
{
    public function index(Request $request)
    // public function index()
    {
        if ($request->has('cari')) {
            $rek5 = ref_rek_5::where('nm_rek_5','LIKE','%'.$request->cari. '%')->paginate(10);
        }else{
            $rek5 = ref_rek_5::paginate(10);
        }
        return view('rekening5.index', compact('rek5'));
        
        // if (request()->ajax())
        // {
        //     return datatables()->of(ajaxcrud::latest()->get())->addColumn('action', function($data){
        //         $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm">Edit</button>';
        //         $button = '&nbsp;&nbsp;';
        //         $button = '<button type="button" name="delete" id="'.$data->id.'" class="edit btn btn-danger btn-sm">Edit</button>';
        //         return $button;
        //         })
        //         ->rawColumns(['action'])
        //         ->make(true);
        // }
        // return view('rekening5.index', compact('rek5'));
    }

    public function create(Request $request)
    {
        ref_rek_5::create($request->all());
        return redirect('/rekening5')->with('success','Data success added!!');

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
        $rek5 = ref_rek_5::find($id);
        return view('rekening5.edit', ['rek5'=>$rek5]);
    }

   
    public function update(Request $request, $id)
    {
        $rek5=ref_rek_5::find($id);
        $rek5->update($request->all());
        return redirect('/rekening5')->with('success','Data success updated!!');
    }
    
    
    public function delete($id)
    {
        $rek5=ref_rek_5::find($id);
        $rek5->delete($rek5);
        return redirect('/rekening5')->with('success','Data Deleted!!');
    }
}
