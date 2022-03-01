<?php

namespace App\Http\Controllers;

use App\Models\kod_kategori_servis;
use App\Models\kod_proses_config;
use App\Models\spp_proses_template_detail;
use App\Models\spp_proses_template_main;
use App\Models\spp_pusat_khidmat;
use App\Models\spp_pusat_khidmat_servis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KodProsesConfigController extends Controller
{
    public function getProsesTemplate(Request $request){
        // dd('masuk');
        $itmp = [];
        $it = spp_proses_template_main::where('idKatServis',$request->id)->get();
        foreach($it as $kod){
            $itmp['ipt'][] = $kod;
        }
        echo json_encode($itmp);
        
        exit();
    }
    public function getDetailProses(Request $request)
    {
                // dd($request);
        $searchNama = [];

        if (isset($request->id)){
            $searchNama = spp_proses_template_detail::where('idTemplate',$request->id)
            ->get();
        }
        return view('kod_proses_config.carian',[
            'kod_proses_config'=>$searchNama,
        ]);
    }
    


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $kod_proses_config1 = kod_kategori_servis::all();
        $kod_proses_config2 = spp_pusat_khidmat::all();
        $kod_proses_config3 = spp_pusat_khidmat_servis::all();
        $kod_proses_config4 = spp_proses_template_detail::all();
        $kod_proses_config5 = kod_proses_config::all();
        $kod_proses_config = kod_proses_config::all();

        return view('kod_proses_config.index',[
            'kod_proses_config'=>$kod_proses_config,
            'kod_proses_config1'=>$kod_proses_config1,
            'kod_proses_config2'=>$kod_proses_config2,
            'kod_proses_config3'=>$kod_proses_config3,
            'kod_proses_config4'=>$kod_proses_config4,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kod_proses_config = new spp_proses_template_main();
        $kod_proses_config->idKatServis = $request->idKatServis;
        $kod_proses_config->nama = $request->nama;

        $kod_proses_config->save();
        return redirect('/kod_proses_config');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kod_proses_config  $kod_proses_config
     * @return \Illuminate\Http\Response
     */
    public function show(kod_proses_config $kod_proses_config)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kod_proses_config  $kod_proses_config
     * @return \Illuminate\Http\Response
     */
    public function edit(kod_proses_config $kod_proses_config)
    {
        $kod_proses_config = kod_proses_config::all();

        return view('kod_proses_config.edit',[
            'kod_proses_config'=>$kod_proses_config,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kod_proses_config  $kod_proses_config
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kod_proses_config $kod_proses_config)
    {
        $kod_proses_config->nama = $request->nama;
        $kod_proses_config->idKatServis = $request->idKatServis;

        $kod_proses_config->save();
        return redirect('/kod_proses_config');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kod_proses_config  $kod_proses_config
     * @return \Illuminate\Http\Response
     */
    public function destroy(kod_proses_config $kod_proses_config)
    {
        $kod_proses_config->delete();
        return redirect('/kod_proses_config')
        ->with('success', 'deleted successfully');
    }
    public function deleteAll(Request $request)
    {
        $ids = $request->ids;
        DB::table("spp_proses_template_mains")->whereIn('id',explode(",",$ids))->delete();
        return response()->json(['success'=>"Deleted successfully."]);
    }
}
