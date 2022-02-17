
@extends('bases')

@section('content')   
<form action="">
    @csrf
    <h1>PESANAN BERJADUAL/PERJANJIAN</h1>
<label for="">NAMA PELANGGAN:</label>
<input type="tel" id="" name="" >
<br>
<label for="">NO AKAUN PELANGGAN:</label>
<input type="tel" id="" name="" >
<br>
<button>CARIAN</button>
<h5>CARIAN NAMA PELANGGAN: RUMBIA</h5>
<table>
    <thead>
        <tr>
            <th>BIL.</th>
            <th>NAMA PELANGGAN</th>
            <th>NO. PELANGGAN</th>
            <th>SENARAI PELANGGAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>ABCD1234</td>
            <td>RUMBIA</td>
            <td></td>
        </tr>
    </tbody>
</table>

<label for="">NAMA SYARIKAT:</label>
<input type="text" name="" id="">
<br>
<label for="">ALAMAT:</label>
<input type="text" name="" id="">
<br>
<label for="">PUSAT PERKHIDMATAN</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<label for="">JENIS PERKHIDMATAN</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<label for="">KHIDMAT/PRODUK:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<label for="">JENIS TEMPLAT:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>

<br>
<label for="">PUSAT KHIDMAT:</label>
<input type="text" name="" id="">
<br>
<label for="">JENIS PERKHIDMATAN:</label>
<input type="text" name="" id="">
<br>
<label for="">KHIDMAT/PRODUK:</label>
<input type="text" name="" id="">
<br>
<label for="">NO PESANAN BERJADUAL/PERJANJIAN:</label>
<input type="text" name="" id="">
<br>
<label for="">TARIKH PESANAN BERJADUAL/PERJANJIAN:</label>
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
<input type="text" name="" id="">
<br>
<input type="checkbox" name="" id="">
<label for="">*Sila Tanda Jika Maklumat Penghantaran Sama dengan Diatas</label>
<br>
<label for="">NAMA PELANGGAN PENGHANTARAN ::</label>
<input type="text" name="" id="">
<br>
<label for="">ALAMAT PENGHANTARAN:</label>
<textarea name="" id="" cols="30" rows="10"></textarea>
<br>
<label for="">POSKOD:</label>
<input type="text" name="" id="">
<br>
<label for="">DAERAH:</label>
<input type="text" name="" id="">
<br>
<label for="">NEGERI:</label>
<input type="text" name="" id="">
<br>
<label for="">UNTUK PERHATIAN:</label>
<input type="text" name="" id="">
<br>
<label for="">NO TELEFON BIMBIT:</label>
<input type="text" name="" id="">
<br>
<label for="">TARIKH MULA:</label>
<input type="date" name="" id="">
<br>
<label for="">TARIKH TAMAT:</label>
<input type="date" name="" id="">
<br>
<label for="">KEKERAPAN:</label>
<input type="text" name="" id="">
<br>
<label for="">KUANTITI PER KEKERAPAN:</label>
<input type="text" name="" id="">
<br>
<label for="">AMAUN:</label>
<input type="text" name="" id="">
<br>
<label for="">KETERANGAN:</label>
<input type="text" name="" id="">

<br>
<label for="">TAJUK DOKUMEN:</label>
<input type="text" name="" id="">

<br>
<label for="">NO. RUJUKAN:</label>
<input type="text" name="" id="">
<br>
<label for="">E-MEL:</label>
<input type="email" name="" id="">
<br>
<button type="submit">SIMPAN</button>

<label for="">KEKERAPAN:</label>
<input type="text" name="" id="">
<button >KEMASKINI</button>
<br>
<label for="">NAMA PELANGGAN:</label>
<input type="text" name="" id="">
<br>
<label for="">ALAMAT PENGHANTARAN E-MEL:</label>
<input type="email" name="" id="">
<br>
<label for="">UNTUK PERHATIAN:</label>
<input type="text" name="" id="">

<br>
<label for="">NO TELEFON BIMBIT:</label>
<input type="text" name="" id="">

<br>
<label for="">TARIKH PERKHIDMATAN:</label>
<input type="text" name="" id="">
<br>
<label for="">KUANTITI:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">HARGA(RM):</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">CATATAN:</label>
<input type="text" name="" id="">
<br>
<label for="">NO JADUAL:</label>
<input type="text" name="" id="">
<br>
<button>TAMBAH</button>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th> TARIKH PERKHIDMATAN:</th>
            <th>KUANTITI</th>
            <th>CATATAN</th>
            <th>NO. JADUAL</th>
            <th>TINDAKAN</th>
            <th>JUMLAH(RM)</th>
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
                <button>E</button>
                <button>D</button>
            </td>
            <td>3000</td>
        </tr>
    </tbody>
</table>
<label for="">TOTAL: RM</label>
<input type="text" name="" id="">


