
@extends('bases')

@section('content')   
<h1>KAD KERJA - FABRICATION</h1>
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
            <td>PERMOHONAN </td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>REKABENTUK</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>FABRIKASI</td>
            <td>"NAMA"</td>
            <td>5</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>4.</td>
            <td>SENGGARAAN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>5.</td>
            <td>PEMERIKSAAN</td>
            <td>"NAMA"</td>
            <td>2</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>6.</td>
            <td>PENGUJIAN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
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
<br>
<button>PAPAR AKTIVITI</button>
<br>
<!-- PAGE -->
<h4>PERMOHONAN</h4>
<br>
<label for="">NO KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">KETERANGAN:</label>
<textarea name="" id="" cols="30" rows="10"></textarea><br>
<br>
<label for="">JENIS KHIDMAT:</label>
<input type="checkbox" name="" id="">
<label for="">PERUNDIGAN</label>
<br>
<input type="checkbox" name="" id="">
<label for="">REKABENTUK</label>
<br>
<input type="checkbox" name="" id="">
<label for="">FABRIKASI</label>
<br>
<input type="checkbox" name="" id="">
<label for="">SENGGARAN</label>
<br>
<input type="checkbox" name="" id="">
<label for="">LAIN-LAIN</label>
<br>
<br>
<label for="">KADAR</label>
<input type="checkbox" name="" id="">
<label for="">SERTA-MERTA</label>
<br>
<input type="checkbox" name="" id="">
<label for="">SEGERA</label>
<br>
<input type="checkbox" name="" id="">
<label for="">BIASA</label>
<br>
<br>
<label for="">DISERTAKAN:</label>
<input type="checkbox" name="" id="">
<label for="">LUKISAN</label>
<br>
<input type="checkbox" name="" id="">
<label for="">LAKARAN</label>
<br>
<input type="checkbox" name="" id="">
<label for="">SPESIFIKASI</label>
<br>
<input type="checkbox" name="" id="">
<label for="">SAMPEL</label>
<br>
<input type="checkbox" name="" id="">
<label for="">LAIN-LAIN</label>
<br>
<button>TAMBAH</button>
<br>
<!-- PAGE -->
<h4>PERMOHONAN</h4>
<br>
<label for="">NO KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">KETERANGAN:</label>
<textarea name="" id="" cols="30" rows="10"></textarea><br>
<br>
<label for="">JENIS KHIDMAT:</label>
<input type="checkbox" name="" id="">
<label for="">PERUNDIGAN</label>
<br>
<input type="checkbox" name="" id="">
<label for="">REKABENTUK</label>
<br>
<input type="checkbox" name="" id="">
<label for="">FABRIKASI</label>
<br>
<input type="checkbox" name="" id="">
<label for="">SENGGARAN</label>
<br>
<input type="checkbox" name="" id="">
<label for="">LAIN-LAIN</label>
<br>
<br>
<label for="">KADAR</label>
<input type="checkbox" name="" id="">
<label for="">SERTA-MERTA</label>
<br>
<input type="checkbox" name="" id="">
<label for="">SEGERA</label>
<br>
<input type="checkbox" name="" id="">
<label for="">BIASA</label>
<br>
<br>
<label for="">DISERTAKAN:</label>
<input type="checkbox" name="" id="">
<label for="">LUKISAN</label>
<br>
<input type="checkbox" name="" id="">
<label for="">LAKARAN</label>
<br>
<input type="checkbox" name="" id="">
<label for="">SPESIFIKASI</label>
<br>
<input type="checkbox" name="" id="">
<label for="">SAMPEL</label>
<br>
<input type="checkbox" name="" id="">
<label for="">LAIN-LAIN</label>
<br>
<button>KEMASKINI</button>
<br>
<br>
<h5>PROSES PERMOHONAN SELESAI</h5>
<br>
<label for=“”>TARIKH SIAP :</label>
<input type="date" name="" id="">
<br>
<button>SELESAI</button>
<br>
<!-- PAGE -->
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
            <td>PERMOHONAN </td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>REKABENTUK</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>FABRIKASI</td>
            <td>"NAMA"</td>
            <td>5</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>4.</td>
            <td>SENGGARAAN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>5.</td>
            <td>PEMERIKSAAN</td>
            <td>"NAMA"</td>
            <td>2</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>6.</td>
            <td>PENGUJIAN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
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
<br>
<button>PAPAR AKTIVITI</button>
<br>
<!-- PAGE -->

<h4>REKABENTUK</h4>
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
<br><br>
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
            <td>03-12-2021</td>
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
<h5>PROSES REKABENTUK SELESAI</h5>
<br>
<label for=“”>TARIKH SIAP :</label>
<input type="date" name="" id="">
<br>
<button>SELESAI</button>
<br>

