<?php

namespace App\Http\Controllers;

use App\Models\kod_negeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KodNegeriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kod_negeri = kod_negeri::all();
        $kod_negeri2 = count($kod_negeri);

        return view('kod_negeri.index',[
            'kod_negeri'=>$kod_negeri,
            'kod_negeri2'=>$kod_negeri2,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kod_negeri.index');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kod_negeri = new kod_negeri();
        $kod_negeri->kod = $request->kod;
        $kod_negeri->nama = $request->nama;
        // $kod_negeri->idKawasan = $request->idKawasan;

        $kod_negeri->save();
        return redirect('/kod_negeri');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kod_negeri  $kod_negeri
     * @return \Illuminate\Http\Response
     */
    public function show(kod_negeri $kod_negeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kod_negeri  $kod_negeri
     * @return \Illuminate\Http\Response
     */
    public function edit(kod_negeri $kod_negeri)
    {
        $kod_negeri1 = kod_negeri::all();
        $kod_negeri2 = count($kod_negeri1);

        return view('kod_negeri.edit',[
            'kod_negeri'=>$kod_negeri,
            'kod_negeri1'=>$kod_negeri1,
            'kod_negeri2'=>$kod_negeri2,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kod_negeri  $kod_negeri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kod_negeri $kod_negeri)
    {
        $kod_negeri->kod = $request->kod;
        $kod_negeri->nama = $request->nama;
        $kod_negeri->idKawasan = $request->idKawasan;

        $kod_negeri->save();
        return redirect('/kod_negeri');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kod_negeri  $kod_negeri
     * @return \Illuminate\Http\Response
     */
    public function destroy(kod_negeri $kod_negeri)
    {
        $kod_negeri->delete();
        return redirect('/kod_negeri')
        ->with('success', 'deleted successfully');
        //
    }
    public function deleteAll(Request $request)
    {
        $ids = $request->ids;
        DB::table("kod_negeris")->whereIn('id',explode(",",$ids))->delete();
        return response()->json(['success'=>"Deleted successfully."]);
    }
}
