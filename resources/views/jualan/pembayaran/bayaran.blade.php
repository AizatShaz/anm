
@extends('bases')

@section('content')
   <form action="">
       @csrf

<h1>PEMBAYARAN</h1>
<br>
<br>
<br>
<label for="">NAMA PELANGGAN:</label>
<input type="text" name="" id="">
<br>
<label for="">NO INVOIS: NM/INV/</label>
<input type="text" name="" id="">
<p> Cth : NM/INV/330-00001</p>
<br>
<p>ATAU</p>
<br>
<label for="">NO INVOIS PRO FORMA: NM/PRO/</label>
<input type="text" name="" id="">
<p>Cth : NM/PRO/2010-28277</p>
<br>
<br>
<button>CARIAN</button>
<br>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>NAMA PELANGGAN</th>
            <th>NO. INVOIS/PRO FORMA</th>
            <th>JUMLAH(RM)</th>
            <th>BAKI(RM)</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>NAMA PELANGGAN</td>
            <td>NM/PRO/200-00001</td>
            <td></td>
            <td></td>
            <td><button>BAYAR</button></td>
        </tr>
    </tbody>
</table>
<!--PAGES-->
<br>
<br>

<label for="">NO INVOIS: NM/INV/</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">TARIKH INVOIS:</label>
<input type="date" name="" id="">
<br>
<br>
<label for="">PELANGGAN:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">JUMLAH INVOIS(RM):</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">BAKI BAYARAN(RM):</label>
<input type="text" name="" id="">
<br>

<br>
<label for="">TARIKH BAYAR:</label>
<input type="date" name="" id="">
<br>
<br>
<label for="">PILIHAN BAYARAN:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">NAMA BANK:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">NO. CEK/RUJUKAN:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">NO. RESIT:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">JUMLAH(RM):</label>
<input type="text" name="" id="">
<br>
<button>BAYARAN</button>
<br>
<p>*Sila Lakukan Pengesahan Dengan Mengklik Ikon(V) Untuk Memastikan Jumlah Bayaran Ditambah</p>
<br>
<br>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>TARIKH</th>
            <th>PILIHAN BAYARAN</th>
            <th>NAMA BANK</th>
            <th>CEK/RUJ</th>
            <th>RESIT</th>
            <th>JUMLAH(RM)</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                 {{-- <i class="fas fa-pen"><button></button></i>
                <i class="far fa-trash-alt"><button></button></i> --}}
            </td>
        </tr>
    </tbody>
</table>
<br><h5>JUMLAH BAYARAN(RM)</h5>

<!--PAGES-->
<!--PAGES-->
<br>
<br>

<label for="">NO INVOIS: NM/INV/</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">TARIKH INVOIS:</label>
<input type="date" name="" id="">
<br>
<br>
<label for="">PELANGGAN:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">JUMLAH INVOIS(RM):</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">BAKI BAYARAN(RM):</label>
<input type="text" name="" id="">
<br>

<br>
<label for="">TARIKH BAYAR:</label>
<input type="date" name="" id="">
<br>
<br>
<label for="">PILIHAN BAYARAN:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">NAMA BANK:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">NO. CEK/RUJUKAN:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">NO. RESIT:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">JUMLAH(RM):</label>
<input type="text" name="" id="">
<br>
<button>BAYARAN</button>
<br>
<p>*Sila Lakukan Pengesahan Dengan Mengklik Ikon(V) Untuk Memastikan Jumlah Bayaran Ditambah</p>
<br>
<br>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>TARIKH</th>
            <th>PILIHAN BAYARAN</th>
            <th>NAMA BANK</th>
            <th>CEK/RUJ</th>
            <th>RESIT</th>
            <th>JUMLAH(RM)</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>20-21-2022</td>
            <td>TUNAI</td>
            <td>CIMB</td>
            <td>ML019</td>
            <td>1123</td>
            <td>500</td>
            <td>
                 <i class="fas fa-pen"><button></button></i>
                <i class="far fa-trash-alt"><button></button></i>
                <input type="checkbox" name="" id="">
            </td>
        </tr>
    </tbody>
</table>
<br>
<h5>JUMLAH BAYARAN(RM)</h5>

<!--PAGES-->
<!--PAGES-->
<br>
<br>

<label for="">NO INVOIS: NM/INV/</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">TARIKH INVOIS:</label>
<input type="date" name="" id="">
<br>
<br>
<label for="">PELANGGAN:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">JUMLAH INVOIS(RM):</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">BAKI BAYARAN(RM):</label>
<input type="text" name="" id="">
<br>

<br>
<label for="">TARIKH BAYAR:</label>
<input type="date" name="" id="">
<br>
<br>
<label for="">PILIHAN BAYARAN:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">NAMA BANK:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">NO. CEK/RUJUKAN:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">NO. RESIT:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">JUMLAH(RM):</label>
<input type="text" name="" id="">
<br>
<button>BAYARAN</button>
<br>
<p>*Sila Lakukan Pengesahan Dengan Mengklik Ikon(V) Untuk Memastikan Jumlah Bayaran Ditambah</p>
<br>
<br>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>TARIKH</th>
            <th>PILIHAN BAYARAN</th>
            <th>NAMA BANK</th>
            <th>CEK/RUJ</th>
            <th>RESIT</th>
            <th>JUMLAH(RM)</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>20-21-2022</td>
            <td>TUNAI</td>
            <td>CIMB</td>
            <td>ML019</td>
            <td>1123</td>
            <td>500</td>
            <td>
                <p style="color: green">SAH</p>
            </td>
        </tr>
    </tbody>
</table>
<br><h5>JUMLAH BAYARAN(RM)</h5>

<!--PAGES-->
<!--PAGES-->
<!--PAGES-->
<!--PAGES-->
   </form>
@endsection
