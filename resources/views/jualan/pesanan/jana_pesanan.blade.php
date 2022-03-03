
@extends('bases')

@section('content')   
<h1>JANA PESANAN</h1>
<form action="">
    @csrf
    <label for="">NAMA PELANGGAN:</label>
<input type="text" id="" name="" >
<br>
<label for="">NO PERMOHONAN SEBUTHARGA : NM/RFQ/</label>
<input type="text" id="" name="" >
<br>
<label for="">*Cth : NM / RFQ / 2010-000000</label>
<br>
<button><i class="bi bi-search"></i>CARIAN</button>


<h3>CARIAN UNTUK NO PERMOHONAN SEBUTHARGA: "NM / RFQ / 2010-000000"</h3>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>NAMA PELANGGAN</th>
            <th>NO. PERMOHONAN SEBUTHARGA</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>RUMBIA</td>
            <td>NM/QUO/######</td>
        </tr>
    </tbody>
</table>
<h5>Sila isi semua maklumat yang di bawah</h5>

<label for="">JENIS PESANAN:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br><label for="">NO PESANAN</label>
<input type="text">
<br><label for="">TARIKH PESANAN:</label>
<input type="date">
<br><label for="">NO SEBUTHARGA:</label>
<input type="text">
<br><label for="">NAMA PELANGGAN:</label>
<input type="text">
<br><label for="">ALAMAT:</label>
<textarea name="" id="" cols="30" rows="10"></textarea>
<br><label for="">UNTUK PERHATIAN:</label>
<input type="text">
<br><label for="">NO. TELEFON BIMBIT:</label>
<input type="text">
<input type="checkbox">
<br><label for="">NAMA PELANGGAN PENGHANTARAN:</label>
<input type="text">
<br>
<br><label for="">NO PESANAN:</label>
<input type="text" name="" id="">
<br><label for="">NO SEBUTHARGA:</label>
<input type="text" name="" id="">
<br><label for="">NAMA PELANGGAN:</label>
<input type="text" name="" id="">
<br><label for="">ALAMAT PELANGGAN:</label>
<input type="text" name="" id="">
<br>
<h5>MAKLUMAT SEBUTHARGA</h5>
<br><label for="">JUMLAH KHIDMAT/PRODUK:</label>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th> NAMA KHIDMAT/PRODUK:</th>
            <th>KUANTITI</th>
            <th>UNIT HARGA (RM)</th>
            <th>AMAUN (RM)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>_______</td>
            <td>100</td>
            <td>300</td>
            <td>3000</td>
        </tr>
    </tbody>
</table>

<button>TAMBAH</button>
<h5>MAKLUMAT PESANAN</h5>
<button type="button" data-toggle="modal" data-target="#pesanan"><i class="fas fa-plus"></i>TAMBAH PESANAN</button>
<h6>JUMLAH KHIDMAT/PRODUK:  1</h6>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th> NAMA KHIDMAT/PRODUK:</th>
            <th>KUANTITI</th>
            <th>UNIT HARGA (RM)</th>
            <th>AMAUN (RM)</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>_______</td>
            <td>100</td>
            <td>300</td>
            <td>3000</td>
            <td>
                <button>C</button>
                 <i class="fas fa-pen"><button></button></i>
                <i class="far fa-trash-alt"><button></button></i>
            </td>
        </tr>
    </tbody>
</table>

<label for="">JUMLAH SETIAP PERKHIDMATAN:</label>
<input type="text" name="" id="">
<br>
<label for="">JUMLAH (RM):</label>
<input type="text" name="" id="">
<br>

<label for="">DISKAUN:</label>
<input type="text" name="" id="">
<input type="text" name="" id="">
<br>

<label for="">JUMLAH SELEPAS DISKAUN(RM): RM</label>
<input type="text" name="" id="">

<label for="">Pusat Perkhimatan:</label>
<select name="" id="" >
  <option value=""> Sila pilih:</option>
</select>
<br>
<label for="">Jenis Perkhimatan:</label>
<select name="" id="">
  <option value=""> Sila pilih:</option>
</select>

<h6>"ANALISIS UNSUR-UNSUR"</h6>
<h5>SENARAI KHIDMAT YANG DITAWARKAN</h5>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th> NAMA KHIDMAT/PRODUK:</th>
            <th>KUANTITI</th>
            <th>UNIT HARGA (RM)</th>
            <th>AMAUN (RM)</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>_______</td>
            <td>100</td>
            <td>300</td>
            <td>3000</td>
            <td>
                <button>C</button>
                 <i class="fas fa-pen"><button></button></i>
                <i class="far fa-trash-alt"><button></button></i>
            </td>
        </tr>
    </tbody>
</table>
<h5>SENARAI HARGA YANG DITAWARKAN</h5>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th> NAMA KHIDMAT/PRODUK:</th>
            <th>KUANTITI</th>
            <th>KADAR (RM)</th>
            <th>AMAUN (RM)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>_______</td>
            <td>100</td>
            <td>300</td>
            <td>3000</td>
        </tr>
    </tbody>
</table>
<h5>SENARAI CAJ-CAJ YANG DITAWARKAN</h5>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>  PEKARA:</th>
            <th>AMAUN (RM)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>_______</td>
            <td>30000</td>
        </tr>
    </tbody>
