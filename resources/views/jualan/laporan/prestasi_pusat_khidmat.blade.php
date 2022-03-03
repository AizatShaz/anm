
@extends('bases')

@section('content')   
<h1>LAPORAN -</h1>
<h1>PRESTASI PUSAT KHIDMAT</h1>
<br>
<label for="">PUSAT KHIDMAT:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<input type="text" name="" id="">
<br>
<br>
<label for="">TARIKH INVOIS:</label>
<input type="date" name="" id="">
<label for="">/</label>
<input type="date" name="" id="">
<br>
<button><i class="bi bi-search"></i>CARIAN</button>

<br>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>PUSAT KHIDMAT:</th>
            <th>CAJ DALAM(RM)</th>
            <th>CAJ LUAR(RM)</th>
            <th>JUMLAH(RM)</th>
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
            <td></td>
        </tr>
    </tbody>
</table>
<h5>JUMLAH: RM</h5>
<!--PAGE-->
<br>
<label for="">PUSAT KHIDMAT:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
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
            <th>NO. INVOIS</th>
            <th>TARIKH</th>
            <th>PERKHIDMATAN</th>
            <th>AMAUN(RM)</th>
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
            <td></td>
        </tr>
    </tbody>
</table>
<h5>JUMLAH: RM</h5>
<!--PAGE-->
<!--PAGE-->
<!--PAGE-->

@endsection
