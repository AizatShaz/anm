
@extends('bases')

@section('content')   
<h1>KAD KERJA - KELULUSAN</h1>

    <h5>SENARAI KAD KERJA</h5>
    <br>
    <br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>NO. KAD KERJA</th>
            <th>NAMA PELANGGAN</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>NM/2010-10000</td>
            <td>ABEX MEDICAL</td>
            <td>
                <a href="">NOTIFIKASI & TINDAKAN</a>
            </td>
        </tr>
    </tbody>
</table>
<br>

<!--PAGES-->
<form action="">
    @csrf
<h1>KELULUSAN-IRRADIATION</h1>

<h5>MAKLUMAT KAD KERJA</h5>
<br>
<br>
<label for="">NAMA PELANGGAN:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">PUSAT KHIDMAT:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">NO. KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">KHIDMAT:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">KUANTITI:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">UNIT HARGA(RM):</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">AMAUN (RM):</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">ITEM TAMBAHAN:</label>
<input type="text" name="" id="">
<br>
<br>
<br>
<label for="">JUMLAH (RM):</label>
<input type="text" name="" id="">
<br>
<h5>CAJ-CAJ LAIN</h5>
<br>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>PERKARA</th>
            <th>STATUS</th>
            <th>PUSAT KHIDMAT</th>
            <th>AMAUN(RM)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>DELIVERY</td>
            <td>"STATUS"</td>
            <td>"PUSAT KHIDMAT"</td>
            <td>300</td>
        </tr>
    </tbody>
</table>
<br>
<h5>JUMLAH KESELURUHAN (RM): RM</h5>
<br>
<h5>STATUS PERMOHONAN KAD KERJA</h5>
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
            <td>"STATUS"</td>
            <td>"TINDAKAN"</td>
            <td>"NAMA"</td>
            <td>"CATATN"</td>
            <td>"TARIKH"</td>
            <td>"TARIKH"</td>
            <td>"MASA"</td>
        </tr>
    </tbody>
</table>
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
<br>
<h5>UNTUK DISEMAK PELULUS</h5>
<br>
<label for="">LULUS:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">INVOIS:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">CACATAN:</label>
<textarea name="" id="" cols="30" rows="10"></textarea>
<br>
</form>

<!--PAGES-->

<!--PAGES-->
<form action="">
    @csrf
<h1>KELULUSAN-CALIBRATION</h1>

<h5>MAKLUMAT KAD KERJA</h5>
<br>
<br>
<label for="">NAMA PELANGGAN:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">PUSAT KHIDMAT:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">NO. KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">KHIDMAT:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">KUANTITI:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">UNIT HARGA(RM):</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">AMAUN (RM):</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">ITEM TAMBAHAN:</label>
<input type="text" name="" id="">
<br>
<br>
<br>
<label for="">JUMLAH (RM):</label>
<input type="text" name="" id="">
<br>
<h5>CAJ-CAJ LAIN</h5>
<br>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>PERKARA</th>
            <th>STATUS</th>
            <th>PUSAT KHIDMAT</th>
            <th>AMAUN(RM)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>DELIVERY</td>
            <td>"STATUS"</td>
            <td>"PUSAT KHIDMAT"</td>
            <td>300</td>
        </tr>
    </tbody>
</table>
<br>
<h5>JUMLAH KESELURUHAN (RM): RM</h5>
<br>
<h5>STATUS PERMOHONAN KAD KERJA</h5>
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
            <td>"STATUS"</td>
            <td>"TINDAKAN"</td>
            <td>"NAMA"</td>
            <td>"CATATN"</td>
            <td>"TARIKH"</td>
            <td>"TARIKH"</td>
            <td>"MASA"</td>
        </tr>
    </tbody>
</table>
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
<br>

<br>
<h5>UNTUK DISEMAK PELULUS</h5>
<br>
<label for="">LULUS:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">INVOIS:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">CACATAN:</label>
<textarea name="" id="" cols="30" rows="10"></textarea>
<br>
</form>

<!--PAGES-->

<!--PAGES-->
<form action="">
    @csrf
<h1>KELULUSAN-FABRICATION</h1>

