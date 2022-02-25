<?php

namespace App\Http\Controllers;

use App\Models\kod_bayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KodBayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kod_bayaran = kod_bayaran::all();
        $kod_bayaran2 = count($kod_bayaran);


        return view('kod_bayaran.index',[
            'kod_bayaran'=>$kod_bayaran,
            'kod_bayaran2'=>$kod_bayaran2
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kod_bayaran.index');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kod_bayaran = new kod_bayaran();
        $kod_bayaran->kod = $request->kod;
        $kod_bayaran->nama = $request->nama;

        $kod_bayaran->save();
        return redirect('/kod_bayaran');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kod_bayaran  $kod_bayaran
     * @return \Illuminate\Http\Response
     */
    public function show(kod_bayaran $kod_bayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kod_bayaran  $kod_bayaran
     * @return \Illuminate\Http\Response
     */
    public function edit(kod_bayaran $kod_bayaran)
    {
        $kod_bayaran1 = kod_bayaran::all();
        $kod_bayaran2 = count($kod_bayaran1);

        return view('kod_bayaran.edit',[
            'kod_bayaran'=>$kod_bayaran,
            'kod_bayaran1'=>$kod_bayaran1,
            'kod_bayaran2'=>$kod_bayaran2,

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kod_bayaran  $kod_bayaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kod_bayaran $kod_bayaran)
    {
        $kod_bayaran->kod = $request->kod;
        $kod_bayaran->nama = $request->nama;

        $kod_bayaran->save();
        return redirect('/kod_bayaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kod_bayaran  $kod_bayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(kod_bayaran $kod_bayaran)
    {
        $kod_bayaran->delete();
        return redirect('/kod_bayaran')
        ->with('success', 'deleted successfully');
        //
    }

    public function deleteAll(Request $request)
    {
        $ids = $request->ids;
        DB::table("kod_bayarans")->whereIn('id',explode(",",$ids))->delete();
        return response()->json(['success'=>"Deleted successfully."]);
    }
}
