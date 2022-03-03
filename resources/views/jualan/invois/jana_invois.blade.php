
@extends('bases')

@section('content')   
<form action="">
    @csrf

<h1>JANA INVOIS</h1>
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
<p>ATAU</p>
<br>
<label for="">NO. KAD KERJA: NM/JOB/:</label>
<input type="text" name="" id="">
<br>
<p>*Cth : NM/JOB/2010-28277</p>
<br>
<button><i class="bi bi-search"></i>CARIAN</button>

<br>
<br>
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
<br>
<label for="">NO. SEBUTHARGA:</label>
<input type="text" name="" id="">
<br>
<label for="">NO PESANAN:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">NO PRO FORMA:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">NAMA PELANGGAN:</label>
<input type="text" name="" id="">
<br>
<br>
<h5>PENJANA KAD KERJA : RODZLIN</h5>
<br>
<table>
    <thead>
        <tr>
            <th>BIL.</th>
            <th>MAKLUMAT KAD KERJA:</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>
                NO. KAD KERJA:
                <p style="color: blue">NM/JOB/2001-0003</p>
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
        </tr>
    </tbody>
</table>
<p>TINDAKAN</p>
<br>
<br>
<label for="">TARIKH INVOIS:</label>
<input type="date">
<button>JANA INVOIS</button>
<br>
<label for="">KAD KERJA LULUS</label>
<input type="checkbox">
<br>
<br>
<label for="">NO. SEBUTHARGA:</label>
<input type="text" name="" id="">
<br>
<label for="">NO PESANAN:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">NO PRO FORMA:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">NAMA PELANGGAN:</label>
<input type="text" name="" id="">
<br>
<table>
    <thead>
        <tr>
            <th>BIL.</th>
            <th>MAKLUMAT KAD KERJA:</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>
                NO. KAD KERJA:
                <p style="color: blue">NM/JOB/2001-0003</p>
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
        </tr>
    </tbody>
</table>
<p>TINDAKAN</p>
<br>
<br>
<label for="">TARIKH INVOIS:</label>
<br>
<input type="date">
<br>
<button>JANA INVOIS</button>
<br>

<table>
    <thead>
        <tr>
            <th>BIL.</th>
            <th>MAKLUMAT KAD KERJA:</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>
                NO. KAD KERJA:
                <p style="color: blue">NM/JOB/2001-0003</p>
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
        </tr>
    </tbody>
</table>
<p>TINDAKAN</p>
<br>
<p style="color: blue">INVOIS TELAH DIJANA</p><br>
<br>
<br>
<p>NO. INVOIS:</p>
<br>
<p style="color: blue">NM/INV/2011-0002</p><br>
<br>
<br>
</form>

@endsection
