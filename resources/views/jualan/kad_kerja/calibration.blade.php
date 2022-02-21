
@extends('bases')

@section('content')   
<h1>KAD KERJA - CALIBRATION</h1>

<form action="">
    @csrf
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
            <td>PERMOHONAN ISOTOPE</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>(V) 12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>PERMOHONAN KENDERAAN</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>PENDAFTARAN ALAT</td>
            <td>"NAMA"</td>
            <td>5</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>4.</td>
            <td>PEMERIKSAAN AWALAN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>5.</td>
            <td>TENTU UKURAN ALAT</td>
            <td>"NAMA"</td>
            <td>2</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>6.</td>
            <td>ANALISIS DATA</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>7.</td>
            <td>PENYEDIAAN SIJIL</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>8.</td>
            <td>MUAT NAIK DOKUMEN</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>9.</td>
            <td>SELESAI</td>
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
<h4> PERMOHONAN ISOTOPE</h4>

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
<br>
<h5>PROSES PERMOHONAN ISOTOPE SELESAI</h5>
<br>
<label for="">TARIKH:</label>
<input type="date" name="" id="">
<br>
<button>SELESAI</button>
<br>
<h1>KAD KERJA - CALIBRATION</h1>

<form action="">
    @csrf
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
            <td>PERMOHONAN ISOTOPE</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>
                (V) 12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>PERMOHONAN KENDERAAN</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>
                (V) 12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>PENDAFTARAN ALAT</td>
            <td>"NAMA"</td>
            <td>5</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>4.</td>
            <td>PEMERIKSAAN AWALAN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>5.</td>
            <td>TENTU UKURAN ALAT</td>
            <td>"NAMA"</td>
            <td>2</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>6.</td>
            <td>ANALISIS DATA</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>7.</td>
            <td>PENYEDIAAN SIJIL</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>8.</td>
            <td>MUAT NAIK DOKUMEN</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>9.</td>
            <td>SELESAI</td>
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
<h4> PERMOHONAN KENDERAAN</h4>

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
<br>
<h5>PROSES PERMOHONAN KENDERAAN SELESAI</h5>
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
            <td>PERMOHONAN ISOTOPE</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>(V) 12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>PERMOHONAN KENDERAAN</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>(V) 12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>PENDAFTARAN ALAT</td>
            <td>"NAMA"</td>
            <td>5</td>
            <td>(V) 12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>4.</td>
            <td>PEMERIKSAAN AWALAN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>5.</td>
            <td>TENTU UKURAN ALAT</td>
            <td>"NAMA"</td>
            <td>2</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>6.</td>
            <td>ANALISIS DATA</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>7.</td>
            <td>PENYEDIAAN SIJIL</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>8.</td>
            <td>MUAT NAIK DOKUMEN</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>9.</td>
            <td>SELESAI</td>
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
<h4>PENDAFTARAN ALAT</h4>
<br>
<label for="">NO KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<label for="">KUANTITI ALAT:</label>
<input type="text" name="" id="">
<br>
<label for="">TARIKH TERIMA:</label>
<input type="date" name="" id="">
<br>
<br>
<label for="">TARIKH AMBIL:</label>
<input type="date" name="" id="">
<br>
<button>KEMASKINI</button>
<br>
<h4>PROSES PENDAFTARAN ALAT SELESAI</h4>
<br>
<label for="">TARIKH SIAP:</label>
<input type="date" name="" id="">
<br>
<button>SELESAI</button>
<br>
<br>
<h4>PENDAFTARAN ALAT</h4>
<br>
<label for="">NO KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<label for="">KUANTITI ALAT:</label>
<input type="text" name="" id="">
<br>
<label for="">TARIKH TERIMA:</label>
<input type="date" name="" id="">
<br>
<br>
<label for="">TARIKH AMBIL:</label>
<input type="date" name="" id="">
<br>
<button>KEMASKINI</button>
<br>
<label for="">NAMA ALAT:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">MODEL:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">NO SIRI:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">CARA TERIMA:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">CARA HANTAR:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">TARIKH TENTUKURAN:</label>
<input type="date" name="" id="">
<br>
<br>
<label for="">TARIKH CATAK LAPORAN:</label>
<input type="date" name="" id="">
<br>
<br>
<label for="">CATATAN:</label>
<textarea name="" id="" cols="30" rows="10"></textarea><br>
<br>
<button type="button" data-toggle="modal" data-target="#mesin1">TAMBAH</button>
<br>
<br>
<h5>PROSES PENDAFTARAN ALAT SELESAI</h5>
<br>
<label for="">TARIKH SIAP:</label>
<input type="date" name="" id="">
<br>
<button>SELESAI</button>
<br>
<h4>PENDAFTARAN ALAT</h4>
<br>
<label for="">NO KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<label for="">KUANTITI ALAT:</label>
<input type="text" name="" id="">
<br>
<label for="">TARIKH TERIMA:</label>
<input type="date" name="" id="">
<br>
<br>
<label for="">TARIKH AMBIL:</label>
<input type="date" name="" id="">
<br>
<button>KEMASKINI</button>
<br>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>  NAMA ALAT</th>
            <th>TARIKH TENTUKURAN</th>
            <th>TARIKH LAPOR CETAK</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>MINER</td>
            <td>31-02-2022</td>
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
<h5>PROSES PENDAFTARAN ALAT SELESAI</h5>
<br>
<label>TARIKH SIAP:</label>
<input type="date" name="" id="">
<br>
<button>SELESAI</button>
<br>
<h5>PEMBAHAGIAN KERJA</h5>
<br>
<label for="">TARIKH JANA KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<label for="">TARIKH PEMBAHAGIAN:</label>
<input type="text" name="" id="">
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
            <td>PERMOHONAN ISOTOPE</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>
                (V) 12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>PERMOHONAN KENDERAAN</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>
                (V) 12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>PENDAFTARAN ALAT</td>
            <td>"NAMA"</td>
            <td>5</td>
            <td>
                                (V) 12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>4.</td>
            <td>PEMERIKSAAN AWALAN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>
                                (V) 12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>5.</td>
            <td>TENTU UKURAN ALAT</td>
            <td>"NAMA"</td>
            <td>2</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>6.</td>
            <td>ANALISIS DATA</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>7.</td>
            <td>PENYEDIAAN SIJIL</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>8.</td>
            <td>MUAT NAIK DOKUMEN</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>9.</td>
            <td>SELESAI</td>
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
<h4>PEMERIKSAAN AWALAN</h4>
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
<button>TAMBAH</button>
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
            <td>03-11-2021</td>
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
<h5>PROSES PEMERKISAAN AWALAN SELESAI</h5>
<br>
<label for=“”>TARIKH SIAP :</label>
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
            <td>PERMOHONAN ISOTOPE</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>PERMOHONAN KENDERAAN</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>PENDAFTARAN ALAT</td>
            <td>"NAMA"</td>
            <td>5</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>4.</td>
            <td>PEMERIKSAAN AWALAN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>5.</td>
            <td>TENTU UKURAN ALAT</td>
            <td>"NAMA"</td>
            <td>2</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>6.</td>
            <td>ANALISIS DATA</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>7.</td>
            <td>PENYEDIAAN SIJIL</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>8.</td>
            <td>MUAT NAIK DOKUMEN</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>9.</td>
            <td>SELESAI</td>
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
<br>
<h4>TENTUKURAN</h4>
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
            <th>KETERANGAN</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>12-03-2022</td>
            <td>Penyinaran</td>
            <td>
                 <i class="fas fa-pen"><button></button></i>
                <i class="far fa-trash-alt"><button></button></i>
            </td>
        </tr>
    </tbody>
