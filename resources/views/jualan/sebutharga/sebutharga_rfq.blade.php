
@extends('bases')

@section('content')   
<label for="">NAMA PELANGGAN:</label>
<input type="text" id="" name="" >
<br>
<label for="">NO PERMOHONAN SEBUTHARGA : NM/RFQ/</label>
<input type="text" id="" name="" >
<br>
<label for="">*Cth : NM / RFQ / 2010-000000</label>
<br>
<button><i class="bi bi-search"></i>CARIAN</button>


<br>
<label for="">CARIAN UNTUK NO PERMOHONAN SEBUTHARGA:</label>
<table>
    <thead>
       <tr>
           <th>BIL</th>
           <th>NO PERMOHONAN SEBUTHARGA (RFQ)</th>
           <th>PERKHIDMATAN</th>
           <th>PUSAT KHIDMAT</th>
         </tr>
    </thead>
  <tbody>
   <tr>
       <td value="" >1.</td>
       <td value="">NM/QUO/2010-10000</td>
       <td value="" >LOREM IPSUM</td>
       <td value="" >ACA</td>
   </tr>
  </tbody>
</table>
<button>JANA SEBUTHARGA</button>
<table>
    <thead>
       <tr>
           <th>NO.RFQ: <input type="text" placeholder="NM/QUO/2010-1000"></th>

           <br>
       </tr>
       <tr>
           <th>NAMA PELANGGAN: <input type="text" placeholder="LOREMIPSUM"></th>
           <br>
       </tr>
       <tr>
           <th>ALAMAT PELANGGAN: <input type="text" placeholder="202-A BUKIT RAFFLESIA, TAMAN BUNGA ROGAYAH, SELANGOR DARUL EHSAN."></th>
           <br>
       </tr>
       <tr>
           <th>E-MEL: <input type="text" placeholder="LOREM_IPSUM.COM"></th>
         </tr>
    </thead>
</table>

<label for="">LAMPIRAN PERMOHONAN SEBUTHARGA (RFQ):</label>
<label style="color: blue" for="">LAMPIRAN.docx</label>
<table>
    <thead>
       <tr>
           <th>TARIKH: <input type="text" ></th>

           <br>
       </tr>
       <tr>
           <th>TARIKH SAH: <input type="text" ></th>
           <br>
       </tr>
       <tr>
           <th>CATATAN: <textarea name="" id="" cols="30" rows="10"></textarea></th>
           <br>
       </tr>
    </thead>
</table>

           <label for="">NAMA PELANGGAN:</label>
            <input type="text" placeholder="LOREMIPSUM">
            <br>
            <label for="">ALAMAT PELANGGAN: </label> 
            <input type="text" placeholder="202-A BUKIT RAFFLESIA, TAMAN BUNGA ROGAYAH, SELANGOR DARUL EHSAN.">

<label for="">MAKLUMAT PERMOHONAN SEBUTHARGA</label>
<label for="">JUMLAH KHIDMAT/PRODUK:</label>
<table>
    <thead>
       <tr>
           <th>BIL</th>
           <th>NAMA KHIDMAT/PRODUK</th>
           <th>KUANTITI</th>
           <th>UNIT HARGA(RM)</th>
           <th>AMAUN(RM)</th>
         </tr>
    </thead>
  <tbody>
   <tr>
       <td value="" >1.</td>
       <td value=""></td>
       <td value="" ></td>
       <td value="" ></td>
       <td value="" ></td>
   </tr>
  </tbody>
</table>
<button>TAMBAH</button>
<br>
<button type="button" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i>SEBUTHARGA</button>
<br>
<table>
    <thead>
       <tr>
           <th>BIL</th>
           <th>NAMA KHIDMAT/PRODUK</th>
           <th>KUANTITI</th>
           <th>UNIT HARGA(RM)</th>
           <th>AMAUN(RM)</th>
         </tr>
    </thead>
  <tbody>
   <tr>
       <td><input type="checkbox"></td>
       <td value="" >1.</td>
       <td value=""></td>
       <td value="" ></td>
       <td value="" ></td>
       <td value="" ></td>
       <td value="" ><i class="fas fa-pen"><button></button></i></td>
       <td value="" ><i class="far fa-trash-alt"><button></button></i></td>

   </tr>
  </tbody>