</table>
<button>TAMBAH</button>
<button>TUTUP</button>

<br><label for="">NO PESANAN:</label>
<input type="text" name="" id="">
<br><label for="">NO SEBUTHARGA:</label>
<input type="text" name="" id="">
<br><label for="">NAMA PELANGGAN:</label>
<input type="text" name="" id="">
<br><label for="">NAMA PERKHIDMATAN:</label>
<input type="text" name="" id="">
<br><label for="">KUANTITI ASAL:</label>
<input type="text" name="" id="">
<button>TAMBAH MAKLUMAT</button>

<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>  NAMA PENGHANTARAN:</th>
            <th>KUANTITI</th>
            <th>ALAMAT</th>
            <th>UNTUK PERHATIAN</th>
            <th>NO TELEFON BIMBIT</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>_______</td>
            <td>30000</td>
            <td>_______</td>
            <td>_______</td>
            <td>_______</td>
            <td>_______</td>
        </tr>
    </tbody>
</table>
<h6>*Pastikan jumlah kuantiti adalah sama dengan kuantiti asal</h6>
<button>TUTUP</button>


<br><label for="">NO PESANAN:</label>
<input type="text" name="" id="">
<br><label for="">NO SEBUTHARGA:</label>
<input type="text" name="" id="">
<br><label for="">NAMA PELANGGAN:</label>
<input type="text" name="" id="">
<br><label for="">NAMA PERKHIDMATAN:</label>
<input type="text" name="" id="">
<br><label for="">KUANTITI:</label>
<input type="text" name="" id="">
<br><label for="">MAKLUMAT PENGHANTARAN:</label>
<input type="text" name="" id="">
<input type="checkbox" name="" id="">
<label for="">*Sila klik jika sama dengan Alamat Penghantaran Sebelum (Borang Maklumat Penghantaran)</label>
<button>SIMPAN</button>

<h5>SENARAI MAKLUMAT PENGHANTARAN</h5>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th> NAMA PENGHANTARAN:</th>
            <th>ALAMAT</th>
            <th>UNTUK PERHATIAN</th>
            <th>NO TELEFON BIMBIT</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>_______</td>
            <td>100</td>
            <td>300</td>
            <td>3000</td>
            <td>
                <button>C</button>
                 <i class="fas fa-pen"><button></button></i>
                <i class="far fa-trash-alt"><button></button></i>
            </td>
        </tr>
    </tbody>
</table>

<button>KEMASKINI</button>
<h6>JUMLAH KHIDMAT/PRODUK: 1</h6>
<thead>
    <tr>
        <th></th>
        <th>BIL</th>
        <th>KUANTITI</th>
        <th>UNIT HARGA(RM)</th>
        <th>AMAUN(RM)</th>
        <th>TINDAKAN</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td><input type="checkbox" name="" id=""></td>
        <td>1.</td>
        <td>100</td>
        <td>300</td>
        <td>3000</td>
        <td>
            <button>C</button>
             <i class="fas fa-pen"><button></button></i>
            <i class="far fa-trash-alt"><button></button></i>
        </td>
    </tr>
</tbody>
</table>

<label for="">JUMLAH SETIAP PERKHIDMATAN(RM):</label>
<input type="text" name="" id="">
<br>
<label for="">JUMLAH (RM):</label>
<input type="text" name="" id="">
<br>
<label for="">DISKAUN:</label>
<input type="text" name="" id="">
<input type="text" name="" id="">
<br>
<label for="">JUMLAH SELEPAS DISKAUN (RM): RM</label>
<input type="text" name="" id="">
<br>

<h6>JUMLAH KHIDMAT/PRODUK: 1</h6>
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
<label for="">DISKAUN:</label>
<input type="text" name="" id="">
<br>
<label for="">JUMLAH SELEPAS DISKAUN (RM): RM</label>
<input type="text" name="" id="">

<button type="submit">HANTAR PENGESAHAN</button>

</form>


<h6>JUMLAH KHIDMAT/PRODUK: 1</h6>
<h6><a href="#!">TUKAR MATA WANG</a></h6>
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
<label for="">DISKAUN:</label>
<input type="text" name="" id="">
<br>
<label for="">JUMLAH SELEPAS DISKAUN (RM): RM</label>
<input type="text" name="" id="">
  <!-- Modal -->
  <div class="modal fade" id="pesanan" tabindex="-1" role="dialog" aria-labelledby="pesananLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="pesananLabel">TAMBAH PESANAN</h5>
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
        </div>
        <div class="modal-footer">
          <button type="button">SIMPAN</button>
        </div>
      </div>
    </div>
  </div>
    <!-- Modal -->
    <div class="modal fade" id="pesanan" tabindex="-1" role="dialog" aria-labelledby="matawang" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="matawang">TUKAR MATA WANG</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <label for="">PILIH NEGARA:</label>
                <select name="" id="" >
                  <option value=""> Sila pilih:</option>
               </select>
               <br>
               <label for="">MATAWANG:</label>
               <input type="text" name="" id="">
               <label for="">RM1.00 = </label>
               <input type="text" name="" id="">
            </div>
            <div class="modal-footer">
              <button type="button">KEMASKINI</button>
            </div>
          </div>
        </div>
      </div>


@endsection