</table>
<br>
<br>
<h5>PROSES TENTUKAURAN SELESAI</h5>
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
<input type="text" name="" id="">
<br>
<label for="">TARIKH PEMBAHAGIAN:</label>
<input type="text" name="" id="">
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
            <td>PERMOHONAN ISOTOPE</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>PERMOHONAN KENDERAAN</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>PENDAFTARAN ALAT</td>
            <td>"NAMA"</td>
            <td>5</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>4.</td>
            <td>PEMERIKSAAN AWALAN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>5.</td>
            <td>TENTU UKURAN ALAT</td>
            <td>"NAMA"</td>
            <td>2</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>6.</td>
            <td>ANALISIS DATA</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>7.</td>
            <td>PENYEDIAAN SIJIL</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>8.</td>
            <td>MUAT NAIK DOKUMEN</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>9.</td>
            <td>SELESAI</td>
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
<br>
<h4>ANALISIS DATA</h4>
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
            <td>02-12-2021</td>
            <td>Penyinaran</td>
            <td>
                 <i class="fas fa-pen"><button></button></i>
                <i class="far fa-trash-alt"><button></button></i>
            </td>
        </tr>
    </tbody>
</table>
<br>
<br>
<h5>PROSES ANALISIS DATA SELESAI</h5>
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
<input type="text" name="" id="">
<br>
<label for="">TARIKH PEMBAHAGIAN:</label>
<input type="text" name="" id="">
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
            <td>PERMOHONAN ISOTOPE</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>PERMOHONAN KENDERAAN</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>PENDAFTARAN ALAT</td>
            <td>"NAMA"</td>
            <td>5</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>4.</td>
            <td>PEMERIKSAAN AWALAN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>5.</td>
            <td>TENTU UKURAN ALAT</td>
            <td>"NAMA"</td>
            <td>2</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>6.</td>
            <td>ANALISIS DATA</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>7.</td>
            <td>PENYEDIAAN SIJIL</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>8.</td>
            <td>MUAT NAIK DOKUMEN</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>9.</td>
            <td>SELESAI</td>
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
                <button>P</button><a href="" type="button" data-toggle="modal" data-target="#sijilDetail">Detail</a>
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
<input type="text" name="" id="">
<br>
<label for="">TARIKH PEMBAHAGIAN:</label>
<input type="text" name="" id="">
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
            <td>PERMOHONAN ISOTOPE</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>PERMOHONAN KENDERAAN</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>PENDAFTARAN ALAT</td>
            <td>"NAMA"</td>
            <td>5</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>4.</td>
            <td>PEMERIKSAAN AWALAN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>5.</td>
            <td>TENTU UKURAN ALAT</td>
            <td>"NAMA"</td>
            <td>2</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>6.</td>
            <td>ANALISIS DATA</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>7.</td>
            <td>PENYEDIAAN SIJIL</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>8.</td>
            <td>MUAT NAIK DOKUMEN</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>9.</td>
            <td>SELESAI</td>
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
<h4>MUAT NAIK LAPORAN</h4>
<br>
<label for="">NO KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<label for="">NAMA ALAT:</label>
<input type="text" name="" id="">
<br>
<label for="">NO. LAPORAN:</label>
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
<label for="">NAMA ALAT:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<label for="">CATATAN</label>
<textarea name="" id="" cols="30" rows="10"></textarea>
<br>
<label for="">FAIL:</label>
<input type="file" name="" id="">
<br>
<button>MUAT NAIK</button>
<br>

