
@extends('bases')

@section('content')   
<h1>SENARAI PESANAN</h1>
<label for="">NAMA PELANGGAN:</label>
<input type="tel" id="" name="" >
<br>
<label for="">STATUS:</label>
<input type="tel" id="" name="" >
<br>
<label for="">NO. PESANAN:</label>
<input type="tel" id="" name="" >
<br>
<button>CARIAN</button>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>NO. PESANAN BERJADUAL/PERJANJIAN</th>
            <th>TARIKH PERKHIDMATAN/NO JADUAL</th>
            <th>NAMA PELANGGAN</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>12345</td>
            <td>12-12-2021-123</td>
            <td>LORUM IPSUM</td>
            <td><button>NOTIFIKASI & TINDAKAN</button></td>
        </tr>
    </tbody>
</table>
@endsection
