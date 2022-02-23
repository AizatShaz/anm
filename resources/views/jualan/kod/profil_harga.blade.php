
@extends('bases')

@section('content')   
<h1>KOD PROFIL HARGA</h1>
<form action="">
    @csrf
    <br>
<br>
<label for="">PUSAT KHIDMAT:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">KATEGORI PERKHIDMATAN:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<br>
<br>
<label for="">KHIDMAT/PRODUK (BM):</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">KHIDMAT/PRODUK (BI):</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">KADAR HARGA(RM):</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<label for="">HARGA(RM):</label>
<input type="text" name="" id="">
<label for="">SUKATAN KUANTITI:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">CATATAN:</label>
<textarea name="" id="" cols="30" rows="10"></textarea>
<br>
<button>KEMASKINI</button>
<button>PAPARAN SAHAJA</button>
<br>
<br>
<h5>JUMLAH REKOD</h5>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>KHIDMAT/PRODUK</th>
            <th>HARGA (RM)</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>"NAMA"</td>
            <td>"34"</td>
            <td>
                <i class="fas fa-pen"><button></button></i>
                <i class="far fa-trash-alt"><button></button></i>
                <button>DETAIL</button>
                <button>SPESIFIKASI</button>
                <button>SYARAT</button>
            </td>
        </tr>
    </tbody>
</table>
<br>
<button>P</button>

<!--PAGES-->
<h1>DETAIL</h1>
<br>
<br>
<label for="">PUSAT KHIDMAT:</label>
<input type="text" name="" id="">

<br>
<br>
<label for="">KATEGORI PERKHIDMATAN:</label>
<input type="text" name="" id="">

<br>
<br>
<label for="">KHIDMAT/PRODUK:</label>
<input type="text" name="" id="">
<br>
<br>
<br>
<br>
<label for="">PERKARA (BM):</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">PERKARA (BI):</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">AMAUN(RM):</label>
<input type="text" name="" id="">


<br>
<br>
<label for="">FLAG WAJIB:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<label for="">PUSAT KHIDMAT:</label>
<select name="" id="">
    <option value="">SILA PILIH</option>
</select>
<br>
<br>
<button>TAMBAH</button>
<button>PAPARAN SAHAJA</button>
<br>
<br>
<h5>JUMLAH REKOD</h5>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>PERKARA</th>
            <th>AMAUN (RM)</th>
            <th>FLAGWAJIB</th>
            <th>PUSAT KHIDMAT</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>"NAMA"</td>
            <td>"34"</td>
            <td>"NAMA"</td>
            <td>"NAMA"</td>
            <td>
                <i class="fas fa-pen"><button></button></i>
                <i class="far fa-trash-alt"><button></button></i>
            </td>
        </tr>
    </tbody>
</table>
<br>
<!--PAGES-->

<!--PAGES-->
<h1>SPESIFIKASI</h1>
<br>
<br>
<label for="">PUSAT KHIDMAT:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">JENIS PERKHIDMATAN:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">KHIDMAT/PRODUK:</label>
<input type="text" name="" id="">
<br>
<br>
<br>
<br>
<label for="">SPESIFIKASI TAMBAHAN (BM):</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">SPESIFIKASI TAMBAHAN (BI):</label>
<input type="text" name="" id="">
<br>
<br>
<br>
<button>TAMBAH</button>
<button>PAPARAN SAHAJA</button>
<br>
<br>
<h5>JUMLAH REKOD</h5>
<br>
<!--PAGES-->

<!--PAGES-->
<h1>SYARAT</h1>
<br>
<br>
<label for="">PUSAT KHIDMAT:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">JENIS PERKHIDMATAN:</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">KHIDMAT/PRODUK:</label>
<input type="text" name="" id="">
<br>
<br>
<br>
<br>
<label for="">SYARAT (BM):</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">SYARAT (BI):</label>
<input type="text" name="" id="">
<br>
<br>
<br>
<button>TAMBAH</button>
<button>PAPARAN SAHAJA</button>
<br>
<br>
<h5>JUMLAH REKOD</h5>
<br>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>SYARAT</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>"NAMA"</td>
            <td>
                <i class="fas fa-pen"><button></button></i>
                <i class="far fa-trash-alt"><button></button></i>
            </td>
        </tr>
    </tbody>
</table>
<br>
</form>
<!--PAGES-->
<!--PAGES-->

@endsection