<br>
<h4>MUAT NAIK LAPORAN</h4>
<br>
<label for="">NO KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>NAMA ALAT</th>
            <th>NO LAPORAN</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>"NAMA ALAT"</td>
            <td>0000</td>
            <td>
                 <i class="fas fa-pen"><button></button></i>
                <i class="far fa-trash-alt"><button></button></i>
            </td>
        </tr>
    </tbody>
</table>
<br>
<h5>AKTIVITI-AKTIVITI</h5>
<br>
<br>
<label for="">TAJUK:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">NAMA ALAT:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<label for="">CATATAN</label>
<textarea name="" id="" cols="30" rows="10"></textarea>
<br>
<label for="">FAIL:</label>
<input type="file" name="" id="">
<br>
<button>MUAT NAIK</button>
<br>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>TAJUK</th>
            <th>KETERANGAN</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>"TAJUK"</td>
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
<h5>PROSES MUAT NAIK SELESAI</h5>
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
<input type="text" name="" id="">
<br>
<label for="">TARIKH PEMBAHAGIAN:</label>
<input type="text" name="" id="">
<br>
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
            <td>PERMOHONAN ISOTOPE</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>PERMOHONAN KENDERAAN</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>PENDAFTARAN ALAT</td>
            <td>"NAMA"</td>
            <td>5</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>4.</td>
            <td>PEMERIKSAAN AWALAN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>5.</td>
            <td>TENTU UKURAN ALAT</td>
            <td>"NAMA"</td>
            <td>2</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>6.</td>
            <td>ANALISIS DATA</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>7.</td>
            <td>PENYEDIAAN SIJIL</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>8.</td>
            <td>MUAT NAIK DOKUMEN</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>9.</td>
            <td>SELESAI</td>
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

<br>
<h4>KERJA SELESAI</h4>
<br>
<label for="">NO KAD KERJA:</label>
<input type="text" name="" id="">
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
            <td>02-12-2021</td>
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
<h5>PROSES KERJA SELESAI</h5>
<br>
<label for=“”>TARIKH SIAP :</label>
<input type="date" name="" id="">
<br>
<button>SELESAI</button>
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
            <td>PERMOHONAN ISOTOPE</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>(V) 12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>PERMOHONAN KENDERAAN</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>(V) 12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>PENDAFTARAN ALAT</td>
            <td>"NAMA"</td>
            <td>5</td>
            <td>(V) 12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>4.</td>
            <td>PEMERIKSAAN AWALAN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>(V) 12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>5.</td>
            <td>TENTU UKURAN ALAT</td>
            <td>"NAMA"</td>
            <td>2</td>
            <td>(V) 12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>6.</td>
            <td>ANALISIS DATA</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>(V) 12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>7.</td>
            <td>PENYEDIAAN SIJIL</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>(V) 12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>8.</td>
            <td>MUAT NAIK DOKUMEN</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>(V) 12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>9.</td>
            <td>SELESAI</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>
                (V) 12-11-2021
                12:09:13
            </td>
        </tr>
    </tbody>
</table>
<br>
<button>PAPAR AKTIVITI</button>
<br>

</form>




  <!-- Modal -->
  <div class="modal fade" id="mesin1" tabindex="-1" role="dialog" aria-labelledby="mesin1Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="mesin1Label">PENDAFTARAN MESIN</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <label for="">NAMA ALAT:</label>
          <input type="text" name="" id="">
        </div>
        <div class="modal-footer">
          {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
          <button type="button" >TAMBAH</button>
        </div>
      </div>
    </div>
  </div>
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
  
@endsection
