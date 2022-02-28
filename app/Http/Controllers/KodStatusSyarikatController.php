<?php

namespace App\Http\Controllers;

use App\Models\kod_status_syarikat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KodStatusSyarikatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kod_status_syarikat = kod_status_syarikat::all();
        $kod_status_syarikat2 = count($kod_status_syarikat);


        return view('kod_status_syarikat.index',[
            'kod_status_syarikat'=>$kod_status_syarikat,
            'kod_status_syarikat2'=>$kod_status_syarikat2,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kod_bank.index');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kod_status_syarikat = new kod_status_syarikat();
        $kod_status_syarikat->kod = $request->kod;
        $kod_status_syarikat->nama = $request->nama;

        $kod_status_syarikat->save();
        return redirect('/kod_status_syarikat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kod_status_syarikat  $kod_status_syarikat
     * @return \Illuminate\Http\Response
     */
    public function show(kod_status_syarikat $kod_status_syarikat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kod_status_syarikat  $kod_status_syarikat
     * @return \Illuminate\Http\Response
     */
    public function edit(kod_status_syarikat $kod_status_syarikat)
    {

        $kod_status_syarikat1 = kod_status_syarikat::all();
        $kod_status_syarikat2 = count($kod_status_syarikat1);


        return view('kod_status_syarikat.edit',[
            'kod_status_syarikat'=>$kod_status_syarikat,
            'kod_status_syarikat1'=>$kod_status_syarikat1,
            'kod_status_syarikat2'=>$kod_status_syarikat2,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kod_status_syarikat  $kod_status_syarikat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kod_status_syarikat $kod_status_syarikat)
    {
        $kod_status_syarikat->kod = $request->kod;
        $kod_status_syarikat->nama = $request->nama;

        $kod_status_syarikat->save();
        return redirect('/kod_status_syarikat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kod_status_syarikat  $kod_status_syarikat
     * @return \Illuminate\Http\Response
     */
    public function destroy(kod_status_syarikat $kod_status_syarikat)
    {
        $kod_status_syarikat->delete();
        return redirect('/kod_status_syarikat')
        ->with('success', 'post deleted successfully');
    }
    public function deleteAll(Request $request)
    {
        $ids = $request->ids;
        DB::table("kod_status_syarikats")->whereIn('id',explode(",",$ids))->delete();
        return response()->json(['success'=>"Products Deleted successfully."]);
    }
}
