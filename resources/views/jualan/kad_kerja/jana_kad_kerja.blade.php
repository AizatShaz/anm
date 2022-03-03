
@extends('bases')

@section('content')
<form action="">
    @csrf

<h1>JANA KAD KERJA</h1>
<br>
<label for="">NAMA PELANGGAN:</label>
<input type="text" name="" id="">
<br>
<label for="">NO PESANAN:</label>
<input type="text" name="" id="">
<br>
<p>ATAU</p>
<br>
<label for="">NO PERJANJIAN/PESANAN BERJADUAL:</label>
<input type="text" name="" id="">
<br>
<br>
<br>
<button><i class="bi bi-search"></i>CARIAN</button>

<br>
<table>
    <thead>
        <tr>
            <th>BIL.</th>
            <th>NAMA PELANGGAN</th>
            <th>NO. PESANAN/PERJANJIAN</th>
            <th>JENIS</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>ASTRA</td>
            <td>20001-200</td>
            <td>PESANAN</td>
        </tr>
    </tbody>
</table>
<br>
<br>
<label for="">NO PESANAN:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">NAMA PELANGGAN:</label>
<input type="text" name="" id="">
<br>
<h5>PENJANA KAD KERJA: LIM CHENG OII</h5>
<table>
    <thead>
        <tr>
            <th>BIL.</th>
            <th>MAKLUMAT KAD KERJA:</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>
                <br>
                PUSAT KHIDMAT:
                <p style="color: blue">SSDL-MAKMAL STANDARD DOSIMETRI SEKUNDER</p>
                <br>
                KHIDMAT:
                <p style="color: blue">FILEM DAN ANALISA DOS (FILM AND DOSE ANALYSIS)</p>
                <br>
                KUANTITI:
                <p style="color: blue">2</p>
                <br>
                UNIT HARGA (RM):
                <p style="color: blue">0.00</p>
                <br>
                AMAUN (RM):
                <p style="color: blue">SSDL-MAKMAL STANDARD DOSIMETRI SEKUNDER</p>
                <br>
                ITEM TAMBAHAN:
                <p style="color: blue">ITEM 5</p>
                <br>
                JUMLAH (RM):
                <p style="color: blue">0.00</p>
                <br>
            </td>
            <td>
                <label for="">TARIKH INVOIS:</label>
                <br>
                <input type="date">
            </td>
        </tr>
    </tbody>
</table>
<br>
<br>
<button>JANA KAD KERJA</button>
<br>

<br>
<br>
<label for="">NO PESANAN:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">NAMA PELANGGAN:</label>
<input type="text" name="" id="">
<br>
<h5>PENJANA KAD KERJA: LIM CHENG OII</h5>
<table>
    <thead>
        <tr>
            <th>BIL.</th>
            <th>MAKLUMAT KAD KERJA:</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>
                <br>
                PUSAT KHIDMAT:
                <p style="color: blue">SSDL-MAKMAL STANDARD DOSIMETRI SEKUNDER</p>
                <br>
                KHIDMAT:
                <p style="color: blue">FILEM DAN ANALISA DOS (FILM AND DOSE ANALYSIS)</p>
                <br>
                KUANTITI:
                <p style="color: blue">2</p>
                <br>
                UNIT HARGA (RM):
                <p style="color: blue">0.00</p>
                <br>
                AMAUN (RM):
                <p style="color: blue">SSDL-MAKMAL STANDARD DOSIMETRI SEKUNDER</p>
                <br>
                ITEM TAMBAHAN:
                <p style="color: blue">ITEM 5</p>
                <br>
                JUMLAH (RM):
                <p style="color: blue">0.00</p>
                <br>
            </td>
            <td>
                <p style="color: blue">KAD KERJA TELAH DIJANA</p><br>
                <p>NO. INVOIS:</p>
                <br>
                <p style="color: blue">NM/INV/2011-0002</p><br>
                <p>PENERIMA KAD KERJA:</p>
                <br>
                <p style="color: blue">LIM WAN TAN</p><br>
            </td>
        </tr>
    </tbody>
</table>
</form>

@endsection
