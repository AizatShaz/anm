
@extends('bases')
{{-- <style>
    .ui-datepicker-calendar {
       display: none;
    }
    .ui-datepicker-month {
       display: none;
    }
    .ui-datepicker-prev{
       display: none;
    }
    .ui-datepicker-next{
       display: none;
    }
</style> --}}
@section('content')   
<h1>LAPORAN -</h1>
<h1>PRESTASI BULANAN</h1>
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
<button><i class="bi bi-search"></i>CARIAN</button>

<br>
<br>
<h5>LAPORAN PRESTASI BAGI BULAN <br> MEI 2020</h5>
<br>
<table>
    <col>
    <colgroup span="3"></colgroup>
    <colgroup span="2"></colgroup>
    <thead align="center">
        <tr>
            {{-- <th></th> --}}
            <th colspan="3">MENGIKUT INVOIS</th>
            <th colspan="2">MENGIKUT RESIT</th>
        </tr>
        <tr>
            <th></th>
            <th>BULAN MEI</th>
            <th>% NILAI BULANAN</th>
            <th>TERKUMPUL BAGI 2019</th>
            <th>BULAN MEI</th>
            <th>TERKUMPUL BAGI 2020</th>

        </tr>
    </thead>
    <tbody>
        <tr>
            <th rowspan="3" scope="rowgroup">
                MENGIKUT SEKTOR PENGGUNA            </th>
            <th>AWAM</th>
            <td>SWASTA</td>
            <td>NEGARA LUAR</td>
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
        {{-- <tr>
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
        </tr> --}}
    </tbody>
</table>
<!--PAGE-->
<!--PAGE-->
<script>
    $(function() {
   $( "#datepicker" ).datepicker({dateFormat: 'yy',  changeYear: true,  changeMonth: false});
});
</script>
@endsection
