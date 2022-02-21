
@extends('bases')

@section('content')   
<h1>KAD KERJA - CALIBRATION</h1>
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
            <td>PRA PENDAFTARAN SAMPEL</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>
                (V) 12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>AKTIVITI LAWATAN TAPAK</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>PENDAFTARAN SAMPEL</td>
            <td>"NAMA"</td>
            <td>5</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>4.</td>
            <td>MUAT NAIK DOKUMEN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>5.</td>
            <td>KERJA SELESAI</td>
            <td>"NAMA"</td>
            <td>2</td>
            <td>X
            </td>
        </tr>
    </tbody>
</table>
<br>
<button>PAPAR AKTIVITI</button>
<br>
<h4>PRA PENDAFTARAN SAMPEL</h4>
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
<h5>PROSES PRA PENDAFTARAN SAMPEL SELESAI</h5>
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
            <td>PRA PENDAFTARAN SAMPEL</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>
                (V) 12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>AKTIVITI LAWATAN TAPAK</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>
                (V) 12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>PENDAFTARAN SAMPEL</td>
            <td>"NAMA"</td>
            <td>5</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>4.</td>
            <td>MUAT NAIK DOKUMEN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>5.</td>
            <td>KERJA SELESAI</td>
            <td>"NAMA"</td>
            <td>2</td>
            <td>X
            </td>
        </tr>
    </tbody>
</table>
<br>
<button>PAPAR AKTIVITI</button>
<br>
<h4>AKTIVITI LAWATAN TAPAK</h4>
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
<h5>PROSES LAWATAN TAPAK SELESAI</h5>
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
            <td>PRA PENDAFTARAN SAMPEL</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>
                (V) 12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>AKTIVITI LAWATAN TAPAK</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>
                (V) 12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>PENDAFTARAN SAMPEL</td>
            <td>"NAMA"</td>
            <td>5</td>
            <td>
                (V) 12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>4.</td>
            <td>MUAT NAIK DOKUMEN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>5.</td>
            <td>KERJA SELESAI</td>
            <td>"NAMA"</td>
            <td>2</td>
            <td>X
            </td>
        </tr>
    </tbody>
</table>
<br>
<button>PAPAR AKTIVITI</button>
<br>
<h4> PENDAFTARAN SAMPEL</h4>
<br>
<label for="">NO KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<br>
<br>
<label for="">TARIKH TERIMA SAMPEL:</label>
<input type="date" name="" id="">
<br>
<br>
<label for="">TARIKH TAMAT SAMPEL:</label>
<input type="date" name="" id="">
<br>
<br>
<label for="">KETERANGAN:</label>
<textarea name="" id="" cols="30" rows="10"></textarea><br>
<br>
<button>SIMPAN</button>
<br>
<br>
<h4> PENDAFTARAN SAMPEL</h4>
<br>
<label for="">NO KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<br>
<br>
<label for="">TARIKH TERIMA SAMPEL:</label>
<input type="date" name="" id="">
<br>
<br>
<label for="">TARIKH TAMAT SAMPEL:</label>
<input type="date" name="" id="">
<br>
<br>
<label for="">KETERANGAN:</label>
<textarea name="" id="" cols="30" rows="10"></textarea><br>
<br>
<button>KEMASKINI</button>
<br>
<button>TAMBAH MAKLUMAT</button>
<br>
<h5>MASUKAN MAKLUMAT SAMPLE</h5>
<br>
<label for="">NAMA SAMPEL:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">NO. SAMPEL PELANGGAN:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">NO. SAMPEL NUKLEAR MALAYSIA:</label>
<input type="text" name="" id="">
<br>
<p>*Hanya 100 sampel yang boleh dimasukkan</p>
<button>TAMBAH</button>
<br>
<button>PAPAR MAKLUMAT SAHAJA</button>
<br>
<br>
<h4> PENDAFTARAN SAMPEL</h4>
<br>
<label for="">NO KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<br>
<br>
<label for="">TARIKH TERIMA SAMPEL:</label>
<input type="date" name="" id="">
<br>
<br>
<label for="">TARIKH TAMAT SAMPEL:</label>
<input type="date" name="" id="">
<br>
<br>
<label for="">KETERANGAN:</label>
<textarea name="" id="" cols="30" rows="10"></textarea><br>
<br>
<button>KEMASKINI</button>
<br>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>NAMA SAMPEL</th>
            <th>NO SAMPEL</th>
            <th>NO. SAMPEL NUKLEAR MALAYSIA</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td></td>
            <td>
                 <i class="fas fa-pen"><button></button></i>
                <i class="far fa-trash-alt"><button></button></i>
            </td>
        </tr>
    </tbody>
</table>
<br>
<button>TAMBAH MAKLUMAT</button>
<br>
<h5>PROSES PENDAFTARAN SAMPEL SELESAI</h5>
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
            <td>PRA PENDAFTARAN SAMPEL</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>
        </tr>
        <tr>
            <td>2.</td>
            <td>AKTIVITI LAWATAN TAPAK</td>
            <td>"NAMA"</td>
            <td>4</td>
                (V) 12-11-2021
        </tr>
        <tr>
            <td>3.</td>
            <td>PENDAFTARAN SAMPEL</td>
            <td>"NAMA"</td>
            <td>5</td>
                12:09:13
        </tr>
        <tr>
            <td>4.</td>
            <td>MUAT NAIK DOKUMEN</td>
            <td>"NAMA"</td>
            <td>3</td>
            </td>
        </tr>
        <tr>
            <td>5.</td>
            <td>KERJA SELESAI</td>
            <td>"NAMA"</td>
            <td>2</td>
            <td>X
            </td>
        </tr>
    </tbody>
</table>
<br>
<button>PAPAR AKTIVITI</button>
<br>
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
<h5>PROSES MUAT NAIK DOKUMEN SELESAI</h5>
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
            <td>PRA PENDAFTARAN SAMPEL</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>
                (V) 12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>AKTIVITI LAWATAN TAPAK</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>
                (V) 12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>PENDAFTARAN SAMPEL</td>
            <td>"NAMA"</td>
            <td>5</td>
            <td>
                (V) 12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>4.</td>
            <td>MUAT NAIK DOKUMEN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>
                (V) 12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>5.</td>
            <td>KERJA SELESAI</td>
            <td>"NAMA"</td>
            <td>2</td>
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
            <td>PRA PENDAFTARAN SAMPEL</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>
                (V) 12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>AKTIVITI LAWATAN TAPAK</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>
                (V) 12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>PENDAFTARAN SAMPEL</td>
            <td>"NAMA"</td>
            <td>5</td>
            <td>
                (V) 12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>4.</td>
            <td>MUAT NAIK DOKUMEN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>
                (V) 12-11-2021
                12:09:13
            </td>
        </tr>
        <tr>
            <td>5.</td>
            <td>KERJA SELESAI</td>
            <td>"NAMA"</td>
            <td>2</td>
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












@endsection
