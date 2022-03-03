
@extends('bases')

@section('content')   
<form action="">
    @csrf
    <h1> JANA NOTA HANTARAN</h1>
<br>
<br>
<br>
<label for="">NAMA PELANGGAN:</label>
<input type="text" name="" id="">
<br>
<p>ATAU</p>
<br>
<label for="">NO KAD KERJA: NM/JOB</label>
<input type="text" name="" id="">
<p>Cth : NM/JOB/2010-28277</p>
<br>
<br>
<button><i class="bi bi-search"></i>CARIAN</button>

<br>

<!--PAGE-->
<h5>MAKLUMAT NOTA HANTARAN</h5>
<br>
<br>
<br>
<label for="">NO. NOTA HANTARAN:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">TARIKH NOTA HANTARAN:</label>
<input type="date" name="" id="">
<br>
<br>
<label for="">NO. KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">NO. PESANAN BERJADUAL:</label>
<input type="text" name="" id="">
<br>
<h5>MAKLUMAT PERKHIDMATAN</h5>
<br>
<br>
<br>
<label for="">PUSAT KHIDMAT:</label>
<input type="text" name="" id="">
<br>
<br>
<br>
<label for="">JENIS PERKHIDMATAN:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">KHIDMAT/PRODUK</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">ITEM PERKHIDMATAN:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">KUANTITI:</label>
<input type="text" name="" id="">
<br>
<h5>MAKLUMAT PERKHIDMATAN</h5>
<br>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#maklumat1">MAKLUMAT 1</button>
<button>MAKLUMAT 2</button>
<br>
<br>
<br>
<button>CETAK SEMUA (BM)</button>
<button>CETAK SEMUA (BI)</button>
<br>
<br>
<!--PAGE-->
<!--PAGE-->

</form>
<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="maklumat1" tabindex="-1" role="dialog" aria-labelledby="maklumat1Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="maklumat1Label">MAKLUMAT PENGHANTARAN</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#maklumat1">MAKLUMAT 1</button>
            <button>MAKLUMAT 2</button>
            <br>
            <br>
            <label for="">NAMA PELANGGAN:</label>
            <input type="text" name="" id="">
            <br>
            <br>
            <label for="">ALAMAT:</label>
            <textarea name="" id="" cols="30" rows="10"></textarea>
            <br>
            <br>
            <label for="">POSKOD:</label>
            <input type="text" name="" id="">
            <br>
            <br>
            <label for="">DAERAH:</label>
            <select name="" id="">
                <option value=""></option>
            </select>
            <br>

            <br>
            <label for="">NEGERI:</label>
            <select name="" id="">
                <option value=""></option>
            </select>
            <br>
            <br>
            <label for="">KUANTITI:</label>
            <input type="text" name="" id="">
            <br>
            <br>
            <label for="">UNTUK PERHATIAN:</label>
            <input type="text" name="" id="">
            <br>
            <br>
            <label for="">NO TELEFON BIMBIT:</label>
            <input type="text" name="" id="">
            <br>
            <br>
            <label for="">CATATAN:</label>
            <input type="text" name="" id="">
            <br>
            <button>KEMASKINI</button>
        </div>
        <div class="modal-footer">
          {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
          <button type="button">CETAK SEMUA (BM)</button>
          <button type="button">CETAK SEMUA (BI)</button>
        </div>
      </div>
    </div>
  </div>
@endsection
