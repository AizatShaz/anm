<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function permohonanSebutharga()
	{
		return view('permohonanSebutharga');
	}

	public function sebuthargaRfq()
	{
		return view('sebuthargaRfq');
	}

	public function janaKadKerja()
	{
		return view('kadkerja.janakadkerja');
	}
}
