<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JualanPermohonanSebuthargaController extends Controller
{

    public function permohonan_sebutharga()
    {
        return view('jualan.permohonan_sebutharga.permohonan_sebutharga',[]);

    }

}
