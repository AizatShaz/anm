
@extends('bases')

@section('content')   
<form action="">
    @csrf

<h1> JANA NOTA HANTARAN</h1>
<br>
<br>
<br>
<label for="">NAMA PELANGGAN:</label>
<input type="text" name="" id="">
<br>
<p>ATAU</p>
<br>
<label for="">NO KAD KERJA: NM/JOB</label>
<input type="text" name="" id="">
<p>Cth : NM/JOB/2010-28277</p>
<br>
<br>
<button><i class="bi bi-search"></i>CARIAN</button>

<br>
<h5>CARIAN NAMA PELANGGAN: </h5>
<br>
<br>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>NAMA PELANGGAN</th>
            <th>NO JAD KERJA</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>"NAMA"</td>
            <td>NM/JOB/2010-2012</td>
        </tr>
    </tbody>
</table>
<!--PAGE-->
<br>
<h5>CARIAN UNTUK NO. KAD KERJA :NM/JOB/4009-7747</h5>
<br>
<br>
<br>
<label for="">NO. KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">NO. PESANAN:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">PUSAT KHIDMAT:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">PELANGGAN:</label>
<input type="text" name="" id="">
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>KHIDMAT/PRODUK</th>
            <th>KUANTITI</th>
            <th>UNIT HARGA(RM)</th>
            <th>AMAUN(RM)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>"KHIDMAT"</td>
            <td>23</td>
            <td>20</td>
            <td>240</td>
        </tr>
    </tbody>
</table>
<h5>JUMLAH: RM</h5>
<br>
<button>JANA NOTA HANTARAN</button>
<!--PAGE-->
<!--PAGE-->
<br>
<h5>CARIAN UNTUK NO. KAD KERJA :NM/JOB/4009-7747</h5>
<br>
<br>
<br>
<label for="">NO. KAD KERJA:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">NO. PESANAN:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">PUSAT KHIDMAT:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">PELANGGAN:</label>
<input type="text" name="" id="">
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>KHIDMAT/PRODUK</th>
            <th>KUANTITI</th>
            <th>UNIT HARGA(RM)</th>
            <th>AMAUN(RM)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>"KHIDMAT"</td>
            <td>23</td>
            <td>20</td>
            <td>240</td>
        </tr>
    </tbody>
</table>
<h5>JUMLAH: RM</h5>
<br>
<h4>NOTA HANTARAN TELAH DIJANAKAN</h4>
<h5>NO.NOTA HANTARAN : NM/JOB/4009-7747</h5>
<!--PAGE-->
<!--PAGE-->
<!--PAGE-->
<!--PAGE-->
</form>
@endsection
