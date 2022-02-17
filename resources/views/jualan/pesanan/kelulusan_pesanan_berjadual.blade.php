
@extends('bases')

@section('content')   
<h1>KELULUSAN PERSANAN BERJADUAL</h1>
<h5>SENARAI PESANAN BERJADUAL/PERJANJIAN:</h5>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>NO. PESANAN BERJADUAL/PERJANJIAN</th>
            <th>TARIKH PERKHIDMATAN/NO JADUAL</th>
            <th>NAMA PELANGGAN</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>12345</td>
            <td>12-12-2021-123</td>
            <td>LORUM IPSUM</td>
            <td><button>NOTIFIKASI & TINDAKAN</button></td>
        </tr>
    </tbody>
</table>
<br>
<label for="">PUSAT KHIDMAT:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">TARIKH PERKHIDMATAN:</label>
<input type="date" name="" id="">
<br>
<br>
<label for="">NO. JADUAL:</label>
<input type="text" name="" id="">
<br>
<label for="">NO. PESANAN/BERJADUAL:</label>
<input type="text" name="" id="">
<br>
<label for="">TARIKH:</label>
<input type="text" name="" id="">
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>BUTIR-BUTIR PERKHIDMATAN</th>
            <th>KUANTITI</th>
            <th>UNIT HARGA(RM)</th>
            <th>AMAUN(RM)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>ABCDH</td>
            <td>12</td>
            <td>20.00</td>
            <td>240.00</td>
        </tr>
    </tbody>
</table>
<label for="">JUMLAH : RM</label>
<input type="text" name="" id="">
<br>
<h5>STATUS PERMOHONAN PESANAN BERJADUAL</h5>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>STATUS</th>
            <th>TINDAKAN</th>
            <th>NAMA STAF</th>
            <th>CATATAN</th>
            <th>TARIKH</th>
            <th>MASA</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>KEMASUKAN</td>
            <td>YA</td>
            <td>LOREM IPSUM</td>
            <td></td>
            <td>12-01-2021</td>
            <td>14:14:54</td>
        </tr>
    </tbody>
</table>
<h5>UNTUK DISEMAK OLEH PELULUS</h5>
<label for="">LULUS:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<label for="">PENJANA KAD KERJA:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<label for="">CATATAN:</label>
<textarea name="" id="" cols="30" rows="10"></textarea>
<button>HANTAR</button>







    <!-- Modal -->

<div class="modal fade" id="pesanan2" tabindex="-1" role="dialog" aria-labelledby="pesanan2" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="pesanan2">ALAMAT PENGHANTARAN</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <label for="">NAMA SYARIKAT:</label>
            <input type="text" name="" id="">
            <br>
            <label for="">KHIDMAT/PRODUK:</label>
            <input type="text" name="" id="">
            <br>
            <label for="">TARIKH PERKHIDMATAN:</label>
            <input type="text" name="" id="">
            <br>
            <label for="">KUANTITI:</label>
            <input type="text" name="" id="">
            <br>
            <label for="">NO JADUAL:</label>
            <input type="text" name="" id="">
            <br>
            <label for="">KUANTITI:</label>
            <input type="text" name="" id="">
            <br>
            <label for="">NAMA SYARIKAT:</label>
            <input type="text" name="" id="">
            <br>
            <label for="">ALAMAT PENGHANTARAN BARU:</label>
            <textarea name="" id="" cols="30" rows="10"></textarea>
            <br>
            <label for="">POSKOD:</label>
            <input type="text" name="" id="">
            <br>
            <label for="">DAERAH:</label>
            <input type="text" name="" id="">
            <br>
            <label for="">NEGERI:</label>
            <select name="" id="">
                <option value="">SILA PILIH</option>
            </select>
            <br>
            <label for="">UNTUK PERHATIAN:</label>
            <input type="text" name="" id="">
            <br>
            <label for="">NO TELEFON BIMBIT:</label>
            <input type="text" name="" id="">
            <br>
          <button type="button">KEMASKINI</button>

          <br>
            <h6>CAJ-CAJ TAMBAHAN</h6>
            <table>
                <thead>
                    <tr>
                        <th>BIL</th>
                        <th>CAJ-CAJ LAIN</th>
                        <th>AMAUN(RM)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>PENGHANTARAN</td>
                        <td>0.00</td>
                    </tr>
                </tbody>
            </table>
            <label for="">TOTAL: RM</label>
            <input type="text" name="" id="">
        </div>
        <div class="modal-footer">
          <button type="button">TAMBAH</button>
        </div>
      </div>
    </div>
</div>
@endsection
