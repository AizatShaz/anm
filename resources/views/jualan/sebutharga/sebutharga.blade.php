
@extends('bases')

@section('content')   
<label for="">TARIKH:</label>
<input type="date" id="" name="" >
<br>
<label for="">TARIKH SAH:</label>
<input type="date" id="" name="" >
<br>
<label for="">CATATAN :</label>
<input type="date" id="" name="" >
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
@endsection
