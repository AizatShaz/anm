
@extends('bases')

@section('content')   
<h1>LAPORAN -</h1>
<h1>SEMAKAN KUTIPAN</h1>
<form action="">
    @csrf
    <br>
<label for="">TARIKH KEMASUKAN REKOD:</label>
<input type="date" name="" id="">
<label for="">/</label>
<input type="date" name="" id="">
<br>
<button><i class="bi bi-search"></i>CARIAN</button>

<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>NO. RESIT</th>
            <th>JUMLAH HARGA(RM)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>00220212</td>
            <td>100</td>
        </tr>
    </tbody>
</table>
<h5>JUMLAH: RM</h5>
<!--PAGE-->
<h5>LAPORAN SEMAKAN KUTIPAN</h5>
<br>
<label for="">TARIKH KEMASUKAN REKOD:</label>
<input type="date" name="" id="">
<label for="">/</label>
<input type="date" name="" id="">
<br>
<button><i class="bi bi-search"></i>CARIAN</button>

<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>NAMA PELANGGAN</th>
            <th>NO. INVOIS</th>
            <th>TARIKH RESIT</th>
            <th>PILIHAN BAYARAN</th>
            <th>CEK/ RUJ</th>
            <th>AMAUN(RM)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>
</form>
<!--PAGE-->
<!--PAGE-->
@endsection
