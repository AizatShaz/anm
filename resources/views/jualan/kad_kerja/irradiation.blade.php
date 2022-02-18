
@extends('bases')

@section('content')   
<h1>KAD KERJA - IRRADIATION</h1>

<form action="">
    @csrf
    <br>
    <label for="">NAMA PELANGGAN:</label>
    <input type="text" name="" id="">
    <br>
    <label for="">STATUS KAD KERJA:</label>
    <input type="text" name="" id="">
    <br>
    <p>ATAU</p>
    <br>
    <label for="">NO. KAD KERJA: NM/JOB/:</label>
    <input type="text" name="" id="">
    <br>
    <p>*Cth : NM/JOB/2010-28277</p>
    <br>
    <p>ATAU</p>
    <br>
    <label for="">NO PESANAN:</label>
    <input type="text" name="" id="">
    <br>
    <p>ATAU</p>
    <br>
    <label for="">NO PERJANJIAN/PESANAN BERJADUAL:</label>
    <input type="text" name="" id="">
    <br>
    <button>CARIAN</button>
    <br>
    <br>
<table>
    <thead>
        <tr>
            <th>BIL.</th>
            <th>NAMA PELANGGAN</th>
            <th>NO. KAD KERJA</th>
            <th>STATUS</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>RUMBIA</td>
            <td>NM/JOB/20001-200</td>
            <td>PETUGAS</td>
        </tr>
    </tbody>
</table>
<br>
<label for="">KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<label for="">NAMA PELANGGAN:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">NO PESANAN:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">PUSAT KHIDMAT:</label>
<input type="text" name="" id="">
<br>
<label for="">KHIDMAT:</label>
<input type="date">
<br>
<label for="">KUANTITI:</label>
<input type="checkbox">
<br>
<label for="">UNIT HARGA(RM):</label>
<input type="checkbox">
<br>
<br>
<label for="">AMAUN(RM):</label>
<input type="checkbox">
<br>
<br>
<label for="">ITEM TAMBAHAN:</label>
<input type="checkbox">
<br>
<label for="">JUMLAH (RM):</label>
<input type="text" name="" id="">
<br>
<h5>PEMBAHAGIAN TUGAS</h5>

<br>
<br>
<label for="">TARIKH JANA KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<label for="">TARIKH PEMBAHAGIAN:</label>
<input type="text" name="" id="">
<br>

<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>NAMA PROSES</th>
            <th>NAMA STAF</th>
            <th>TEMPOH (HARI)</th>
            <th>STATUS</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>PENDAFTARAN SINARAN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td><input type="checkbox" name="" id=""></td>
        </tr>
    </tbody>
</table>
<button>PAPAR AKTIVITI</button>
<br>
<br>
<br>
<h4>"PENDATARAN SINARAN"</h4>
<br>
<label for="">NO. KAD KERJA</label>
<input type="text" name="" id="">
<br>
<label for="">JENIS PRODUK</label>
<input type="checkbox" name="" id="" placeholder="PRODUK BARU">
<input type="checkbox" name="" id="" placeholder="PRODUK BIASA">
<br>
<label for="">TARIKH:</label>
<input type="date" name="" id="">
<br>
<br>
<label for="">KEPERLUAN:</label>
<label for="">Min:</label>
<input type="text" name="" id="">
<label for="">kGy:</label>
<br>
<br>
<label for="">Max:</label>
<input type="text" name="" id="">
<label for="">kGy:</label>
<br>
<label for="">CATATAN</label>
<textarea name="" id="" cols="30" rows="10"></textarea>
<br>
<button>SIMPAN</button>
<br>
<button>TAMBAH MAKLUMAT</button>
<br>
<h5>PROSES PENDAFTARAN SINARAN SELESAI</h5>
<label for="">TARIKH SIAP:</label>
<input type="date" name="" id="">
<br>

<button>PAPAR MAKLUMAT SAHAJA</button>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th> NAMA PRODUK:</th>
            <th>NO. BATCH</th>
            <th>KUANTITI</th>
            <th>UNIT BERAT (KG)</th>
            <th>UNIT SAIZ (CM)</th>
            <th>CATATAN</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>_______</td>
            <td>3</td>
            <td>300</td>
            <td>100</td>
            <td>4</td>
            <td>MASK</td>
            <td>
                 <i class="fas fa-pen"><button></button></i>
                <i class="far fa-trash-alt"><button></button></i>
            </td>
        </tr>
    </tbody>
