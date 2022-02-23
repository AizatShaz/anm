
@extends('bases')

@section('content') 
<form action="">
    @csrf
      
<h1>KOD PUSAT KHIDMAT</h1>
<br>
<br>
<br>
<table>
    <thead>
        <tr>
            <th></th>
            <th>PUSAT KHIDMAT</th>
            <th>NAMA PENUH</th>
            <th>NAMA LAIN</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>BIL</th>
            <th><input type="text" name="" id=""></th>
            <th><input type="text" name="" id=""></th>
            <th><input type="text" name="" id=""></th>
            <th><button>TAMBAH</button></th>
        </tr>
        <tr>
            <td>1.</td>
            <td>"ACA"</td>
            <td>"MAKMAL"</td>
            <td>"ANALYTIC"</td>
            <td>
                <i class="fas fa-pen"><button></button></i>
                <i class="far fa-trash-alt"><button></button></i>
            </td>
        </tr>
    </tbody>
</table>
<!--PAGES-->
<br>
<br>
<br>
<table>
    <thead>
        <tr>
            <th></th>
            <th>PUSAT KHIDMAT</th>
            <th>NAMA PENUH</th>
            <th>NAMA LAIN</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>BIL</th>
            <th><input type="text" name="" id=""></th>
            <th><input type="text" name="" id=""></th>
            <th><input type="text" name="" id=""></th>
            <th><button>KEMASKINI</button></th>
        </tr>
        <tr>
            <td>1.</td>
            <td>"ACA"</td>
            <td>"MAKMAL"</td>
            <td>"ANALYTIC"</td>
            <td>
                <i class="fas fa-pen"><button></button></i>
                <i class="far fa-trash-alt"><button></button></i>
            </td>
        </tr>
    </tbody>
</table>
<!--PAGES-->
</form>

@endsection
