
@extends('bases')

@section('content')   
<h1>KAD KERJA - PRODUCTION</h1>

<form action="">
    @csrf
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
            <td>SEMAK STOK </td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>SEMAK BAHAN MENTAH</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>PROSES PENGELUARAN</td>
            <td>"NAMA"</td>
            <td>5</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>4.</td>
            <td>SEMAK KUANTITI</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>5.</td>
            <td>PENYEDIAAN SIJIL</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>6.</td>
            <td>MUAT NAIK DOKUMEN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>7.</td>
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
<h4>SEMAK STOK</h4>
<br>
<label for="">NO KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">PRODUK:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">KUANTITI PRODUK:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">STOK SEMASA:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">KUANTITI DIPERLUKAN:</label>
<input type="text" name="" id="">
<br>
<button>SIMPAN</button>
<br>
<br>
<h5>PROSES SEMAK STOK SELESAI</h5>
<br>
<label for=“”>TARIKH SIAP :</label>
<input type="date" name="" id="">
<br>
<button>SELESAI</button>
<br>
<!-- PAGE -->
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
            <td>SEMAK STOK </td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>SEMAK BAHAN MENTAH</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>PROSES PENGELUARAN</td>
            <td>"NAMA"</td>
            <td>5</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>4.</td>
            <td>SEMAK KUANTITI</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>5.</td>
            <td>PENYEDIAAN SIJIL</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>6.</td>
            <td>MUAT NAIK DOKUMEN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>7.</td>
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
<h4>SEMAK BAHAN MENTAH</h4>
<br>
<label for="">NO KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>BAHAN MENTAH</th>
            <th>KUANTITI SEUNIT</th>
            <th>KUANTITI </th>
            <th>JUMLAH </th>
            <th>JUMLAH SEMASA</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>"BM"</td>
            <td>X</td>
            <td>X</td>
            <td>X</td>
            <td>X</td>
            <td>
                <button type="button" data-toggle="modal" data-target="#bahanMentah">BAHAN MENTAH</button>
            </td>
        </tr>
    </tbody>
</table>
<br>
<br>
<h5>PROSES SEMAK BAHAN MENTAH SELESAI</h5>
<br>
<label for=“”>TARIKH SIAP :</label>
<input type="date" name="" id="">
<br>
<button>SELESAI</button>
<br>
<!-- PAGE -->



</form>

  <!-- Modal -->
  <div class="modal fade" id="bahanMentah" tabindex="-1" role="dialog" aria-labelledby="bahanMentahLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="bahanMentahLabel">PRODUK BAHAN MENTAH</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <label for="">KATEGORI</label>
          <select name="" id="">
              <option value="">SILA PILIH</option>
          </select>
          <button type="button" data-toggle="modal" data-target="#pbahanMentah">TAMBAH MAKLUMAT</button>
          <br>
            <table>
                <thead>
                    <tr>
                        <th>BIL</th>
                        <th>KOD</th>
                        <th>NAMA</th>
                        <th>AKTIF</th>
                        <th>TINDAKAN</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Penyinaran</td>
                        <td>4</td>
                        <td>4</td>
                        <td>
                            <i class="fas fa-pen"><button></button></i>
                            <i class="far fa-trash-alt"><button></button></i>
                        </td>
                    </tr>
                </tbody>
            </table>
            <br>
        </div>
        <div class="modal-footer">
          {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="pbahanMentah" tabindex="-1" role="dialog" aria-labelledby="pbahanMentahLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="pbahanMentahLabel">PRODUK BAHAN MENTAH</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <label for="">KATEGORI</label>
          <select name="" id="">
              <option value="">SILA PILIH</option>
          </select>
          <br>

          <br>
          <button>KEMASKINI</button>
            <br>
        </div>
        <div class="modal-footer">
          {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
      </div>
    </div>
  </div>














@endsection