</table>

<br>
<h4>"PENDAFTARAN SINARAN"</h4>
<h5>TABLE KAD KERJA</h5>
<button>KEMASKINI</button>
<br>
<br>
<label for="">NAMA PRODUK:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<input type="text" name="" id="">
<br>
<label for="">NO. BATCH/ NO. LOT:</label>
<input type="text" name="" id="">
<br>
<label for="">KUANTITI:</label>
<input type="text" name="" id="">
<br>
<label for="">BERAT (KG):</label>
<input type="text" name="" id="">
<br>
<label for="">SAIZ(CM):</label>
<input type="text" name="" id="">
<br>
<label for="">CATATAN:</label>
<textarea name="" id="" cols="30" rows="10"></textarea>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th> NAMA PRODUK:</th>
            <th>NO. BATCH</th>
            <th>KUANTITI</th>
            <th>UNIT BERAT (KG)</th>
            <th>UNIT SAIZ (CM)</th>
            <th>CATATAN</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>_______</td>
            <td>3</td>
            <td>300</td>
            <td>100</td>
            <td>4</td>
            <td>MASK</td>
            <td>
                 <i class="fas fa-pen"><button></button></i>
                <i class="far fa-trash-alt"><button></button></i>
            </td>
        </tr>
    </tbody>
</table>
<br>
<h5>PROSES PENDAFTARAN SINARAN SELESAI</h5>
<label for="">TARIKH SIAP:</label>
<input type="date" name="" id="">
<button>SELESAI</button>
<br>
<br>
<br>
<h5>PEMBAHAGIAN TUGAS</h5>
<br>
<br>
<br>
<label for="">TARIKH JANA KAD KERJA:</label>
<input type="date" name="" id="">
<br>
<label for="">TARIKH PEMBAHAGIAN:</label>
<input type="date" name="" id="">
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
            <td>DAFTAR SAMPEL</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>
                (V)12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>1.</td>
            <td>DAFTAR SAMPEL</td>
            <td>
                <select name="" id="">
                    <option value="">SILA PILIH</option>
                </select>
            </td>
            <td>3</td>
            <td>X</td>
        </tr>
    </tbody>
</table>
<br>
<br>
<button>PAPAR AKTIVITI</button>
<br>
<br>
<br>
<h4>"PRE PENYINARAN"</h4>
<br>
<br>
<br>
<label for="">KAD KERJA</label>
<input type="text" name="" id="">
<br>
<h5>AKTIVITI-AKTIVITI:</h5>
<br>
<label for="">TARIKH:</label>
<input type="date" name="" id="">
<br>
<label for="">CATATAN:</label>
<textarea name="" id="" cols="30" rows="10"></textarea>
<br>
<button>HANTAR</button>
<br>
<table>
    <thead>
        <tr>
            <th></th>
            <th>BIL.</th>
            <th>TARIKH</th>
            <th>KETERANGAN</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>12-12-2021</td>
            <td>
                3
            </td>
            <td>
                 <i class="fas fa-pen"><button></button></i>
                <i class="far fa-trash-alt"><button></button></i>
            </td>
        </tr>
    </tbody>
</table>
<br>
<h5>PROSES PENDAFTARAN PRE PENYINARAN SELESAI</h5>
<br>
<label for="">TARIKH:</label>
<input type="date" name="" id="">
<br>
<button>SELESAI</button>
<br>
<br>
<h5>PEMBAHAGIAN TUGAS</h5>
<br>
<br>
<label for="">TARIKH JANA KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<label for="">TARIKH PEMBAHAGIAN:</label>
<input type="text" name="" id="">
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
            <td>PENDAFTARAN SINARAN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>
                (V)12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>PRE PEYINARAN</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>
                (V)12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>1.</td>
            <td>PEYINARAN</td>
            <td>"NAMA"</td>
            <td>5</td>
            <td>X
            </td>
        </tr>
    </tbody>