<label for="">KEKERAPAN:</label>
<input type="text" name="" id="">
<button >KEMASKINI</button>
<button data-toggle="modal" data-target="#pesanan">SETERUSNYA</button>
<br>

    <br>
    <label for="">NAMA SYARIKAT:</label>
    <input type="text" name="" id="">
    <br>
    <label for="">PUSAT KHIDMAT:</label>
    <input type="text" name="" id="">
    <br>
    <label for="">JENIS PERKHIDMATAN:</label>
    <input type="text" name="" id="">
    <br>
    <label for="">KHIDMAT/PRODUK:</label>
    <input type="text" name="" id="">
    <br>
    <label for="">TAJUK PERJANJIAN</label>
    <input type="text" name="" id="">
    <br>
    <button>PREVIEW</button>
    <br>
    <button>HAPUS</button>
    <button>TAMBAH</button>
    <button>CETAK</button>
    <h5>JUMLAH DALAM SENARAI: 1</h5>
    <table>
        <thead>
            <tr>
                <th></th>
                <th>URUTAN</th>
                <th>LEVEL</th>
                <th>BIL.</th>
                <th>KETERANGAN</th>
                <th>TINDAKAN</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>2</td>
                <td>1</td>
                <td>1</td>
                <td>PERATURAN PEMAKAIAN DOSIMETER PERSONAL (LENCANA LTD DAN FILEM)</td>
                <td><button>E</button></td>
            </tr>
        </tbody>
    </table>
    <br>
    <label for="">URUTAN:</label>
    <input type="text" name="" id="">
    <br>
    <label for="">LEVEL:</label>
    <input type="text" name="" id="">
    <br>
    <label for="">BIL:</label>
    <input type="text" name="" id="">
    <br>
    <label for="">KETERANGAN:</label>
    <textarea name="" id="" cols="30" rows="10"></textarea>
    <br>
    <button>BATAL</button>
    <button>TAMBAH</button>
    <br>
    <label for="">BANK:</label>
    <select name="" id="">
        <option value="">SILA PILIH</option>
    </select>
    <br>
    <label for="">NO AKAUN:</label>
    <input type="text" name="" id="">
    <br>
    <label for="">AMAUN(RM):</label>
    <input type="text" name="" id="">
    <br>
    <label for="">NO SIJIL:</label>
    <textarea name="" id="" cols="30" rows="10"></textarea>
    <br>
    <button>SIMPAN</button>
    <br>
    <table>
        <thead>
            <tr>
                <th>BIL</th>
                <th>TARIKH PERKHIDMATAN</th>
                <th>KUANTITI.</th>
                <th>DOKUMEN SOKONGAN</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1.</td>
                <td>11-11-2021</td>
                <td>2</td>
                <td>dokumen.pdf</td>
                <td><button>UPLOAD</button></td>
            </tr>
        </tbody>
    </table>
    <br>
    <label for="">TAJUK:</label>
    <input type="text" name="" id="">
    <br>
    <label for="">CATATAN:</label>
    <input type="text" name="" id="">
    <br>
    <label for="">FAIL:</label>
    <input type="file" name="" id="">
    <br>
    <table>
        <thead>
            <tr>
                <th>BIL</th>
                <th>BUTIR-BUTIR PERKHIDMATAN</th>
                <th>KUANTITI</th>
                <th>UNIT HARGA (RM)</th>
                <th>AMAUN (RM)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1.</td>
                <td>ABCDEFGHIJK</td>
                <td>12</td>
                <td>20.00</td>
                <td><button>240.00</button></td>
            </tr>
        </tbody>
    </table>
    <label for="">JUMLAH: RM</label>
    <input type="text" name="" id="">
    <br>
    <table>
        <thead>
            <tr>
                <th>BIL</th>
                <th>BUTIR-BUTIR PERKHIDMATAN</th>
                <th>KUANTITI</th>
                <th>UNIT HARGA (RM)</th>
                <th>AMAUN (RM)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1.</td>
                <td>kjhgfdsa</td>
                <td>10</td>
                <td>15.00</td>
                <td><button>150.00</button></td>
            </tr>
        </tbody>
    </table>
    <br>
    <label for="">JUMLAH: RM</label>
    <input type="text" name="" id="">
    <br>
    <label for="">JUMLAH KESELURUHAN(RM): RM</label>
    <input type="text" name="" id="">
    <br>
    <h6>REKOD PERMOHONAN TELAH DIHANTAR. UNTUK PENGHANTARAN SEMULA SILA KLIK</h6>
    <button type="submit">HANTAR PERMOHONAN</button>
</form>





    <!-- Modal -->
    <div class="modal fade" id="pesanan" tabindex="-1" role="dialog" aria-labelledby="pesanan" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="pesanan">ALAMAT PENGHANTARAN</h5>
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
                <table>
                    <thead>
                        <tr>
                            <th>BIL.</th>
                            <th>ALAMAT PENGHANTARAN</th>
                            <th>KUANTITI</th>
                            <th>TINDAKAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>ADRESSADRESSADRESS,ADRESSADRESS</td>
                            <td>12</td>
                            <td>
                                <button>E</button>
                                <button>D</button>
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>
            <div class="modal-footer">
              <button type="button">KEMASKINI</button>
            </div>
          </div>
        </div>
    </div>
    
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
