
@extends('bases')

@section('content')   
<h1>SENARAI PESANAN</h1>
<label for="">NAMA PELANGGAN:</label>
<input type="text" id="" name="" >
<br>
<label for="">STATUS:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<label for="">ATAU</label>
<br>
<label for="">NO. PESANAN:</label>
<input type="text" id="" name="" >
<br>
<button>CARIAN</button>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>NAMA PELANGGAN</th>
            <th>NO PESANAN</th>
            <th>STATUS</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>12345</td>
            <td>12-12-2021-123</td>
            <td>BARU</td>
        </tr>
    </tbody>
</table>
<br>
<label for="">JENIS PESANAN:</label>
<input type="text" id="" name="" >
<br>
<label for="">NO PESANAN:</label>
<input type="text" id="" name="" >
<br>
<label for="">NO. SEBUTHARGA:</label>
<input type="text" id="" name="" >
<br>
<label for="">NAMA PELANGGAN:</label>
<input type="text" id="" name="" >
<br>
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
            <td>EISOM</td>
            <td>ABCDEFG</td>
            <td>17-09-2019</td>
            <td>16:28:54</td>
        </tr>
    </tbody>
</table>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>NAMA KHIDMAT/PRODUK</th>
            <th>KUANTITI</th>
            <th>UNITHARGA(RM)</th>
            <th>AMAUN(RM)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>SSDL-MAKMAL STANDARD DOSIMETRI SEKUNDER SUPPLY & EVALUATION OF PERSONAL DOSIMETER- PERKHIDMATAN FILEM FILEM DAN ANALISA DOS (FILM AND DOSE ANALYSIS)</td>
            <td>12</td>
            <td>20.00</td>
            <td>240.00</td>
        </tr>
    </tbody>
</table>
<label for="">JUMLAH KESELURUHAN: RM </label>
<input type="text" name="" id="">
<button data-toggle="modal" data-target="#kemaskini">KEMASKINI PERMOHONAN</button>
<button data-toggle="modal" data-target="#batal">BATAL PERMOHONAN</button>




    <!-- Modal -->

    <div class="modal fade" id="kemaskini" tabindex="-1" role="dialog" aria-labelledby="kemaskini" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="kemaskini">KEMASKINI PERMOHONAN</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <label for="">JENIS PESANAN:</label>
                <select name="" id="">
                    <option value="">SILA PILIH</option>
                </select>
                <br>
                <label for="">NO. PESANAN:</label>
                <input type="text" name="" id="">
                <br>
                <label for="">TARIKH PESANAN:</label>
                <input type="text" name="" id="">
                <br>
                <label for="">NO. SEBUTHARGA:</label>
                <input type="text" name="" id="">
                <br>
                <label for="">NAMA PELANGGAN:</label>
                <input type="text" name="" id="">
                <br>
                <label for="">ALAMAT:</label>
                <textarea name="" id="" cols="30" rows="10"></textarea>
                <br>
                <label for="">UNTUK PERHATIAN:</label>
                <input type="text" name="" id="">
                <br>
                <label for="">NO TELEFON BIMBIT:</label>
                <textarea name="" id="" cols="30" rows="10"></textarea>
                <br>
                <label for="">E-MEL:</label>
                <input type="email" name="" id="">
                <br>
                <input type="checkbox" name="" id="">
                <label for="">Sila Tanda Jika Maklumat Penghantaran Sama dengan Diatas</label>
                <br>
            </div>
            <div class="modal-footer">
              <button type="button">SIMPAN</button>
            </div>
          </div>
        </div>
    </div>


    <div class="modal fade" id="batal" tabindex="-1" role="dialog" aria-labelledby="batal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="batal">KEMASKINI PERMOHONAN</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <h5>MAKLUMAT PESANAN</h5>
                <label for="">JENIS PESANAN:</label>
                <input type="text" name="" id="">
                <br>
                <label for="">NO. PESANAN:</label>
                <input type="text" name="" id="">
                <br>
                <label for="">NO. SEBUTHARGA:</label>
                <input type="text" name="" id="">
                <br>
                <label for="">NAMA PELANGGAN:</label>
                <input type="text" name="" id="">
                <br>
                <h5>NYATAKAN SEBAB-SEBAB BATAL:</h5>
                <label for="">CATATAN:</label>
                <textarea name="" id="" cols="30" rows="10"></textarea>
                <br>
            </div>
            <div class="modal-footer">
              <button type="button">HANTAR</button>
            </div>
          </div>
        </div>
    </div>



@endsection
