
@extends('bases')

@section('content')   
<h1>KOD SERVIS PUSAT KHIDMAT</h1>
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
<label for="">JENIS PERKHIDMATAN(BM):</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">JENIS PERKHIDMATAN(BI):</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">CATATAN(BM):</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">CATATAN(BI):</label>
<input type="text" name="" id="">
<br>
<button>TAMBAH</button>
<button>PAPARAN SAHAJA</button>
<br>
<br>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>JENIS KHIDMAT</th>
            <th>CATATAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>"JENIS"</td>
            <td>"CATATAN"</td>
            <td>
                <i class="fas fa-pen"><button></button></i>
                <i class="far fa-trash-alt"><button></button></i>
            </td>
        </tr>
    </tbody>
</table>
<!--PAGES--><br>
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
<label for="">JENIS PERKHIDMATAN(BM):</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">JENIS PERKHIDMATAN(BI):</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">CATATAN(BM):</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">CATATAN(BI):</label>
<input type="text" name="" id="">
<br>
<button>TAMBAH</button>
<button>PAPARAN SAHAJA</button>
<br>
<br>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>JENIS KHIDMAT</th>
            <th>CATATAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>"JENIS"</td>
            <td>"CATATAN"</td>
            <td>
                <i class="fas fa-pen"><button></button></i>
                <i class="far fa-trash-alt"><button></button></i>
            </td>
        </tr>
    </tbody>
</table>
</form>
<!--PAGES-->
<!--PAGES-->

@endsection
