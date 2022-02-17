
@extends('bases')

@section('content')   
<h1>JANA PRO FORMA</h1>
<label for="">NAMA PELANGGAN:</label>
<input type="text" id="" name="" >
<br>
<label for="">NO PESANAN:</label>
<input type="text" name="" id="">
<br>
<label for="">ATAU</label>
<br>
<label for="">NO. PERJANJIAN/PERJANJIAN BERJADUAL:</label>
<input type="text" id="" name="" >
<br>
<button>CARIAN</button>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>NAMA PELANGGAN</th>
            <th>NO PESANAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>12345</td>
            <td>TEE53</td>
        </tr>
    </tbody>
</table>
<label for="">NO. PESANAN</label>
<input type="text" name="" id="">
<br>
<label for="">NAMA PESANAN</label>
<input type="text" name="" id="">
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>MAKLUMAT PESANAN</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>SYAZWAN</td>
            <td>JANAKAN PRO FORMA</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td>1.</td>
            <td>SYAZWAN</td>
            <td>PRO FORMA TELAH DIJANA:
                NO PRO FORMA:
                NM/PRO/775
            </td>
        </tr>
    </tbody>
</table>

@endsection
