
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
<br>
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
        <tr>
            <td>2.</td>
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
                <button type="button" >X</button>
            </td>
        </tr>
        <tr>
            <td>1.</td>
            <td>"BM"</td>
            <td>X</td>
            <td>X</td>
            <td>X</td>
            <td>X</td>
            <td>
                <button type="button" >DISAHKAN</button>
            </td>
        </tr>
    </tbody>
</table>
<p>*Sila Klik “X” Untuk Memastikan Bahan Mentah Disahkan!</p>
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
<br>
<h5>PEMBAHAGIAN TUGAS</h5>

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
<h4>PROSES PENGELUARAN </h4>
<br>
<label for="">NO KAD KERJA:</label>
<input type="text" name="" id="">
<br>
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
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>TARIKH</th>
            <th>KETERANGAN</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>31-11-2021</td>
            <td>4</td>
            <td>
                 <i class="fas fa-pen"><button></button></i>
                <i class="far fa-trash-alt"><button></button></i>
            </td>
        </tr>
    </tbody>
</table>
<br>
<br>
<h5>PROSES PROSES PENGELUARAN SELESAI</h5>
<br>
<label for=“”>TARIKH SIAP :</label>
<input type="date" name="" id="">
<br>
<button>SELESAI</button>
<br>
<!-- PAGE -->

<br>
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
<h4>SEMAK KUALITI </h4>
<br>
<label for="">NO KAD KERJA:</label>
<input type="text" name="" id="">
<br>
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
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>TARIKH</th>
            <th>KETERANGAN</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>31-11-2021</td>
            <td>4</td>
            <td>
                 <i class="fas fa-pen"><button></button></i>
                <i class="far fa-trash-alt"><button></button></i>
            </td>
        </tr>
    </tbody>
</table>
<br>
<br>
<h5>PROSES SEMAK KUALITI SELESAI</h5>
<br>
<label for=“”>TARIKH SIAP :</label>
<input type="date" name="" id="">
<br>
<button>SELESAI</button>
<br>
<!-- PAGE -->

<br>
<h5>PENYEDIAAN SIJIL</h5>
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
            <td>Penyinaran</td>
            <td>03-11-2021</td>
            <td><select name="" id="">
                <option value="">SILA PILIH</option>
            </select>
                <button>JANA SIJIL</button>
            </td>
            <td>
                <button>P</button><button href="" type="button" data-toggle="modal" data-target="#sijilDetail">Detail</button>
            </td>
        </tr>
    </tbody>
</table>
<br>
<br>
<h5>PROSES PENYEDIAAN SIJIL SELESAI</h5>
<br>
<label for=“”>TARIKH SIAP :</label>
<input type="date" name="" id="">
<br>
<button>SELESAI</button>
<br>

<br>
<h5>PENYEDIAAN SIJIL</h5>
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
            <td>Penyinaran</td>
            <td>03-11-2021</td>
            <td>
                SIJIL TELAH DIJANAKAN
                NO SIJIL: NM/35627
            </td>
            <td>
                <button>P</button><a href="">Detail</a>
            </td>
        </tr>
    </tbody>
</table>
<br>
<button>PREVIEW</button>
<br>
<button><i class="far fa-trash-alt"></i>HAPUS</button>
<button type="button" data-toggle="modal" data-target="#tambahsijil" >TAMBAH</button>
<br>
<h6>JUMLAH DALAM SENARAI: 1</h6>
<br>
<br>
<table>
    <thead>
        <tr>
            <th>URUTAN</th>
            <th>LEVEL</th>
            <th>BIL.</th>
            <th>KETERANGAN</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>2</td>
            <td>1</td>
            <td></td>
            <td>"KETERANGAN"</td>
            <td>
                 <i class="fas fa-pen"><button></button></i>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>3</td>
            <td>1.</td>
            <td>"KETERANGAN"</td>
            <td>
                 <i class="fas fa-pen"><button></button></i>
            </td>
        </tr>
    </tbody>
</table>
<br>
<br>
<h5>PROSES PENYEDIAAN SIJIL SELESAI</h5>
<br>
<label for=“”>TARIKH SIAP :</label>
<input type="date" name="" id="">
<br>
<button>SELESAI</button>
<br>
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
<h4>MUAT NAIK DOKUMEN</h4>
<br>
<label for="">NO KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<label for="">NO LAPORAN:</label>
<input type="text" name="" id="">
<br>
<br>
<button>KEMASKINI</button>
<br>
<br>
<h5>AKTIVITI-AKTIVITI</h5>
<br>
<br>
<label for="">TAJUK:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">CATATAN:</label>
<textarea name="" id="" cols="30" rows="10"></textarea><br>
<br>
<br>
<label for="">FAIL:</label>
<input type="file" name="" id="">
<br>
<button> MUAT NAIK</button>
<br>
<!-- PAGE -->
<br>
<h4>MUAT NAIK DOKUMEN</h4>
<br>
<label for="">NO KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<label for="">NO LAPORAN:</label>
<input type="text" name="" id="">
<i class="fas fa-pen"><button></button></i>
<i class="far fa-trash-alt"><button></button></i>
<br>
<br>
<button>KEMASKINI</button>
<br>
<br>
<h5>AKTIVITI-AKTIVITI</h5>
<br>
<br>
<label for="">TAJUK:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">CATATAN:</label>
<textarea name="" id="" cols="30" rows="10"></textarea><br>
<br>
<br>
<label for="">FAIL:</label>
<input type="file" name="" id="">
<br>
<button> MUAT NAIK</button>
<br>
<!-- PAGE -->

