
@extends('bases')

@section('content')   
<form action="">
    @csrf
    <h1>LAPORAN -</h1>
<h1>PRESTASI PELANGGAN</h1>
<br>
<label for="">PUSAT KHIDMAT:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<input type="text" name="" id="">
<br>
<br>
<label for="">BULAN & TAHUN:</label>
<input type="month" name="" id="datepicker" placeholder="MARCH 2019" >
<br>
<button>CARIAN</button>
<br>
<br>
<h5>LAPORAN PRESTASI PELANGGAN / KUMPULAN (MENGIKUT INVOIS) BAGI BULAN <br> MEI 2020</h5>
<br>
<br>
<table>
    <col>
    <col>
    <col>
    <colgroup span="7"></colgroup>
    <col>
    <thead align="center">
        <tr>
            <th>BIL</th>
            <th>PELANGGAN</th>
            <th colspan="7">
                KUMPULAN
            </th>
            <th>JUMLAH(RM)</th>
        </tr>
        <tr>
            <th></th>
            <th></th>
            <th>TESTING</th>
            <th>IRRADIATION</th>
            <th>CALIBRATION</th>
            <th>FABRICATION</th>
            <th>EXTERNAL</th>
            <th>EVALUATION OF PERSONAL DOSIMETER</th>
            <th>PRODUCT</th>
            <th>JUMLAH (RM)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>"NAMA"</td>
            <td>0.00</td>
            <td>0.00</td>
            <td>0.00</td>
            <td>0.00</td>
            <td>0.00</td>
            <td>0.00</td>
            <td>0.00</td>
            <td>0.00</td>
            <td>4170.00</td>
        </tr>
    </tbody>
    <br>
    <tbody>
        <tr>
            <td></td>
            <td>JUMLAH KESELURUHAN(RM)</td>
            <td>0.00</td>
            <td>0.00</td>
            <td>0.00</td>
            <td>0.00</td>
            <td>0.00</td>
            <td>0.00</td>
            <td>0.00</td>
            <td>0.00</td>
            <td>4170.00</td>
        </tr>
    </tbody>
</table>
</form>
@endsection