<!-- PAGE -->
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
            <td>PERMOHONAN </td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>REKABENTUK</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>FABRIKASI</td>
            <td>"NAMA"</td>
            <td>5</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>4.</td>
            <td>SENGGARAAN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>5.</td>
            <td>PEMERIKSAAN</td>
            <td>"NAMA"</td>
            <td>2</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>6.</td>
            <td>PENGUJIAN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
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
<br>
<button>PAPAR AKTIVITI</button>
<br>
<!-- PAGE -->
<h4>FABRIKASI</h4>
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
            <td>23-21-2021</td>
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
<h5>PROSES FABRIKASI SELESAI</h5>
<br>
<label for=“”>TARIKH SIAP :</label>
<input type="date" name="" id="">
<br>
<button>SELESAI</button>
<br>
<!-- PAGE -->
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
            <td>PERMOHONAN </td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>REKABENTUK</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>FABRIKASI</td>
            <td>"NAMA"</td>
            <td>5</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>4.</td>
            <td>SENGGARAAN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>5.</td>
            <td>PEMERIKSAAN</td>
            <td>"NAMA"</td>
            <td>2</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>6.</td>
            <td>PENGUJIAN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
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
<br>
<button>PAPAR AKTIVITI</button>
<br>
<!-- PAGE -->
<br>
<h4>SENGGARAN</h4>
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
            <td>13-21-2021</td>
            <td>3</td>
            <td>
                 <i class="fas fa-pen"><button></button></i>
                <i class="far fa-trash-alt"><button></button></i>
            </td>
        </tr>
    </tbody>
</table>
<br>
<br>
<h5>PROSES SENGGARAN SELESAI</h5>
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
            <td>PERMOHONAN </td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>REKABENTUK</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>FABRIKASI</td>
            <td>"NAMA"</td>
            <td>5</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>4.</td>
            <td>SENGGARAAN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>5.</td>
            <td>PEMERIKSAAN</td>
            <td>"NAMA"</td>
            <td>2</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>6.</td>
            <td>PENGUJIAN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
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
<br>
<button>PAPAR AKTIVITI</button>
<br>
<!-- PAGE -->
<h4>PEMERIKSAAN</h4>
<br>
<button>TAMBAH MAKLUMAT</button>
<br>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>KERJA ALAT/KOMPONEN</th>
            <th>KEAADAAN</th>
            <th>CATATAN</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>"DATA"</td>
            <td>"DATA"</td>
            <td>4</td>
            <td>
                 <i class="fas fa-pen"><button></button></i>
                <i class="far fa-trash-alt"><button></button></i>
            </td>
        </tr>
    </tbody>
</table>
<br>
<button>TAMBAH</button>
<br>
<!-- PAGE -->
<h4>PEMERIKSAAN</h4>
<br>
<button>TAMBAH MAKLUMAT</button>
<br>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>KERJA ALAT/KOMPONEN</th>
            <th>KEAADAAN</th>
            <th>CATATAN</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>"DATA"</td>
            <td>"DATA"</td>
            <td>4</td>
            <td>
                 <i class="fas fa-pen"><button></button></i>
                <i class="far fa-trash-alt"><button></button></i>
            </td>
        </tr>
    </tbody>
</table>
<br>
<button>KEMASKINI</button>
<br>
<br>
<h5>PROSES PEMERIKSAAN SELESAI</h5>
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
            <td>PERMOHONAN </td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>REKABENTUK</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>FABRIKASI</td>
            <td>"NAMA"</td>
            <td>5</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>4.</td>
            <td>SENGGARAAN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>5.</td>
            <td>PEMERIKSAAN</td>
            <td>"NAMA"</td>
            <td>2</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>6.</td>
            <td>PENGUJIAN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
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
<br>
<button>PAPAR AKTIVITI</button>
<br>
<!-- PAGE -->
<h4>PENGUJIAN</h4>
<br>
<button>TAMBAH MAKLUMAT</button>
<br>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>KERJA OPERASI</th>
            <th>KEAADAAN</th>
            <th>CATATAN</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>"DATA"</td>
            <td>"DATA"</td>
            <td>4</td>
            <td>
                 <i class="fas fa-pen"><button></button></i>
                <i class="far fa-trash-alt"><button></button></i>
            </td>
        </tr>
    </tbody>
</table>
<br>
<button>TAMBAH</button>
<br>
<!-- PAGE -->
<h4>PENGUJIAN</h4>
<br>
<button>TAMBAH MAKLUMAT</button>
<br>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>KERJA OPERASI</th>
            <th>KEAADAAN</th>
            <th>CATATAN</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>"DATA"</td>
            <td>"DATA"</td>
            <td>4</td>
            <td>
                 <i class="fas fa-pen"><button></button></i>
                <i class="far fa-trash-alt"><button></button></i>
            </td>
        </tr>
    </tbody>
</table>
<br>
<button>KEMASKINI</button>
<br>
<br>
<h5>PROSES PENGUJIAN SELESAI</h5>
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
            <td>PERMOHONAN </td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>REKABENTUK</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>FABRIKASI</td>
            <td>"NAMA"</td>
            <td>5</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>4.</td>
            <td>SENGGARAAN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>5.</td>
            <td>PEMERIKSAAN</td>
            <td>"NAMA"</td>
            <td>2</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>6.</td>
            <td>PENGUJIAN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
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
<br>
<button>PAPAR AKTIVITI</button>
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
            <td>PERMOHONAN </td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>REKABENTUK</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>FABRIKASI</td>
            <td>"NAMA"</td>
            <td>5</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>4.</td>
            <td>SENGGARAAN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>5.</td>
            <td>PEMERIKSAAN</td>
            <td>"NAMA"</td>
            <td>2</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>6.</td>
            <td>PENGUJIAN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
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
<br>
<button>PAPAR AKTIVITI</button>
<br>






</form>





















@endsection
