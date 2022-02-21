
@extends('bases')

@section('content')   
<h1>KAD KERJA - REPAIR</h1>

<form action="">
    @csrf

<br>
<h5>PEMBAHAGIAN TUGAS</h5>
<br>
<br>
<label for="">TARIKH JANA KAD KERJA:</label>
<input type="date" name="" id="">
<br>
<label for="">TARIKH PEMBAHAGIAN:</label>
<input type="date" name="" id="">
<br>

<br>
<table>
    <thead>
        <tr>
            <th></th>
            <th>BIL.</th>
            <th>PROSES</th>
            <th>STAF</th>
            <th>TEMPOH(HARI) SEBENAR/JANGKA</th>
            <th>STATUS</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>DAFTAR ALAT </td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>PEMBAIKAN ALAT</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>SETUP SURAT PERSETUJUAN</td>
            <td>"NAMA"</td>
            <td>5</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>4.</td>
            <td>KALIBRASI</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>5.</td>
            <td>MUAT NAIK DOKUMEN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>6.</td>
            <td>KERJA SELESAI</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
    </tbody>
</table>
<br>
<button>PAPAR AKTIVITI</button>
<br>
<!-- PAGE -->
<br>
<h4>DAFTAR ALAT</h4>
<br>
<label for="">NO KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<br>
<br>
<label for="">NAMA ALAT:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">MODEL:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">PEMBUAT:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">NO. SIRI ALAT:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">NO. MY ASSET:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">LOKASI/NO. BILIK:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">KETERANGAN:</label>
<textarea name="" id="" cols="30" rows="10"></textarea><br>
<br>
<button>TAMBAH</button>
<br>
<!-- PAGE -->
<br>
<h4>DAFTAR ALAT</h4>
<br>
<label for="">NO KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<br>
<br>
<label for="">NAMA ALAT:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">MODEL:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">PEMBUAT:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">NO. SIRI ALAT:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">NO. MY ASSET:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">LOKASI/NO. BILIK:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">KETERANGAN:</label>
<textarea name="" id="" cols="30" rows="10"></textarea><br>
<br>
<button>KEMASKINI</button>
<br>










</form>
@endsection
