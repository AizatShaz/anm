
@extends('bases')

@section('content')   
<h1>KEMASKINI BAYARAN</h1>
<br>
<br>
<br>
<label for="">NAMA PELANGGAN:</label>
<input type="text" name="" id="">
<br>
<p>ATAU</p>
<br>
<label for="">NO. RESIT:</label>
<input type="text" name="" id="">
<br>
<br>
<button>CARIAN</button>
<br>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>NO. RESIT</th>
            <th>NAMA PELANGGAN</th>
            <th>CEK/RUJ</th>
            <th>MAKLUMAT INVOIS</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>89232109</td>
            <td>"NAMA"</td>
            <td>123456</td>
            <td>
                NO INVOIS: 
                <br>
                NM/INV/303-00001
                AMAUN (RM): 
                <br>
                JUMLAH (RM): 
                <br>
                0.00
            </td>
        </tr>
    </tbody>
</table>
<br>
<button><i class="fas fa-print"></i> CETAK</button>
<!-- pages -->
<!-- pages -->
<!-- pages -->
<!-- pages -->
@endsection