</table>
<br>
<h4>PENYINARAN</h4>
<br>
<label for="">NO KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<h5>AKTIVITI-AKTIVITI:</h5>
<br>
<label for="">TARIKH:</label>
<input type="date" name="" id="">
<br>
<label for="">CATATAN:</label>
<textarea name="" id="" cols="30" rows="10"></textarea>
<br>
<button>HANTAR</button>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>  TAJUK</th>
            <th>KETERANGAN</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>Penyinaran</td>
            <td>4</td>
            <td>
                 <i class="fas fa-pen"><button></button></i>
                <i class="far fa-trash-alt"><button></button></i>
            </td>
        </tr>
    </tbody>
</table>
<br>
<h5>PROSES PENYINARAN SELESAI</h5>
<br>
<label for="">TARIKH:</label>
<input type="date" name="" id="">
<br>
<button>SELESAI</button>
<br>
<br>

<h5>PEMBAHAGIAN TUGAS</h5>
<br>
<label for="">TARIKH JANA KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<label for="">TARIKH PEMBAHAGIAN:</label>
<input type="text" name="" id="">
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
            <td>PENDAFTARAN SINARAN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>
                (V)12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>PRE PEYINARAN</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>
                (V)12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>PEYINARAN</td>
            <td>"NAMA"</td>
            <td>5</td>
            <td>
                (V)12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>4.</td>
            <td>PEMERIKSAAN AKHIR</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
    </tbody>
</table>
<button>PAPAR AKTIVITI</button>
<br>

<br>
<h4>PEMERIKSAAN AKHIR</h4>
<br>
<label for="">NO KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<h5>AKTIVITI-AKTIVITI:</h5>
<br>
<label for="">TARIKH:</label>
<input type="date" name="" id="">
<br>
<label for="">CATATAN:</label>
<textarea name="" id="" cols="30" rows="10"></textarea>
<br>
<button>HANTAR</button>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>  TAJUK</th>
            <th>KETERANGAN</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>Penyinaran</td>
            <td>4</td>
            <td>
                 <i class="fas fa-pen"><button></button></i>
                <i class="far fa-trash-alt"><button></button></i>
            </td>
        </tr>
    </tbody>
</table>
<br>
<h5>PROSES PENYINARAN SELESAI</h5>
<br>
<label for="">TARIKH:</label>
<input type="date" name="" id="">
<br>
<button>SELESAI</button>
<br>

<h5>PEMBAHAGIAN TUGAS</h5>
<br>
<label for="">TARIKH JANA KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<label for="">TARIKH PEMBAHAGIAN:</label>
<input type="text" name="" id="">
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
            <td>PENDAFTARAN SINARAN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>
                (V)12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>PRE PEYINARAN</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>
                (V)12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>PEYINARAN</td>
            <td>"NAMA"</td>
            <td>5</td>
            <td>
                (V)12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>4.</td>
            <td>PEMERIKSAAN AKHIR</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>
                (V)12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>5.</td>
            <td>SETUP SIJIL</td>
            <td>"NAMA"</td>
            <td>2</td>
            <td>X
            </td>
        </tr>
    </tbody>
</table>
<button>PAPAR AKTIVITI</button>
<br>

<br>
<h4>SETUP SIJIL</h4>
<br>
<label for="">NO KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>KETERANGAN BAHAN</th>
            <th>TARIKH PENYINARAN</th>
            <th>SIJIL</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>"BAHAN"</td>
            <td>23-12-2021</td>
            <td>
                <select name="" id="">
                    <option value="">SILA PILIH</option>
                </select>
            </td>
            <td>
                <i class="fas fa-print"><button></button></i>
                <button data-toggle="modal" data-target="#sijil">Detail</button>
            </td>
        </tr>
    </tbody>
</table>
<br>
<h5>PROSES SETUP SIJIL SELESAI</h5>
<br>
<label for="">TARIKH:</label>
<input type="date" name="" id="">
<br>
<button>SELESAI</button>
<br>