<br>
<h4>MUAT NAIK DOKUMEN</h4>
<br>
<label for="">NO KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<label for="">NO LAPORAN:</label>
<input type="text" name="" id="">
<i class="fas fa-pen"><button></button></i>
<i class="far fa-trash-alt"><button></button></i>
<br>
<br>
<button>KEMASKINI</button>
<br>
<br>
<h5>AKTIVITI-AKTIVITI</h5>
<br>
<br>
<label for="">TAJUK:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">CATATAN:</label>
<textarea name="" id="" cols="30" rows="10"></textarea><br>
<br>
<br>
<label for="">FAIL:</label>
<input type="file" name="" id="">
<br>
<button> MUAT NAIK</button>
<br>
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
            <td>"TAJUK"</td>
            <td></td>
            <td>
                 <i class="fas fa-pen"><button></button></i>
                <i class="far fa-trash-alt"><button></button></i>
            </td>
        </tr>
    </tbody>
</table>
<br>
<br>
<h5>PROSES MUAT NAIK DOKUMEN SELESAI</h5>
<br>
<label for=“”>TARIKH SIAP :</label>
<input type="date" name="" id="">
<br>
<button>SELESAI</button>
<br>
<br>
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
<!-- KERJA SELESAI PAGE -->
<br>
<h4>KERJA SELESAI</h4>
<br>
<label for="">NO KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<br>
<br>
<label for="">TARIKH:</label>
<input type="date" name="" id="">
<br>
<br>
<label for="">KETERANGAN:</label>
<textarea name="" id="" cols="30" rows="10"></textarea><br>
<br>
<button>
    TAMBAH
</button>
<br>
<!-- PAGE -->
<br>
<h4>KERJA SELESAI</h4>
<br>
<label for="">NO KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<br>
<br>
<label for="">TARIKH:</label>
<input type="date" name="" id="">
<br>
<br>
<label for="">KETERANGAN:</label>
<textarea name="" id="" cols="30" rows="10"></textarea><br>
<br>
<button>TAMBAH</button>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>TARIKH</th>
            <th>CATATAN</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>03-11-2021</td>
            <td>SS</td>
            <td>
                 <i class="fas fa-pen"><button></button></i>
                <i class="far fa-trash-alt"><button></button></i>
            </td>
        </tr>
    </tbody>
</table>
<br><br>
<h5>PROSES KERJA SELESAI</h5>
<br>
<label for=“”>TARIKH SIAP :</label>
<input type="date" name="" id="">
<br>
<button>SELESAI</button>
<br>
<!-- PAGE -->
<br>
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
</form>




<!-- Modal -->

<div class="modal fade" id="sijilDetail" tabindex="-1" role="dialog" aria-labelledby="sijilDetailLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="sijilDetailLabel">DETAIL</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <label for="">TARIKH TAMAT:</label>
          <input type="date" name="" id="">
          <br>
          <label for="">PERINGATAN:</label>
          <input type="text" name="" id="">
          <p>HARI</p>
          <br>
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
          {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
          <button type="button" >SIMPAN</button>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="tambahsijil" tabindex="-1" role="dialog" aria-labelledby="tambahsijilLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tambahsijilLabel"></h5>
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
          <button type="button" >TAMBAH</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">BATAL</button>
        </div>
      </div>
    </div>
  </div>





























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
          <label for="">KOD: </label>
          <input type="text" name="" id="">
          <br>
          <br>
          <label for="">NAMA:</label>
          <input type="text" name="" id="">
          <br>
          <br>
          <label for="">PUSAT KHIDMAT: </label>
          <select name="" id="">
              <option value="">SILA PILIH</option>
          </select>
          <br>
          <br>
          <label for="">AKTIF:</label>
          <select name="" id="">
            <option value="">SILA PILIH</option>
        </select>
          <br>
          <br>
          <label for="">UNIT UKURAN:</label>
          <input type="text" name="" id="">
          <br>
          <br>
          <label for="">JUMLAH SEMASA:</label>
          <input type="text" name="" id="">
          <br>
          <br>
          <label for="">PRE-ORDER LEVEL:</label>
          <input type="text" name="" id="">
          <br>
          <br>
          <label for="">CATATAN:</label>
          <input type="text" name="" id="">
          <br>
          <br>
          <label for="">PERKONGSIAN:</label>
          <select name="" id="">
              <option value="">SILA PILIH</option>
            </select>
          <br>
          <p>[PAPARAN SAHAJA]</p>
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
