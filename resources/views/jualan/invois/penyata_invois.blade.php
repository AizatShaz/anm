
@extends('bases')

@section('content')   
<form action="">
    @csrf

<h1>LAPORAN</h1>
<h1>PENYATA INVOIS</h1>
<br>
<label for="">NAMA PELANGGAN:</label>
<input type="text" name="" id="">
<br>
<label for="">PUSAT KHIDMAT:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">TARIKH INVOIS:</label>
<input type="date" name="" id="">
<label for="">/</label>
<input type="date" name="" id="">
<br>
<br>
<label for="">STATUS:</label>
<input type="text" name="" id="">
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>NAMA PELANGGAN</th>
            <th>JUMLAH INVOIS(RM)</th>
            <th>JUMLAH TUNAI(RM)</th>
            <th>JUMLAH ABT(RM)</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>"NAMA"</td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="checkbox" name="" id=""></td>
        </tr>
    </tbody>
</table>

<button><i class="fas fa-print"></i></button>
<!--PAGE-->
<h3>AGENSI NUKLEAR MALAYSIA (NUKLEAR MALAYSIA) BANGI, 43000 KAJANG, SELANGOR.</h3>
<br>
<h5>PENYATA KEDUDUKAN INVOIS</h5>
<br>
<label for="">NAMA PELANGGAN:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">ALAMAT:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">STATUS:</label>
<input type="text" name="" id="">
<br>
<br>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#suratperingatan"><a href="">SURAT PERINGATAN</a><i class="fas fa-print"></i></button>

<br>
<table>
    <thead>
        <tr>
            <th>BIL.</th>
            <th>PENYATA KEDUDUKAN INVOIS:</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>
                <br>
                NO INVOIS:
                <p style="color: blue">NM/INV/008-1237890</p>
                <br>
                TARIKH INVOIS:
                <p style="color: blue">19-21-2021</p>
                <br>
                NO KAD KERJA:
                <p style="color: blue">NM/JOB/008-1237890</p>
                <br>
                PUSAT KHIDMAT:
                <p style="color: blue">SSDL-MAKMAL STANDARD DOSIMETRI SEKUNDER</p>
                <br>
                PERKHIDMATAN:
                <p style="color: blue">SUPPLY & EVACUATION OF PERSONAL DOSIMETER - PERKHIDMATAN FILEM</p>
                <br>
                JUMLAH INVOIS (RM):
                <p style="color: blue">0.00</p>
                <br>
                <br>
                JUMLAH TUNAI (RM):
                <p style="color: blue">0.00</p>
                <br>
                <br>
                JUMLAH ABT (RM):
                <p style="color: blue">0.00</p>
                <br>
                <br>
                TARIKH RESIT:
                <p style="color: blue">19-20-2021</p>
                <br>

                <br>
                NO. RESIT:
                <p style="color: blue">19-20-2021</p>
                <br>
                <br>
                CEK/RUJUKAN:
                <p style="color: blue">0.00</p>
                <br>
            </td>
        </tr>
    </tbody>
</table>
<!--PAGE-->
<!--PAGE-->
<!--PAGE-->
<!--PAGE-->
<!--PAGE-->
<!--PAGE-->
<!--PAGE-->



</form>
<!-- Button trigger modal -->
  
  <!-- Modal -->
  <div class="modal fade" id="suratperingatan" tabindex="-1" role="dialog" aria-labelledby="suratperingatanLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="suratperingatanLabel">SURAT PERINGATAN</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <br>
          <label for="">RUJUKAN KAMI:</label>
          <input type="text" name="" id="">
          <br>
          <br>
          <label for="">SURAT PERINGATAN:</label>
          <select name="" id="">
              <option value="">SILA PILIH</option>
          </select>
          <br>
          <br>
          <label for="">TARIKH SURAT:</label>
          <input type="date" name="" id="">
          <br>
          <br>
          <label for="">NAMA PEGAWAI:</label>
          <input type="text" name="" id="">
          <br>

          <br>
          <label for="">JAWATAN:</label>
          <input type="text" name="" id="">
          <br>

          <br>
          <label for="">E-MEL:</label>
          <input type="text" name="" id="">
          <br>
          <br>
          <br>
          <table>
            <thead>
                <tr>
                    <th>BIL</th>
                    <th>NO RUJUKAN</th>
                    <th>SURAT PERINGATAN</th>
                    <th>TARIKH SURAT</th>
                    <th>TINDAKAN</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <i class="fas fa-pen"><button></button></i>
                        <i class="far fa-trash-alt"><button></button></i>
                 <button><i class="fas fa-print"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
        <h5>JUMLAH: RM</h5>
        </div>
        <div class="modal-footer">
          <button type="button"  data-dismiss="modal">TUTUP</button>
          <button type="button" >SIMPAN</button>
        </div>
      </div>
    </div>
  </div>
@endsection