</table>
<br>
<button><i class="far fa-trash-alt"></i> HAPUS</button>
<button>KEMASKINI</button>
<br>
<label for="">JUMLAH SETIAP PERKHIDMATAN(RM):</label>
<input type="text">
<br>
<label for="">JUMLAH KESELURUHAN(RM):</label>
<input type="text">
<br>
<label for="">DISKAUN:</label>
<input type="text" placeholder="%">
<label for="">ATAU</label>
<input type="text"placeholder="RM">
<br>
<label for="">JUMLAH SELEPAS DISKAUN(RM): RM</label>
<input type="text">
<br>

<label for="">MAKLUMAT SEBUTHARGA:</label> 
<br>
<label for="">PUSAT KHIDMAT:</label>
<label for="">SSDL-MAKMAL STANDARD DOSIMETRI SEKUNDER</label>
<br>
<label for="">JENIS PERKHIDMATAN:</label>
<label for="">SUPPLY & EVALUATION OF PERSONAL DOSIMETER- PERKHIDMATAN FILEM</label>

<label for="">KHIDMAT/PRODUK:</label>
<label for="">FILEM DAN ANALISA DOS (FILM AND DOSE ANALYSIS)</label>
<br>
<label for="">JUMLAH REKOD: </label>
<br>
<label for="">SYARAT: </label>
<br>
<label for="">@ PENGALAMAN DUA TAHUN </label>

<br>
<table>
    <thead>
       <tr>
           <th>NO.RFQ: <input type="text" placeholder="NM/QUO/2010-1000"></th>

           <br>
       </tr>
       <tr>
           <th>NAMA PELANGGAN: <input type="text" placeholder="LOREMIPSUM"></th>
           <br>
       </tr>
       <tr>
           <th>ALAMAT PELANGGAN: <input type="text" placeholder="202-A BUKIT RAFFLESIA, TAMAN BUNGA ROGAYAH, SELANGOR DARUL EHSAN."></th>
           <br>
       </tr>
       <tr>
           <th>E-MEL: <input type="text" placeholder="LOREM_IPSUM.COM"></th>
         </tr>
    </thead>
</table>

<label for="">NO SEBUTHARGA: </label>
<input type="text">
<br>
<label for="">MAKLUMAT SEBUTHARGA: </label>
<label for="">SEBUTHARGA: </label>
<table>
    {{-- <thead>
       <tr>
           <th>BIL</th>
           <th>NO PERMOHONAN SEBUTHARGA (RFQ)</th>
         </tr>
    </thead> --}}
  <tbody>
   <tr>
       <td >1.</td>
       <td>"NAMA PERKHIDMATAN"</td>
   </tr>
   <tr>
    <td >JUMLAH : RM <input type="text"></td>
   </tr>
   <tr>
    <td >DISKAUN : RM <input type="text"></td>

   </tr>
  </tbody>
</table>
<label for="">JUMLAH SETELAH DISKAUN (RM) :</label>
<input type="text" placeholder="0.00">






  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">TAMBAH PESANAN</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <label for="">Pusat Perkhimatan:</label>
            <select name="" id="" >
              <option value=""> Sila pilih:</option>
           </select>
           <br>
           <label for="">Jenis Perkhimatan:</label>
           <select name="" id="">
              <option value=""> Sila pilih:</option>
           </select>
           <label for="">SENARAI HARGA KHIDMAT YANG DITAWARKAN</label>
           <table>
            <thead>
               <tr>
                   <th>BIL</th>
                   <th>NAMA KHIDMAT/PRODUK</th>
                   <th>KUANTITI</th>
                   <th>UNIT HARGA(RM)</th>
                   <th>AMAUN(RM)</th>
                 </tr>
            </thead>
          <tbody>
           <tr>
               <td><input type="checkbox"></td>
               <td>1.</td>
               <td value=""></td>
               <td></td>
               <td></td>
               <td></td>
               <td><i class="fas fa-pen"><button></button></i></td>
               <td><i class="far fa-trash-alt"><button></button></i></td>
           </tr>
          </tbody>
        </table>

        </div>
        <div class="modal-footer">
          <button type="button">SIMPAN</button>
        </div>
      </div>
    </div>
  </div>

@endsection
