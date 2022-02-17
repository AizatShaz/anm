
@extends('bases')

@section('content')   

<h1>Permohonan Sebutharga</h1>

<form method="POST" action="/permohonan_sebutharga/">
    @csrf
        <label for="permohonan_sebutharga">Pusat Perkhimatan:</label>
        <select name="permohonan_sebutharga" id="permohonan_sebutharga" >
          <option value=""> Sila pilih:</option>
          <option value="I">Dalaman</option>
          <option value="E">Luar</option>
       </select>
        <br>
      <label for="name">NAMA PELANGGAN: </label>
      <input type="text" id="name" name="name" value="" >
      <table>
        <tr>
          <td><label for="no_pelanggan">NO TELEFON:</label></td>
          <td><input type="text" id="no_pelanggan" name="no_pelanggan" ></td>
        </tr>
        <tr>
          <td><label for="note">CATATAN:</label></td>
          <td><textarea style=" width: 100%; height: 100px; word-break: break-all" type="text" id="note" name="note" ></textarea></td>
        </tr>
      </table>
    
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
     <br>

     <table>
         <thead>
            <tr>
                <th>BIL</th>
                <th>KHIDMAT/PRODUK</th>
                <th>HARGA</th>
                <th>CATATAN</th>
              </tr>
         </thead>
       <tbody>
        <tr>
            <td value="" >1.</td>
            <td value=""><input type="text"></td>
            <td value="" ><input type="text"></td>
            <td value="" ><input type="text"></td>
        </tr>
        <tr>
            <td value="" >2.</td>
            <td value=""><input type="text"></td>
            <td value="" ><input type="text"></td>
            <td value="" ><input type="text"></td>
        </tr>
        <tr>
            <td value="" >3.</td>
            <td value=""><input type="text"></td>
            <td value="" ><input type="text"></td>
            <td value="" ><input type="text"></td>
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
               <th>CATATAN</th>
             </tr>
        </thead>
      <tbody>
       <tr>
           <td >IRRADIATION </td>
           <td ><input type="text"></td>
           <td >RM0.12/meter</td>
           <td >RM <input type="text"></td>
           <td ><i class="far fa-trash-alt"><button></button></i></td>
       </tr>
      </tbody>
   </table>

   <table>
    <thead>
       <tr>
           <th>Bil.</th>
           <th>CAJ-CAJ LAIN</th>
           <th>AMAUN</th>
           <th></th>
         </tr>
    </thead>
  <tbody>
   <tr>
       <td >1.</td>
       <td ><input type="text"></td>
       <td ><input type="text"></td>
       <td ><i class="far fa-trash-alt"><button></button></i></td>
   </tr>
  </tbody>
</table>
    <button class="btn btn-primary" type="button" id="continue4"><i class="fas fa-plus"></i> TAMBAH</button><br>
    <br>

    <table>
        <thead>
           <tr>
               <th>BIL.</th>
               <th>KHIDMAT/PRODUK</th>
               <th>KUANTITI</th>
               <th>AMAUN</th>
               <th>JUMLAH</th>
               <th></th>
             </tr>
        </thead>
      <tbody>
       <tr>
           <td>1.</td>
           <td >IRRADIATION</td>
           <td ><input type="text"></td>
           <td ><input type="text"></td>
           <td ><input type="text"></td>
           <td ><i class="far fa-trash-alt"><button></button></i></td>
       </tr>
       <tr>
        <td></td>
        <td ></td>
        <td ></td>
        <td >
            <label for="">JUMLAH :</label>
        </td>
        <td ><input type="text" name="" id=""></td>
    </tr>
      </tbody>
   </table>
   
   <br>

      <table>
        <tr>
          <td><label for="tajuk">Tajuk:</label></td>
          <td><input type="text" id="tajuk" name="tajuk" ></td>
        </tr>
        <tr>
          <td><label for="catatanT">CATATAN:</label></td>
          <td><textarea style=" width: 100%; height: 100px; word-break: break-all" type="text" id="catatanT" name="catatanT" ></textarea></td>
        </tr>
        <tr>
          <td> <input type="file"></td>
        </tr>
      </table>

    <table>
        <thead>
           <tr>
               <th>BIL.</th>
               <th>TAJUK</th>
               <th>CATATAN</th>
               <th>L</th>
             </tr>
        </thead>
      <tbody>
       <tr>
           <td>1.</td>
           <td >IRRADIATIONSSSS</td>
           <td ><input type="text"></td>
           <td ><i class="far fa-trash-alt"><button></button></i></td>
       </tr>
      </tbody>
   </table>
<label for="">CATATAN</label>
<textarea></textarea>
<br>
<label for="">LAMPIRAN:</label>
<table>
    <thead>
       <tr>
           <th>BIL.</th>
           <th>FILE</th>
         </tr>
    </thead>
  <tbody>
   <tr>
       <td>1.</td>
       <td>uploadedFILE</td>
   </tr>
  </tbody>
</table>
     <input type="submit" value="HANTAR PERMOHONAN">
   </form> 
@endsection
