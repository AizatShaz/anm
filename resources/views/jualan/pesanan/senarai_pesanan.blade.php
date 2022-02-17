
@extends('bases')

@section('content')   
<h1>SENARAI PESANAN</h1>
<label for="">NAMA PELANGGAN:</label>
<input type="text" id="" name="" >
<br>
<label for="">STATUS:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<label for="">ATAU</label>
<br>
<label for="">NO. PESANAN:</label>
<input type="text" id="" name="" >
<br>
<button>CARIAN</button>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>NAMA PELANGGAN</th>
            <th>NO PESANAN</th>
            <th>STATUS</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>12345</td>
            <td>12-12-2021-123</td>
            <td>BARU</td>
        </tr>
    </tbody>
</table>
@endsection