<h5>MAKLUMAT KAD KERJA</h5>
<br>
<br>
<label for="">NAMA PELANGGAN:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">PUSAT KHIDMAT:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">NO. KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">KHIDMAT:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">KUANTITI:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">UNIT HARGA(RM):</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">AMAUN (RM):</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">ITEM TAMBAHAN:</label>
<input type="text" name="" id="">
<br>
<br>
<br>
<label for="">JUMLAH (RM):</label>
<input type="text" name="" id="">
<br>
<h5>CAJ-CAJ LAIN</h5>
<br>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>PERKARA</th>
            <th>STATUS</th>
            <th>PUSAT KHIDMAT</th>
            <th>AMAUN(RM)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>DELIVERY</td>
            <td>"STATUS"</td>
            <td>"PUSAT KHIDMAT"</td>
            <td>300</td>
        </tr>
    </tbody>
</table>
<br>
<h5>JUMLAH KESELURUHAN (RM): RM</h5>
<br>
<h5>STATUS PERMOHONAN KAD KERJA</h5>
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
            <td>"STATUS"</td>
            <td>"TINDAKAN"</td>
            <td>"NAMA"</td>
            <td>"CATATN"</td>
            <td>"TARIKH"</td>
            <td>"TARIKH"</td>
            <td>"MASA"</td>
        </tr>
    </tbody>
</table>
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
<br>

<br>
<h5>UNTUK DISEMAK PELULUS</h5>
<br>
<label for="">LULUS:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">INVOIS:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">CACATAN:</label>
<textarea name="" id="" cols="30" rows="10"></textarea>
<br>
</form>

<!--PAGES-->

<!--PAGES-->
<form action="">
    @csrf
<h1>KELULUSAN-PERSONAL DOSIMETER</h1>

<h5>MAKLUMAT KAD KERJA</h5>
<br>
<br>
<label for="">NAMA PELANGGAN:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">PUSAT KHIDMAT:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">NO. KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">KHIDMAT:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">KUANTITI:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">UNIT HARGA(RM):</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">AMAUN (RM):</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">ITEM TAMBAHAN:</label>
<input type="text" name="" id="">
<br>
<br>
<br>
<label for="">JUMLAH (RM):</label>
<input type="text" name="" id="">
<br>
<h5>CAJ-CAJ LAIN</h5>
<br>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>PERKARA</th>
            <th>STATUS</th>
            <th>PUSAT KHIDMAT</th>
            <th>AMAUN(RM)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>DELIVERY</td>
            <td>"STATUS"</td>
            <td>"PUSAT KHIDMAT"</td>
            <td>300</td>
        </tr>
    </tbody>
</table>
<br>
<h5>JUMLAH KESELURUHAN (RM): RM</h5>
<br>
<h5>STATUS PERMOHONAN KAD KERJA</h5>
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
            <td>"STATUS"</td>
            <td>"TINDAKAN"</td>
            <td>"NAMA"</td>
            <td>"CATATN"</td>
            <td>"TARIKH"</td>
            <td>"TARIKH"</td>
            <td>"MASA"</td>
        </tr>
    </tbody>
</table>
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
            <td>TERIMA PERMOHONAN </td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>LAPORAN DOS</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>KASET LENCANA</td>
            <td>"NAMA"</td>
            <td>5</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>4.</td>
            <td>KERJA SELESAI</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
    </tbody>
</table>
<br>
<br>

<br>
<h5>UNTUK DISEMAK PELULUS</h5>
<br>
<label for="">LULUS:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">INVOIS:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">CACATAN:</label>
<textarea name="" id="" cols="30" rows="10"></textarea>
<br>
</form>

<!--PAGES-->

<!--PAGES-->
<form action="">
    @csrf
<h1>KELULUSAN-PRODUCTION</h1>

<h5>MAKLUMAT KAD KERJA</h5>
<br>
<br>
<label for="">NAMA PELANGGAN:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">PUSAT KHIDMAT:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">NO. KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">KHIDMAT:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">KUANTITI:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">UNIT HARGA(RM):</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">AMAUN (RM):</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">ITEM TAMBAHAN:</label>
<input type="text" name="" id="">
<br>
<br>
<br>
<label for="">JUMLAH (RM):</label>
<input type="text" name="" id="">
<br>
<h5>CAJ-CAJ LAIN</h5>
<br>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>PERKARA</th>
            <th>STATUS</th>
            <th>PUSAT KHIDMAT</th>
            <th>AMAUN(RM)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>DELIVERY</td>
            <td>"STATUS"</td>
            <td>"PUSAT KHIDMAT"</td>
            <td>300</td>
        </tr>
    </tbody>
