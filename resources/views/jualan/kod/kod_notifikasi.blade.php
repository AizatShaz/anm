
@extends('bases')

@section('content') 
<form action="">
    @csrf
      
<h1>KOD NOTIFIKASI</h1>
<br>
<br>
<br>
<label for="">MODUL:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">PUSAT KHIDMAT:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">JENIS PERKHIDMATAN:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select><br>
<br>
<br>
<button>TAMBAH MAKLUMAT</button>
<br>
<br>
<h6>KETERANGAN</h6>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>TINDAKAN</th>
            <th>KETERANGAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>NOTIFIKASI</td>
            <td>1. STAF HANYA DAPAT MELIHAT PERMOHONAN SEBUTHARGA YANG TELAH DIBUAT</td>
        </tr>
        <tr>
            <td>NOTIFIKASI & TINDAKAN</td>
            <td>1. STAF HANYA DAPAT MELIHAT PERMOHONAN SEBUTHARGA YANG TELAH DIBUAT
                2. STAF HANYA AKAN MENGAMBIL TINDAKAN KEATAS PERMOHONAN SEBUTHARGA YANG TELAH DIBUAT
            </td>
        </tr>
    </tbody>
</table>
<h5>JUMLAH REKOD: </h5>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>NAMA STAF</th>
            <th>TINDAKAN</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>"MALIK"</td>
            <td>"NOTIFIKASI SAHAJA"</td>
            <td>
                <i class="far fa-trash-alt"><button></button></i>
            </td>
        </tr>
    </tbody>
</table>
<!--PAGES-->
<h1>PERMOHONAN SEBUTHARGA</h1>
<br>
<br>
<br>
<label for="">MODUL:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">PUSAT KHIDMAT:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">JENIS PERKHIDMATAN:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select><br>
<br>
<br>
<br>
<br>
<label for="">NAMA STAF:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">TINDAKAN:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<button>TAMBAH</button>
<button>PAPARAN SAHAJA</button>

<br>
<h6>KETERANGAN</h6>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>TINDAKAN</th>
            <th>KETERANGAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>NOTIFIKASI</td>
            <td>1. STAF HANYA DAPAT MELIHAT PERMOHONAN SEBUTHARGA YANG TELAH DIBUAT</td>
        </tr>
        <tr>
            <td>NOTIFIKASI & TINDAKAN</td>
            <td>1. STAF HANYA DAPAT MELIHAT PERMOHONAN SEBUTHARGA YANG TELAH DIBUAT
                2. STAF HANYA AKAN MENGAMBIL TINDAKAN KEATAS PERMOHONAN SEBUTHARGA YANG TELAH DIBUAT
            </td>
        </tr>
    </tbody>
</table>
<h5>JUMLAH REKOD: </h5>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>NAMA STAF</th>
            <th>TINDAKAN</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>"MALIK"</td>
            <td>"NOTIFIKASI SAHAJA"</td>
            <td>
                <i class="far fa-trash-alt"><button></button></i>
            </td>
        </tr>
    </tbody>
</table>
<!--PAGES-->

<!--PAGES-->
<h1>SEBUTHARGA</h1>
<br>
<br>
<br>
<label for="">MODUL:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">PUSAT KHIDMAT:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">JENIS PERKHIDMATAN:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select><br>
<br>
<br>
<br>
<br>
<label for="">NAMA STAF:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">TINDAKAN:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<button>TAMBAH</button>
<button>PAPARAN SAHAJA</button>

<br>
<h6>KETERANGAN</h6>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>TINDAKAN</th>
            <th>KETERANGAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>NOTIFIKASI</td>
            <td>1. STAF HANYA DAPAT MELIHAT SEBUTHARGA YANG TELAH DIBUAT</td>
        </tr>
        <tr>
            <td>NOTIFIKASI & TINDAKAN</td>
            <td>1. STAF HANYA DAPAT MELIHAT SEBUTHARGA YANG TELAH DIBUAT
                2. STAF HANYA AKAN MENGAMBIL TINDAKAN KEATAS SEBUTHARGA YANG TELAH DIBUAT
            </td>
        </tr>
    </tbody>
</table>
<h5>JUMLAH REKOD: </h5>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>NAMA STAF</th>
            <th>TINDAKAN</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>"MALIK"</td>
            <td>"NOTIFIKASI SAHAJA"</td>
            <td>
                <i class="far fa-trash-alt"><button></button></i>
            </td>
        </tr>
    </tbody>
</table>
<!--PAGES-->

<!--PAGES-->
<h1>PESANAN</h1>
<br>
<br>
<br>
<label for="">MODUL:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">PUSAT KHIDMAT:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">JENIS PERKHIDMATAN:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select><br>
<br>
<br>
<br>
<br>
<label for="">NAMA STAF:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">TINDAKAN:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<button>TAMBAH</button>
<button>PAPARAN SAHAJA</button>

<br>
<h6>KETERANGAN</h6>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>TINDAKAN</th>
            <th>KETERANGAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>NOTIFIKASI</td>
            <td>1. STAF HANYA DAPAT MELIHAT PESANAN YANG TELAH DIBUAT</td>
        </tr>
        <tr>
            <td>NOTIFIKASI & TINDAKAN</td>
            <td>1. STAF HANYA DAPAT MELIHAT PESANAN YANG TELAH DIBUAT
                2. STAF HANYA AKAN MENGAMBIL TINDAKAN KEATAS PESANAN YANG TELAH DIBUAT
            </td>
        </tr>
        <tr>
            <td>PENJANA KAD KERJA</td>
            <td>1. STAF YANG AKAN MENJANA KAD KERJA</td>
        </tr>
    </tbody>
