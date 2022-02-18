
@extends('bases')

@section('content')   
<form action="">
    @csrf
    <h1>KELULUSAN</h1>
<table>
    <thead>
      <tr>
        <th>BIL.</th>
        <th>NO. SEBUTHARGA</th>
        <th>NAMA PELANGGAN</th>
        <th>TINDAKAN</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1.</td>
        <td>"NAMA"</td>
        <td>NM/QUO/2010-10000</td>
        <td></td>
      </tr>
    </tbody>
  </table>
  <br>
  <br>
  <table>
    <thead>
      <tr>
        <th>BIL.</th>
        <th>BUTIR-BUTIR PERKHIDMATAN</th>
        <th>KUANTITI</th>
        <th>UNIT HARGA(RM)</th>
        <th>HARGA(RM)</th>
        <th>TINDAKAN</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1.</td>
        <td>"INSTRUMENT/EQUIPTMENT CALIBRATION- UJIAN KAWALAN MUTU (QA) MAMMOGRAPHY"</td>
        <td>1</td>
        <td>1000</td>
        <td>1000</td>
      </tr>
    </tbody>
  </table>
  <br>
  <label for="">JUMLAH KESELURUHAN(RM):</label>
  <input type="text">
  <br>
  <label for="">DISKAUN:</label>
  <input type="text" placeholder="">
  <br>
  <label for="">JUMLAH SELEPAS DISKAUN(RM): RM</label>
  <input type="text">
  <br>
<h5>STATUS PERMOHONAN SEBUTHARGA</h5>
<table>
    <thead>
      <tr>
        <th>BIL.</th>
        <th>STATUS</th>
        <th>TINDAKAN</th>
        <th>NAMA</th>
        <th>CATATAN</th>
        <th>TARIKH</th>
        <th>MASA</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1.</td>
        <td>KEMASUKAN</td>
        <td>"YA"</td>
        <td>"NAMA"</td>
        <td>"QWERTYUIOP"</td>
        <td>"12-12-2021"</td>
        <td>12:12:21</td>
      </tr>
    </tbody>
  </table>
  <br>
  <h5>UNTUK DISEMAK OLEH PELULUS</h5>
<label for="">LULUS:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">CATATAN:</label>
<textarea name="" id="" cols="30" rows="10"></textarea>
<button type="submit">HANTAR</button>
</form>
@endsection
