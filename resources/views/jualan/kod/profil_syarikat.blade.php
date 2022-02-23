
@extends('bases')

@section('content')   
<form action="">
    @csrf
    <br>
    <br>
    <br>
    <label for="">NAMA SYARIKAT:</label>
    <input type="text" name="" id="">
    <br>
    <br>
    <label for="">NO SYARIKAT:</label>
    <input type="text" name="" id="">
    <br>
    <label for="">KATEGORI SYARIKAT:</label>
    <select name="" id="">
        <option value="">SILA PILIH</option>
    </select>
    <br>
    <br>
    <button>CARIAN</button>
    <br>
    <button>TAMBAH SYARIKAT BARU</button>

</form>
@endsection
