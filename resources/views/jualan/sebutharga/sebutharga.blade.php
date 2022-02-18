
@extends('bases')

@section('content')   
<h1>SEBUTHARGA</h1>
<form action="">
  @csrf

<label for="">TARIKH:</label>
<input type="date" id="" name="" >
<br>
<label for="">TARIKH SAH:</label>
<input type="date" id="" name="" >
<br>
<label for="">CATATAN :</label>
<input type="text" id="" name="" >
<br>
<button>CARIAN</button>
<br>
<label for="">Pusat Perkhimatan:</label>
<select name="" id="" >
  <option value=""> Sila pilih:</option>
</select>
<br>
<label for="">Jenis Perkhimatan:</label>
<select name="" id="">
  <option value=""> Sila pilih:</option>
</select>

<table>
    <thead>
       <tr>
           <th>BIL</th>
           <th>KHIDMAT/PRODUK</th>
           <th> HARGA(RM)</th>
           <th>CATATAN</th>
         </tr>
    </thead>
  <tbody>
   <tr>
       <td value="" >1.</td>
       <td value="">UNSUR</td>
       <td value="" ></td>
       <td value="" ></td>
   </tr>
  </tbody>
</table>
<br>
<table>
    <thead>
       <tr>
           <th>KHIDMAT/PRODUK</th>
           <th>KUANTITI</th>
           <th>AMAUN</th>
           <th>JUMLAH</th>
         </tr>
    </thead>
  <tbody>
   <tr>
       <td >IRRADIATION </td>
       <td ><input type="text"></td>
       <td >RM0.12/meter</td>
       <td >RM <input type="text"></td>
   </tr>
  </tbody>
</table>
<button>TAMBAH</button>
<h5>MAKLUMAT SEBUTHARGA</h5>
<button>TAMBAH</button>
<h5>JUMLAH KHIDMAT/PRODUK:</h5>
<table>
  <thead>
     <tr>
         <th></th>
         <th>BIL.</th>
         <th> NAMA KHIDMAT/PRODUK</th>
         <th>KUANTITI</th>
         <th>UNIT HARGA (RM)</th>
         <th>AMAUN (RM)</th>
         <th>TINDAKAN</th>
       </tr>
  </thead>
<tbody>
 <tr>
     <td ><input type="checkbox" name="" id=""> </td>
     <td >IRRADIATION </td>
     <td >100</td>
     <td >300</td>
     <td >30000</td>
     <td >
       <button>E</button>
       <button>D</button>
     </td>
 </tr>
</tbody>
</table>
<button>HAPUS</button>
<label for="">JUMLAH KESELURUHAN (RM):</label>
<input type="text" id="" name="" >
<br>
<label for="">DISKAUN :</label>
<input type="text" id="" name="" >
<input type="text" id="" name="" >
<br>
<label for="">JUMLAH SELEPAS DISKAUN (RM): RM</label>
<input type="text" id="" name="" >
<br>
<table>
  <thead>
     <tr>
         <th></th>
         <th>BIL.</th>
         <th> NAMA KHIDMAT/PRODUK</th>
         <th>KUANTITI</th>
         <th>UNIT HARGA (RM)</th>
         <th>AMAUN (RM)</th>
       </tr>
  </thead>
<tbody>
 <tr>
     <td ><input type="checkbox" name="" id=""> </td>
     <td >IRRADIATION </td>
     <td >100</td>
     <td >300</td>
     <td >30000</td>
 </tr>
</tbody>
</table>
<button>KEMASKINI</button>
<br>
<label for="">PUSAT KHIDMAT:</label>
<input type="text" id="" name="" >
<br>
<label for="">JENIS PERKHIDMATAN :</label>
<input type="text" id="" name="" >
<input type="text" id="" name="" >
<br>
<label for="">KHIDMAT/PRODUK:</label>
<input type="text" id="" name="" >
<br>
<h6>JUMLAH REKOD: </h6>
<label for="">SYARAT</label>
<input type="text" name="" id="">
<br>
<button>TAMBAH</button>
<br>
<table>
  <thead>
     <tr>
         <th></th>
         <th>BIL.</th>
         <th> NAMA KHIDMAT/PRODUK</th>
         <th>KUANTITI</th>
         <th>UNIT HARGA (RM)</th>
         <th>AMAUN (RM)</th>
         <th>TINDAKAN</th>
       </tr>
  </thead>