</table>
<br>
<h5>JUMLAH KESELURUHAN (RM): RM</h5>
<br>
<h5>STATUS PERMOHONAN KAD KERJA</h5>
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
            <td>"STATUS"</td>
            <td>"TINDAKAN"</td>
            <td>"NAMA"</td>
            <td>"CATATN"</td>
            <td>"TARIKH"</td>
            <td>"TARIKH"</td>
            <td>"MASA"</td>
        </tr>
    </tbody>
</table>
<br>
<br>
<label for="">TARIKH JANA KAD KERJA:</label>
<input type="date" name="" id="">
<br>
<label for="">TARIKH PEMBAHAGIAN:</label>
<input type="date" name="" id="">
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
<br>

<br>
<h5>UNTUK DISEMAK PELULUS</h5>
<br>
<label for="">LULUS:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">INVOIS:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">CACATAN:</label>
<textarea name="" id="" cols="30" rows="10"></textarea>
<br>
</form>

<!--PAGES-->

<!--PAGES-->
<form action="">
    @csrf
<h1>KELULUSAN-REPAIR</h1>

<h5>MAKLUMAT KAD KERJA</h5>
<br>
<br>
<label for="">NAMA PELANGGAN:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">PUSAT KHIDMAT:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">NO. KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">KHIDMAT:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">KUANTITI:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">UNIT HARGA(RM):</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">AMAUN (RM):</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">ITEM TAMBAHAN:</label>
<input type="text" name="" id="">
<br>
<br>
<br>
<label for="">JUMLAH (RM):</label>
<input type="text" name="" id="">
<br>
<h5>CAJ-CAJ LAIN</h5>
<br>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>PERKARA</th>
            <th>STATUS</th>
            <th>PUSAT KHIDMAT</th>
            <th>AMAUN(RM)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>DELIVERY</td>
            <td>"STATUS"</td>
            <td>"PUSAT KHIDMAT"</td>
            <td>300</td>
        </tr>
    </tbody>
</table>
<br>
<h5>JUMLAH KESELURUHAN (RM): RM</h5>
<br>
<h5>STATUS PERMOHONAN KAD KERJA</h5>
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
            <td>"STATUS"</td>
            <td>"TINDAKAN"</td>
            <td>"NAMA"</td>
            <td>"CATATN"</td>
            <td>"TARIKH"</td>
            <td>"TARIKH"</td>
            <td>"MASA"</td>
        </tr>
    </tbody>
</table>
<br>
<br>
<label for="">TARIKH JANA KAD KERJA:</label>
<input type="date" name="" id="">
<br>
<label for="">TARIKH PEMBAHAGIAN:</label>
<input type="date" name="" id="">
<br>

<br>

<br><table>
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
            <td>DAFTAR ALAT </td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>PEMBAIKAN ALAT</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>SETUP SURAT PERSETUJUAN</td>
            <td>"NAMA"</td>
            <td>5</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>4.</td>
            <td>KALIBRASI</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>5.</td>
            <td>MUAT NAIK DOKUMEN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>6.</td>
            <td>KERJA SELESAI</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
    </tbody>
</table>
<br>
<br>
<br>

<br>
<h5>UNTUK DISEMAK PELULUS</h5>
<br>
<label for="">LULUS:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">INVOIS:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">CACATAN:</label>
<textarea name="" id="" cols="30" rows="10"></textarea>
<br>
</form>

<!--PAGES-->

<!--PAGES-->
<form action="">
    @csrf
<h1>KELULUSAN-TESTING</h1>

<h5>MAKLUMAT KAD KERJA</h5>
<br>
<br>
<label for="">NAMA PELANGGAN:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">PUSAT KHIDMAT:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">NO. KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">KHIDMAT:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">KUANTITI:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">UNIT HARGA(RM):</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">AMAUN (RM):</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">ITEM TAMBAHAN:</label>
<input type="text" name="" id="">
<br>
<br>
<br>
<label for="">JUMLAH (RM):</label>
<input type="text" name="" id="">
<br>
<h5>CAJ-CAJ LAIN</h5>
<br>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>PERKARA</th>
            <th>STATUS</th>
            <th>PUSAT KHIDMAT</th>
            <th>AMAUN(RM)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>DELIVERY</td>
            <td>"STATUS"</td>
            <td>"PUSAT KHIDMAT"</td>
            <td>300</td>
        </tr>
    </tbody>
