
@extends('bases')

@section('content')   
<form action="">
    @csrf
    <h1>KAD KERJA MASUK</h1>
<br>
<table>
    <thead>
        <tr>
            <th>BIL.</th>
            <th>NO. KAD KERJA</th>
            <th>NAMA PELANGGAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>NM/JOB/2021-002</td>
            <td>RUMBIA</td>
        </tr>
    </tbody>
</table>
<br>
<table>
    <thead>
        <tr>
            <th></th>
            <th>BIL.</th>
            <th>PROSES</th>
            <th>TEMPOH(DEFAULT)</th>
            <th>TEMPOH(JANGKAAN)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><input type="checkbox"></td>
            <td>1.</td>
            <td>DAFTAR SAMPEL</td>
            <td>3</td>
            <td><input type="text"></td>
        </tr>
    </tbody>
</table>
<button>TAMBAH</button>
<br><br>
<h5>JUMLAH PROSES: 8</h5>
<table>
    <thead>
        <tr>
            <th></th>
            <th>BIL.</th>
            <th>PROSES</th>
            <th>TEMPOH(DEFAULT)</th>
            <th>TEMPOH(JANGKAAN)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><input type="checkbox"></td>
            <td>1.</td>
            <td>DAFTAR SAMPEL</td>
            <td>3</td>
            <td>X</td>
        </tr>
    </tbody>
</table>

<br>
<button>SETERUSNYA</button>
<br>
<br>
<br>
<br>
<br>
<label for="">NAMA PELANGGAN:</label>
<input type="text" name="" id="">
<br>
<label for="">NO PESANAN:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">PUSAT KHIDMAT:</label>
<input type="text" name="" id="">
<br>
<label for="">KHIDMAT:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">KUANTITI:</label>
<input type="text" name="" id="">
<br>
<label for="">UNIT HARGA (RM):</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">AMAUN(RM):</label>
<input type="text" name="" id="">
<br>
<label for="">ITEM:</label>
<input type="text" name="" id="">
<br>

<table>
    <thead>
        <tr>
            <th></th>
            <th>BIL.</th>
            <th>PROSES</th>
            <th>STAF</th>
            <th>TEMPOH(HARI)</th>
            <th>STATUS</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>DAFTAR SAMPEL</td>
            <td>
                <select name="" id="">
                    <option value="">SILA PILIH</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td><input type="checkbox"></td>
        </tr>
        <tr>
            <td>1.</td>
            <td>DAFTAR SAMPEL</td>
            <td>
                <select name="" id="">
                    <option value="">SILA PILIH</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td><input type="checkbox"></td>
        </tr>
    </tbody>
</table>
<br>
<p>*Warna Merah Menandakan Staf Tersebut Mempunyai Kerja Dalam Tangan</p>
<button>KEMASKINI</button>
<h5>SENARAI ALAT YANG DIGUNAKAN :</h5>
<table>
    <thead>
        <tr>
            <th></th>
            <th>BIL.</th>
            <th>NAMA ALAT/MODEL:</th>
            <th>KOD</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>DAFTAR SAMPEL</td>
            <td>X</td>
        </tr>
    </tbody>
</table>
<br>
<h5>SENARAI BAHAN MENTAH YANG DIGUNAKAN :</h5>
<table>
    <thead>
        <tr>
            <th>BIL.</th>
            <th>NAMA ALAT/MODEL:</th>
            <th>KOD</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>DAFTAR SAMPEL</td>
            <td>X</td>
        </tr>
    </tbody>
</table>


</form>
@endsection
