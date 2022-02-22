
@extends('bases')

@section('content')   
<form action="">
    @csrf
    
<h1>LAPORAN</h1>
<h1>AKAUN BELUM TERIMA</h1>
<br>
<label for="">NAMA PELANGGAN:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">TARIKH INVOIS:</label>
<input type="date" name="" id="">
<label for="">/</label>
<input type="date" name="" id="">
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>NAMA PELANGGAN</th>
            <th>JUMLAH INVOIS(RM)</th>
            <th>BAKI BAYARAN(RM)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>"NAMA"</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>

<!--PAGE-->
<!--PAGE-->
<h4>AGENSI NUKLEAR MALAYSIA (NUKLEAR MALAYSIA) BANGI, 43000 KAJANG, SELANGOR.</h4>
<br>
<h4>LAPORAN AKAUN BELUM TERIMA BAGI TEMPOH : <br> 25-07-2019 HINGGA 25-07-2019</h4>
<br>
<br>
<h5>AKAUN BELUM TERIMA(ABT)</h5>
<button><i class="fas fa-print"></i></button>
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
            <th>NAMA PELANGGAN</th>
            <th>SEMASA</th>
            <th colspan="7">
                OVERDUE
            </th>
            <th>JUMLAH(RM)</th>
        </tr>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th>31-105 HARI</th>
            <th>106-180 HARI</th>
            <th>181-365 HARI</th>
            <th>>1-3 TAHUN</th>
            <th>>3-6 TAHUN</th>
            <th>>6 TAHUN</th>
            <th>JUMLAH OVERDUE</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>"NAMA"</td>
            <td>0.00</td>
            <td>0.00</td>
            <td>0.00</td>
            <td>950.00</td>
            <td>0.00</td>
            <td>0.00</td>
            <td>0.00</td>
            <td>950.00</td>
            <td>950.00</td>
        </tr>
    </tbody>
</table>
<!--PAGE-->
<!--PAGE-->
<!--PAGE-->
<!--PAGE-->
<!--PAGE-->
</form>
@endsection