</table>
<br>
<h5>JUMLAH KESELURUHAN (RM): RM</h5>
<br>
<h5>STATUS PERMOHONAN KAD KERJA</h5>
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
            <td>"STATUS"</td>
            <td>"TINDAKAN"</td>
            <td>"NAMA"</td>
            <td>"CATATN"</td>
            <td>"TARIKH"</td>
            <td>"TARIKH"</td>
            <td>"MASA"</td>
        </tr>
    </tbody>
</table>
<br>
<br>
<label for="">TARIKH JANA KAD KERJA:</label>
<input type="date" name="" id="">
<br>
<label for="">TARIKH PEMBAHAGIAN:</label>
<input type="date" name="" id="">
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
            <td>DAFTAR SAMPEL </td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>SEMAK PERMOHONAN</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>PROSES SAMPEL</td>
            <td>"NAMA"</td>
            <td>5</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>4.</td>
            <td>ANALISIS DATA</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>5.</td>
            <td>KEPUTUSAN ANALISIS</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>6.</td>
            <td>SETUP SIJIL</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>7.</td>
            <td>MUAT NAIK DOKUMEN</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>8.</td>
            <td>KERJA SELESAI</td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
    </tbody>
</table>
<br>
<br>
<br>

<br>
<h5>UNTUK DISEMAK PELULUS</h5>
<br>
<label for="">LULUS:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">INVOIS:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">CACATAN:</label>
<textarea name="" id="" cols="30" rows="10"></textarea>
<br>
</form>

<!--PAGES-->

<!--PAGES-->
<form action="">
    @csrf
<h1>KELULUSAN-PERKHIDMATAN SEWA</h1>

<h5>MAKLUMAT KAD KERJA</h5>
<br>
<br>
<label for="">NAMA PELANGGAN:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">PUSAT KHIDMAT:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">NO. KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">KHIDMAT:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">KUANTITI:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">UNIT HARGA(RM):</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">AMAUN (RM):</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">ITEM TAMBAHAN:</label>
<input type="text" name="" id="">
<br>
<br>
<br>
<label for="">JUMLAH (RM):</label>
<input type="text" name="" id="">
<br>
<h5>CAJ-CAJ LAIN</h5>
<br>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>PERKARA</th>
            <th>STATUS</th>
            <th>PUSAT KHIDMAT</th>
            <th>AMAUN(RM)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>DELIVERY</td>
            <td>"STATUS"</td>
            <td>"PUSAT KHIDMAT"</td>
            <td>300</td>
        </tr>
    </tbody>
</table>
<br>
<h5>JUMLAH KESELURUHAN (RM): RM</h5>
<br>
<h5>STATUS PERMOHONAN KAD KERJA</h5>
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
            <td>"STATUS"</td>
            <td>"TINDAKAN"</td>
            <td>"NAMA"</td>
            <td>"CATATN"</td>
            <td>"TARIKH"</td>
            <td>"TARIKH"</td>
            <td>"MASA"</td>
        </tr>
    </tbody>
</table>
<br>
<br>
<label for="">TARIKH JANA KAD KERJA:</label>
<input type="date" name="" id="">
<br>
<label for="">TARIKH PEMBAHAGIAN:</label>
<input type="date" name="" id="">
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
            <td>DAFTAR SAMPEL </td>
            <td>"NAMA"</td>
            <td>3</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>SEMAK PERMOHONAN</td>
            <td>"NAMA"</td>
            <td>4</td>
            <td>X
            </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>PROSES SAMPEL</td>
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
            <td>3</td>
            <td>X
            </td>
        </tr>
    </tbody>
</table>
<br>
<br>
<br>

<br>
<h5>UNTUK DISEMAK PELULUS</h5>
<br>
<label for="">LULUS:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">INVOIS:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">CACATAN:</label>
<textarea name="" id="" cols="30" rows="10"></textarea>
<br>
</form>

<!--PAGES-->
<!--PAGES-->
<!--PAGES-->
<!--PAGES-->
<!--PAGES-->
@endsection
