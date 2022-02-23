
@extends('bases')

@section('content')   
<h1>KOD PROFIL KAKITANGAN</h1>

<form action="">
        @csrf
        <br>
    <br>
    <br>
    <label for="">NAMA:</label>
    <input type="text" name="" id="">
    <br>
    <label for="">PUSAT KHIDMAT:</label>
    <select name="" id="">
        <option value="">SILA PILIH</option>
    </select>
    <br>
    <br>
    <button>CARIAN</button>
    <button>CARI SEMUA</button>
    <br>
    <button>TAMBAH REKOD </button>

    <br>
    <br>
    <br>
    <table>
        <thead>
            <tr>
                <th>BIL</th>
                <th>NAMA</th>
                <th>TINDAKAN</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1.</td>
                <td>"NAMA"</td>
                <td>
                    <button><i class="far fa-id-badge"></i></button>
                    <button> <i class="fas fa-key"></i></button>
                </td>
            </tr>
        </tbody>
    </table>
    <!--PAGES-->
    <h1>PROFIL PERIBADI</h1>

    <br>
    <br>
    <br>
    <label for="">NAMA:</label>
    <input type="text" name="" id="">
    <br>
    <br>
    <label for="">USERNAME:</label>
    <input type="text" name="" id="">
    <br>
    <label for="">PUSAT KHIDMAT:</label>
    <select name="" id="">
        <option value="">SILA PILIH</option>
    </select>
    <br>
    <br>
    <label for="">TARIKH MULA:</label>
    <input type="text" name="" id="">
    <br>
    <br>
    <label for="">TARIKH TAMAT:</label>
    <input type="text" name="" id="">
    <br>
    <br>
    <button>SIMPAN</button>
    <br>
    <!--PAGES-->
    <!--PAGES-->
    <h1></h1>
        <br>
        <br>
        <br>
        <label for="">NAMA:</label>
        <input type="text" name="" id="">
        <br>
        <br>
        <label for="">USERNAME:</label>
        <input type="text" name="" id="">
        <br>
        <label for="">PUSAT KHIDMAT:</label>
        <select name="" id="">
            <option value="">SILA PILIH</option>
        </select>
        <br>
        <br>
        <label for="">TARIKH MULA:</label>
        <input type="text" name="" id="">
        <br>
        <br>
        <label for="">TARIKH TAMAT:</label>
        <input type="text" name="" id="">
        <br>
        <br>
        <button>SIMPAN</button>
        <br>
        <!--PAGES-->
            <!--PAGES-->
    <h1>SKOP KERJA TAMBAHAN</h1>
    <br>
            <br>
            <br>
            <label for="">PUSAT KHIDMAT:</label>
            <select name="" id="">
                <option value="">SILA PILIH</option>
            </select>
            <br>
            <br>
            <label for="">PUSAT SERVIS:</label>
            <select name="" id="">
                <option value="">SILA PILIH</option>
            </select>
            <br>
            <br>
            <label for="">JENIS PERKHIDMATAN:</label>
            <select name="" id="">
                <option value="">SILA PILIH</option>
            </select>
            <br>
            <br>
            <br>
            <button>TAMBAH</button>
            <br>
            <br>
            <br>
            <table>
                <thead>
                    <tr>
                        <th>BIL</th>
                        <th>JENIS PERKHIDMATAN</th>
                        <th>TINDAKAN</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>"NAMA"</td>
                        <td>
                            <i class="far fa-trash-alt"><button></button></i>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!--PAGES-->
                  <!--PAGES-->
    <h1>PERKHIDMATAN</h1>
    <br>
                  <br>
                  <br>
                  <label for="">NAMA:</label>
                  <input type="text" name="" id="">
                  <br>
                  <br>
                  <label for="">USERNAME:</label>
                  <input type="text" name="" id="">
                  <br>
                  <br>
                  <label for="">PUSAT KHIDMAT:</label>
                  <select name="" id="">
                      <option value="">SILA PILIH</option>
                  </select>
                  <br>
                  <br>
                  <br>
                  <br>
                  <label for="">TARIKH MULA:</label>
                  <input type="text" name="" id="">
                  <br>
                  <br>
                  <label for="">TARIKH TAMAT:</label>
                  <input type="text" name="" id="">
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <button>SIMPAN</button>
                  <br>
                  <br>
                  <br>
                  <table>
                    <thead>
                        <tr>
                            <th>BIL</th>
                            <th>JENIS PERKHIDMATAN</th>
                            <th>TARIKH MULA</th>
                            <th>TARIKH TAMAT</th>
                            <th>TINDAKAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>"NAMA"</td>
                            <td>"21-03-2102"</td>
                            <td>"21-03-2102"</td>
                            <td>
                                <i class="far fa-trash-alt"><button></button></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
    <!--PAGES-->


</form>
@endsection