<tbody>
 <tr>
     <td ><input type="checkbox" name="" id=""> </td>
     <td >1. </td>
     <td >IRRADIATION </td>
     <td >100</td>
     <td >300</td>
     <td >30000</td>
     <td >
       <button>D</button>
     </td>
 </tr>
</tbody>
</table>
<br>
<button>TAMBAH</button>
<br>
<label for="">JENIS PERMOHONAN:</label>
<select name="" id="">
  <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">NAMA PELANGGAN: </label>
<input type="text" id="" name="" >
<br>
<br>
<label for="">NO. PELANGGAN: </label>
<input type="text" id="" name="" >
<br>
<button>CARIAN</button>
<br>
<h5>CARIAN NAMA PELANGGAN: </h5>
<table>
  <thead>
     <tr>
         <th></th>
         <th>BIL.</th>
         <th> NAMA PELANGGAN</th>
         <th>NO PELANGGAN</th>
         <th>NO SYARIKAT</th>
       </tr>
  </thead>
<tbody>
 <tr>
     <td >1. </td>
     <td >100</td>
     <td >300</td>
     <td >30000</td>
     <td >
       <button>D</button>
     </td>
 </tr>
</tbody>
</table>
<br>
<label for="">TARIKH SEBUTHARGA:</label>
<input type="date" name="" id="">
<br>
<br>
<br>
<label for="">TARIKH SAH SEBUTHARGA:</label>
<input type="date" name="" id="">
<br>
<br>
<h6>SEBUTHARGA</h6>
<table>
  <thead>
    <tr>
      <th>BIL.</th>
      <th>NAMA PERKHIDMATAN</th>
      <th>TINDAKAN</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1.</td>
      <td>"NAMA PERKHIDMATAN"</td>
      <td><button>D</button></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td>
        <label for="">JUMLAH: RM</label>
        <input type="text" name="" id="">
        <label for="">DISKAUN: RM</label>
        <input type="text" name="" id="">
      </td>
    </tr>
  </tbody>
</table>
<br>
<label for="">JUMLAH SELEPAS DISKAUN</label>
<input type="text" name="" id="">
<table>
  <thead>
    <tr>
      <th>BIL.</th>
      <th>NAMA PELANGGAN</th>
      <th>CONTACT</th>
      <th>NO. FON</th>
      <th>E-MEL</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1.</td>
      <td>"NAMA"</td>
      <td>NAMA</td>
      <td>0122345</td>
      <td>someone@abc.com</td>
    </tr>
  </tbody>
</table>
<br>
<h6>SYARAT</h6>
<input type="text" name="" id="">
<br>
<label for="">CATATAN</label>
<textarea name="" id="" cols="30" rows="10"></textarea>
<br>
<button>JANA SEBUTHARGA</button>
<br>
<br>
<br>
<br>
<label for="">TARIKH SEBUTHARGA:</label>
<input type="date" name="" id="">
<br>
<br>
<br>
<label for="">TARIKH SAH SEBUTHARGA:</label>
<input type="date" name="" id="">
<br>
<br>
<label for="">NO SEBUTHARGA</label>
<br>
<table>
  <thead>
    <tr>
      <th>BIL.</th>
      <th>NAMA PERKHIDMATAN</th>
      <th>TINDAKAN</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1.</td>
      <td>"NAMA PERKHIDMATAN"</td>
      <td><button>D</button></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td>
        <label for="">JUMLAH: RM</label>
        <input type="text" name="" id="">
        <label for="">DISKAUN: RM</label>
        <input type="text" name="" id="">
      </td>
    </tr>
  </tbody>
</table>
<br>
<label for="">JUMLAH SELEPAS DISKAUN</label>
<input type="text" name="" id="">
<br>
<table>
  <thead>
    <tr>
      <th>BIL.</th>
      <th>NAMA PELANGGAN</th>
      <th>CONTACT</th>
      <th>NO. FON</th>
      <th>E-MEL</th>
      <th>TINDAKAN</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1.</td>
      <td>"NAMA"</td>
      <td>NAMA</td>
      <td>0122345</td>
      <td>someone@abc.com</td>
      <td>
        <button>PM</button>
        <button>PE</button>
      </td>
    </tr>
  </tbody>
</table>
<br>
<label for="">SYARAT</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">CATATAN</label>
<input type="text" name="" id="">
<br>
<br>
</form>
@endsection
