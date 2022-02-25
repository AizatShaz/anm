<?php

namespace App\Http\Controllers;

use App\Models\kod_sijil_iso;
use Illuminate\Http\Request;

class KodSijilIsoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kod_sijil_iso = kod_sijil_iso::all();
        $kod_sijil_iso2 = count($kod_sijil_iso);

        return view('kod_sijil_iso.index',[
            'kod_sijil_iso'=>$kod_sijil_iso,
            'kod_sijil_iso2'=>$kod_sijil_iso2,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kod_sijil_iso.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kod_sijil_iso = new kod_sijil_iso();
        $kod_sijil_iso->idJC = $request->idJC;
        if ($request->hasFile('keterangan')) {
            $kod_sijil_iso->keterangan = $request->file('keterangan')->store('/public/keterangan1');
        }
        // dd($request);

        $kod_sijil_iso->save();
        return redirect('/kod_sijil_iso');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kod_sijil_iso  $kod_sijil_iso
     * @return \Illuminate\Http\Response
     */
    public function show(kod_sijil_iso $kod_sijil_iso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kod_sijil_iso  $kod_sijil_iso
     * @return \Illuminate\Http\Response
     */
    public function edit(kod_sijil_iso $kod_sijil_iso)
    {
        return view('kod_sijil_iso.edit',[
            'kod_sijil_iso' => $kod_sijil_iso,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kod_sijil_iso  $kod_sijil_iso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kod_sijil_iso $kod_sijil_iso)
    {
        $kod_sijil_iso->idJC = $request->idJC;
        if ($request->hasFile('keterangan')) {
            $kod_sijil_iso->keterangan = $request->file('keterangan')->store('/public/keterangan1');
        }

        $kod_sijil_iso->save();
        return redirect('/kod_sijil_iso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kod_sijil_iso  $kod_sijil_iso
     * @return \Illuminate\Http\Response
     */
    public function destroy(kod_sijil_iso $kod_sijil_iso)
    {
        $kod_sijil_iso->delete();
        return redirect('/kod_sijil_iso')
        ->with('success', 'deleted successfully');
    }
}