<br>
<h4>SETUP SIJIL</h4>
<br>
<label for="">NO KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>KETERANGAN BAHAN</th>
            <th>TARIKH PENYINARAN</th>
            <th>SIJIL</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>"BAHAN"</td>
            <td>23-12-2021</td>
            <td>
                SIJIL TELAH DIJANAKAN
                NO SIJIL:
                NM/3745
            </td>
            <td>
                <i class="fas fa-print"><button></button></i>
                <button data-toggle="modal" data-target="#sijil">Detail</button>
            </td>
        </tr>
    </tbody>
</table>
<br>
<br>
<button data-toggle="modal" data-target="#preview">PREVIEW</button>
<br>
<i class="fas fa-print"><button></button></i>
<button>HAPUS</button>
<button>TAMBAH</button>
<h6>JUMLAH DALAM SENARAI: 2</h6>
<br>
<table>
    <thead>
        <tr>
            <th>URUTAN</th>
            <th>LEVEL</th>
            <th>BIL</th>
            <th>KETERANGAN</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>2</td>
            <td>1</td>
            <td></td>
            <td>
                "SIJIL PENYINARAN ISO"
            </td>
            <td>
                 <i class="fas fa-pen"><button></button></i>
            </td>
        </tr>
        <tr>
            <tr>
                <td>3</td>
                <td>2</td>
                <td></td>
                <td>
                    "SIJIL PENYINARAN ISO 2"
                </td>
                <td>
                     <i class="fas fa-pen"><button></button></i>
                </td>
            </tr>
    </tbody>
</table>
<br>
<h5>PROSES SETUP SIJIL SELESAI</h5>
<br>
<label for="">TARIKH:</label>
<input type="date" name="" id="">
<br>
<button>SELESAI</button>
<br>

<h5>PEMBAHAGIAN TUGAS</h5>
<br>
<label for="">TARIKH JANA KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<label for="">TARIKH PEMBAHAGIAN:</label>
<input type="text" name="" id="">
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
            <td>PENDAFTARAN SINARAN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>
                (V)12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>PRE PEYINARAN</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>
                (V)12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>PEYINARAN</td>
            <td>"NAMA"</td>
            <td>5</td>
            <td>
                (V)12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>4.</td>
            <td>PEMERIKSAAN AKHIR</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>
                (V)12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>5.</td>
            <td>SETUP SIJIL</td>
            <td>"NAMA"</td>
            <td>2</td>
            <td>
                (V)12-11-2021
                12:09:13
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
    </tbody>
</table>
<button>PAPAR AKTIVITI</button>
<br>

<br>
<h4>MUAT NAIK DOKUMEN</h4>
<br>
<label for="">NO KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">NO LAPORAN:</label>
<input type="text" name="" id="">
<br>
<button>KEMASKINI</button>
<br>
<h5>AKTIVITI-AKTIVITI</h5>
<br>
<br>
<label for="">TAJUK:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">CATATAN:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">FAIL:</label>
<input type="file" name="" id="">
<br>
<p>(Fail : .doc, .ppt, .xls, .pdf, .txt, .zip, .jpeg, .gif, .png)</p>

<br>

<br>
<h5>PROSES MUAT NAIK SELESAI</h5>
<br>
<label for="">TARIKH:</label>
<input type="date" name="" id="">
<br>
<button>SELESAI</button>
<br>


<br>
<h4>MUAT NAIK DOKUMEN</h4>
<br>
<label for="">NO KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">NO LAPORAN:</label>
<input type="text" name="" id="">
<br>
<button>KEMASKINI</button>
<br>
<h5>AKTIVITI-AKTIVITI</h5>
<br>
<br>
<label for="">TAJUK:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">CATATAN:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">FAIL:</label>
<input type="file" name="" id="">
<br>
<p>(Fail : .doc, .ppt, .xls, .pdf, .txt, .zip, .jpeg, .gif, .png)</p>

<br>

<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>TAJUK</th>
            <th>CATATAN</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>23-12-2021</td>
            <td>
                3
            </td>
            <td>
                <i class="far fa-trash-alt"><button></button></i>
            </td>
        </tr>
    </tbody>
</table>
<br>
<h5>PROSES MUAT NAIK SELESAI</h5>
<br>
<label for="">TARIKH:</label>
<input type="date" name="" id="">
<br>
<button>SELESAI</button>
<br>

