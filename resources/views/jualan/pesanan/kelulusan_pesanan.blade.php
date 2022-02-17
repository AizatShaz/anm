
@extends('bases')

@section('content')   
<form action="">
    @csrf

<h1>KELULUSAN PESANAN</h1>
<h3>SENARAI PESANAN</h3>
<table>
    <thead>
        <tr>
            <th>BIL.</th>
            <th>NO. PESANAN</th>
            <th>NAMA PELANGGAN</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>ABCD1234</td>
            <td>RUMBIA</td>
            <td><button></button></td>
        </tr>
    </tbody>
</table>


<label for="">NAMA PELANGGAN:</label>
<input type="text" name="" id="">
<br>
<label for="">JENIS PESANAN:</label>
<input type="text" name="" id="">
<br>
<label for="">NO PESANAN:</label>
<input type="text" name="" id="">
<br>
<label for="">NO SEBUTHARGA:</label>
<input type="text" name="" id="">
<br>
<label for="">TARIKH PESANAN:</label>
<input type="text" name="" id="">
<br>

<label for="">MASA PESANAN:</label>
<input type="text" name="" id="">
<br>
<h5>MAKLUMAT PESANAN</h5>
<h6>JUMLAH KHIDMAT/PRODUK: 1</h6>
<table>
    <thead>
        <tr>
            <th></th>
            <th>BIL</th>
            <th>NAMA KHIDMAT/PRODUK</th>
            <th>KUANTITI</th>
            <th>UNIT HARGA(RM)</th>
            <th>AMAUN(RM)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><input type="checkbox" name="" id=""></td>
            <td>1.</td>
            <td>100</td>
            <td>300</td>
            <td>3000</td>
            <td>3000</td>
        </tr>
    </tbody>
</table>

<br>
<label for="">DISKAUN</label>
<input type="text" name="" id="">
<br>
<label for="">JUMLAH SELEPAS DISKAUN(RM) : RM</label>
<input type="text" name="" id="">
<br>
<h5>STATUS PERMOHONAN PESANAN</h5>

<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>STATUS</th>
            <th>TINDAKAN</th>
            <th>NAMA STAF</th>
            <th>CATATAN</th>
            <th>TARIKH</th>
            <th>MASA</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>100</td>
            <td></td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
        </tr>
    </tbody>
</table>
<h5>UNTUK DISEMAK PELULUS</h5>
<label for="">TINDAKAN:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<label for="">PENJANA KAD KERJA:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<label for="">CATATAN:</label>
<input type="text" name="" id=""><br>
<button type="submit">HANTAR</button>
</form>
@endsection
