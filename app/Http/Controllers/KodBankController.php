<?php

namespace App\Http\Controllers;

use App\Models\kod_bank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KodBankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kod_bank = kod_bank::all();
        $kod_bank2 = count($kod_bank);


        return view('kod_bank.index',[
            'kod_bank'=>$kod_bank,
            'kod_bank2'=>$kod_bank2,
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
        $kod_bank = new kod_bank();
        $kod_bank->kod = $request->kod;
        $kod_bank->nama = $request->nama;

        $kod_bank->save();
        return redirect('/kod_bank');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kod_bank  $kod_bank
     * @return \Illuminate\Http\Response
     */
    public function show(kod_bank $kod_bank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kod_bank  $kod_bank
     * @return \Illuminate\Http\Response
     */
    public function edit(kod_bank $kod_bank)
    {
        $kod_bank1 = kod_bank::all();
        $kod_bank2 = count($kod_bank1);

        
        return view('kod_bank.edit',[
            'kod_bank'=>$kod_bank,
            'kod_bank1'=>$kod_bank1,
            'kod_bank2'=>$kod_bank2,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kod_bank  $kod_bank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kod_bank $kod_bank)
    {
        $kod_bank->kod = $request->kod;
        $kod_bank->nama = $request->nama;

        $kod_bank->save();
        return redirect('/kod_bank');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kod_bank  $kod_bank
     * @return \Illuminate\Http\Response
     */
    public function destroy(kod_bank $kod_bank)
    {
        $kod_bank->delete();
        return redirect('/kod_bank');
    }

    public function deleteAll(Request $request)
    {
        $ids = $request->ids;
        DB::table("kod_banks")->whereIn('id',explode(",",$ids))->delete();
        return response()->json(['success'=>"Deleted successfully."]);
    }
}
