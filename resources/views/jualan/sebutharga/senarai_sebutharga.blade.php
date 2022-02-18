
@extends('bases')

@section('content')   
<form action="">
    @csrf

<br>
<label for="">NAMA PELANGGAN:</label>
<input type="text" name="" id="">
<br>
<label for="">PUSAT KHIDMAT</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<h5>ATAU</h5>
<br>
<label for="">NO. SEBUTHARGA</label>
<input type="text" name="" id="">
<label for="">*Cth : NM/QUO/2010-10000</label>
<button>CARIAN</button>
<br>
<br>
<table>
    <thead>
      <tr>
        <th>BIL.</th>
        <th>NAMA PELANGGAN</th>
        <th>NO. SEBUTHARGA</th>
        <th>STATUS</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1.</td>
        <td>"NAMA"</td>
        <td>NM/QUO/01223-45</td>
        <td>BARU</td>
      </tr>
    </tbody>
  </table>
  <br>
  <br>
  <br>
<label for="">NO. SEBUTHARGA:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">NO. RFQ:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">TARIKH SEBUTHARGA:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">TARIKH SAH SEBUTHARGA:</label>
<input type="text" name="" id="">
<br>
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
        <td>BARU</td>
        <td>"NAMA"</td>
        <td>"NAMA"</td>
        <td>"NAMA"</td>
        <td>"NAMA"</td>
        <td>NM/QUO/01223-45</td>
      </tr>
    </tbody>
  </table>
<br>
<table>
    <thead>
      <tr>
        <th>BIL.</th>
        <th> BUTIR-BUTIR PERKHIDMATAN</th>
        <th>KUANTITI</th>
        <th>UNIT HARGA(RM)</th>
        <th>HARGA(RM)</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1.</td>
        <td>""</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
  <br>
  <br>
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
<br>
<table>
    <thead>
      <tr>
        <th>BIL.</th>
        <th>NAMA PELANGGAN</th>
        <th>CONTACT</th>
        <th>NO. TELEFON BIMBIT</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1.</td>
        <td>""</td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
      <br>
    <label for="">NO. SEBUTHARGA:</label>
    <input type="text" name="" id="">
    <br>
    <br>
    <label for="">NAMA PELANGGAN:</label>
    <input type="text" name="" id="">
    <br>
    <br>
    <label for="">ALAMAT PELANGGAN:</label>
    <input type="text" name="" id="">
    <br>
    <br>
    <label for="">E-MEL:</label>
    <input type="text" name="" id="">
    <br>
    <br>
    <label for="">LAMPIRAN PERMOHONAN SEBUTHARGA:</label>
    <input type="text" name="" id="">
    <br>
    <br>
    <label for="">TARIKH:</label>
    <input type="text" name="" id="">
    <br>
    <br>
    <label for="">TARIKH SAH:</label>
    <input type="text" name="" id="">
    <br>
    <br>
    <label for="">CATATAN:</label>
    <input type="text" name="" id="">
    <br>
    <br>
    <label for="">NO. SEBUTHARGA:</label>
    <input type="text" name="" id="">
    <br>
    <br>
    <label for="">TARIKH SEBUTHARGA:</label>
    <input type="text" name="" id="">
    <br>
    <br>
    <label for="">TARIKH SAH SEBUTHARGA:</label>
    <input type="text" name="" id="">
    <br>
    <h5>NYATAKAN SEBAB-SEBAB BATAL</h5>
    <label for="">CATATAN:</label>
    <textarea name="" id="" cols="30" rows="10"></textarea>
    <br>
    <button type="submit">HANTAR</button>
</form>
@endsection