</table>
<h5>JUMLAH REKOD: </h5>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>NAMA STAF</th>
            <th>TINDAKAN</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>"MALIK"</td>
            <td>"NOTIFIKASI SAHAJA"</td>
            <td>
                <i class="far fa-trash-alt"><button></button></i>
            </td>
        </tr>
    </tbody>
</table>
<!--PAGES-->

<!--PAGES-->
<h1>KAD KERJA</h1>
<br>
<br>
<br>
<label for="">MODUL:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">PUSAT KHIDMAT:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">JENIS PERKHIDMATAN:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select><br>
<br>
<br>
<br>
<br>
<label for="">NAMA STAF:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">TINDAKAN:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<button>TAMBAH</button>
<button>PAPARAN SAHAJA</button>
<br>
<h6>KETERANGAN</h6>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>TINDAKAN</th>
            <th>KETERANGAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>NOTIFIKASI</td>
            <td>1. STAF HANYA DAPAT MELIHAT KAD KERJA YANG TELAH DIBUAT</td>
        </tr>
        <tr>
            <td>NOTIFIKASI & TINDAKAN</td>
            <td>
                1. STAF HANYA DAPAT MELIHAT KAD KERJA YANG TELAH DIBUAT
                2. STAF HANYA AKAN MENGAMBIL TINDAKAN KEATAS KAD KERJA YANG TELAH DIBUAT
            </td>
        </tr>
        <tr>
            <td>PENJANA KAD KERJA</td>
            <td>1. STAF YANG AKAN MENJANA KAD KERJA YANG TELAH DIBUAT</td>
        </tr>
        <tr>
            <td>PENJANA INVOIS</td>
            <td>1. STAF YANG AKAN MENJANA INVOIS SETELAH KAD KERJA DILULUSKAN</td>
        </tr>
    </tbody>
</table>
<h5>JUMLAH REKOD: </h5>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>NAMA STAF</th>
            <th>TINDAKAN</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>"MALIK"</td>
            <td>"NOTIFIKASI SAHAJA"</td>
            <td>
                <i class="far fa-trash-alt"><button></button></i>
            </td>
        </tr>
    </tbody>
</table>
<!--PAGES-->

<!--PAGES-->
<h1>INVOIS</h1>
<br>
<br>
<br>
<label for="">MODUL:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">PUSAT KHIDMAT:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">JENIS PERKHIDMATAN:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select><br>
<br>
<br>
<br>
<br>
<label for="">NAMA STAF:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">TINDAKAN:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<button>TAMBAH</button>
<button>PAPARAN SAHAJA</button>
<br>
<h6>KETERANGAN</h6>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>TINDAKAN</th>
            <th>KETERANGAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>NOTIFIKASI</td>
            <td>1. STAF HANYA DAPAT MELIHAT INVOIS YANG TELAH DIBUAT</td>
        </tr>
        <tr>
            <td>NOTIFIKASI & TINDAKAN</td>
            <td>
                1. STAF HANYA DAPAT MELIHAT INVOIS YANG TELAH DIBUAT
                2. STAF HANYA AKAN MENGAMBIL TINDAKAN KEATAS INVOIS YANG TELAH DIBUAT
            </td>
        </tr>
    </tbody>
</table>
<h5>JUMLAH REKOD: </h5>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>NAMA STAF</th>
            <th>TINDAKAN</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>"MALIK"</td>
            <td>"NOTIFIKASI SAHAJA"</td>
            <td>
                <i class="far fa-trash-alt"><button></button></i>
            </td>
        </tr>
    </tbody>
</table>
<!--PAGES-->

<!--PAGES-->
<h1>NOTA HANTARAN</h1>
<br>
<br>
<br>
<label for="">MODUL:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">PUSAT KHIDMAT:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">JENIS PERKHIDMATAN:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select><br>
<br>
<br>
<br>
<br>
<label for="">NAMA STAF:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">TINDAKAN:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<button>TAMBAH</button>
<button>PAPARAN SAHAJA</button>
<br>
<h6>KETERANGAN</h6>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>TINDAKAN</th>
            <th>KETERANGAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>NOTIFIKASI</td>
            <td>1. STAF HANYA DAPAT MELIHAT NOTA HANTARAN YANG TELAH DIBUAT</td>
        </tr>
        <tr>
            <td>NOTIFIKASI & TINDAKAN</td>
            <td>
                1. STAF HANYA DAPAT MELIHAT NOTA HANTARAN YANG TELAH DIBUAT
                2. STAF HANYA AKAN MENGAMBIL TINDAKAN KEATAS NOTA HANTARAN YANG TELAH DIBUAT
            </td>
        </tr>
    </tbody>
</table>
<h5>JUMLAH REKOD: </h5>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>NAMA STAF</th>
            <th>TINDAKAN</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>"MALIK"</td>
            <td>"NOTIFIKASI SAHAJA"</td>
            <td>
                <i class="far fa-trash-alt"><button></button></i>
            </td>
        </tr>
    </tbody>
</table>
</form>
<!--PAGES-->

@endsection
