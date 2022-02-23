
@extends('bases')

@section('content')   
<h1>KOD PROFIL SYARIKAT</h1>
<h1>CARIAN PROFIL SYARIKAT</h1>
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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <table>
        <thead>
            <tr>
                <th>BIL</th>
                <th>NAMA</th>
                <th>NO. SYARIKAT</th>
                <th>TINDAKAN</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1.</td>
                <td>""</td>
                <td>""</td>
                <td>
                    <button><i class="far fa-pen"></i></button>
                    <button> <i class="far fa-trash-alt"></i></button>
                </td>
            </tr>
        </tbody>
    </table>
    <!--PAGES-->
</form>
<form action="">
    @csrf
<h1>TAMBAH PROFIL SYARIKAT</h1>
    <br>
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
    
    <br>
    <label for="">NAMA SYARIKAT:</label>
    <input type="text" name="" id="">


    <br>
    <button>CARIAN</button>
    <br>
    <button>TAMBAH SYARIKAT BARU</button>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <table>
        <thead>
            <tr>
                <th>BIL</th>
                <th>NAMA</th>
                <th>NO. SYARIKAT</th>
                <th>TINDAKAN</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1.</td>
                <td>""</td>
                <td>""</td>
                <td>
                    <button><i class="far fa-pen"></i></button>
                    <button> <i class="far fa-trash-alt"></i></button>
                </td>
            </tr>
        </tbody>
    </table>
    <!--PAGES-->
</form>
@endsection