<h5>PEMBAHAGIAN TUGAS</h5>
<br>
<label for="">TARIKH JANA KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<label for="">TARIKH PEMBAHAGIAN:</label>
<input type="text" name="" id="">
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
            <td>PENDAFTARAN SINARAN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>
                (V)12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>PRE PEYINARAN</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>
                (V)12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>PEYINARAN</td>
            <td>"NAMA"</td>
            <td>5</td>
            <td>
                (V)12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>4.</td>
            <td>PEMERIKSAAN AKHIR</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>
                (V)12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>5.</td>
            <td>SETUP SIJIL</td>
            <td>"NAMA"</td>
            <td>2</td>
            <td>
                (V)12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>6.</td>
            <td>MUAT NAIK DOKUMEN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>
                (V)12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>7.</td>
            <td>KERJA SELESAI</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>X
            </td>
        </tr>
    </tbody>
</table>
<button>PAPAR AKTIVITI</button>
<br>


<br>
<h4>KERJA SELESAI</h4>
<br>
<label for="">NO KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<br>
<br>
<h5>AKTIVITI-AKTIVITI</h5>
<br>
<br>
<label for="">TARIKH:</label>
<input type="date" name="" id="">
<br>
<br>
<label for="">KETERANGAN:</label>
<textarea name="" id="" cols="30" rows="10"></textarea><br>
<br>
<br>
<button>TAMBAH</button>
<br>
<br>
<h5>PROSES KERJA SELESAI</h5>
<br>
<label for="">TARIKH:</label>
<input type="date" name="" id="">
<br>
<button>SELESAI</button>
<br>


<h4>KERJA SELESAI</h4>
<br>
<label for="">NO KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<br>
<br>
<h5>AKTIVITI-AKTIVITI</h5>
<br>
<br>
<label for="">TARIKH:</label>
<input type="date" name="" id="">
<br>
<br>
<label for="">KETERANGAN:</label>
<textarea name="" id="" cols="30" rows="10"></textarea><br>
<br>
<br>
<button>TAMBAH</button>
<br>

<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>TAJUK</th>
            <th>CATATAN</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>QWERTYUIOP</td>
            <td>
                QWERTYUIOP
            </td>
            <td>
                <i class="far fa-trash-alt"><button></button></i>
            </td>
        </tr>
    </tbody>
</table>
<br>
<h5>PROSES KERJA SELESAI</h5>
<br>
<label for="">TARIKH:</label>
<input type="date" name="" id="">
<br>
<button>SELESAI</button>
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
            <td>PENDAFTARAN SINARAN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>
                (V)12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>PRE PEYINARAN</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>
                (V)12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>PEYINARAN</td>
            <td>"NAMA"</td>
            <td>5</td>
            <td>
                (V)12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>4.</td>
            <td>PEMERIKSAAN AKHIR</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>
                (V)12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>5.</td>
            <td>SETUP SIJIL</td>
            <td>"NAMA"</td>
            <td>2</td>
            <td>
                (V)12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>6.</td>
            <td>MUAT NAIK DOKUMEN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>
                (V)12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>7.</td>
            <td>KERJA SELESAI</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>
                (V)12-11-2021
                12:09:13
            </td>
        </tr>
    </tbody>
</table>
<button>PAPAR AKTIVITI</button>
<br>
</form>







<!-- Modal -->
<div class="modal fade" id="sijil" tabindex="-1" role="dialog" aria-labelledby="sijilLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="sijilLabel">DETAIL</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <label for="">JENIS SIJIL:</label>
          <select name="" id="">
              <option value="">SILA PILIH</option>
          </select>
          <br>
          <label for="">ISO:</label>
          <select name="" id="">
              <option value="">SILA PILIH</option>
          </select>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">SIMPAN</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
<div class="modal fade" id="preview" tabindex="-1" role="dialog" aria-labelledby="previewLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="previewLabel">PREVIEW</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">TAMBAH</button>
          <button type="button" class="btn btn-primary">BATAL</button>
        </div>
      </div>
    </div>
  </div>
  <br>

@endsection
