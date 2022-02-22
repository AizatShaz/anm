
@extends('bases')

@section('content')   
<h1>INVOIS</h1>
<form action="">
    @csrf
    <h5>SENARAI INVOIS</h5>
    <table>
        <thead>
            <tr>
                <th>BIL</th>
                <th>NO. INVOIS</th>
                <th>NAMA PELANGGAN</th>
                <th>TINDAKAN</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1.</td>
                <td>NO. KAD KERJA <br> NM/JOB/2001-0003</td>
                <td>ASTRA</td>
                <td>NOTIFIKASI DAN TINDAKAN</td>
            </tr>
        </tbody>
    </table>
    <br>
    <br>
    <br>
    <br>
    <label for="">NAMA PELANGGAN:</label>
    <input type="text" name="" id="">
    <br>
    <label for="">PUSAT KHIDMAT:</label>
    <input type="text" name="" id="">
    <br>
    <br>
    <label for="">NO. INVOIS:</label>
    <input type="text" name="" id="">
    <br>
    <br>
    <label for="">KHIDMAT:</label>
    <input type="text" name="" id="">
    <br>
    <br>
    <h5>NOTA DEBIT</h5>
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
                <td>FILEM DAN ANALISA DOS</td>
                <td>23</td>
                <td>3,000</td>
                <td>30,000</td>
            </tr>
        </tbody>
    </table>
    <h6>JUMLAH: RM</h6>
    <br>
    <br>
    <br>
    <br>
    <h5>NOTA KREDIT</h5>
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
                <td>FILEM DAN ANALISA DOS</td>
                <td>23</td>
                <td>3,000</td>
                <td>30,000</td>
            </tr>
        </tbody>
    </table>
    <h6>JUMLAH: RM</h6>
    <br>
    <br>
    <h6>DISKAUN(RM)</h6>
    <h6>JUMLAH KESELURUHAN(RM)</h6>
    <br>
    <br>
    <br>
    <h5>STATUS PERMOHONAN INVOIS</h5>
    <br>
    <br>
    <br><table>
        <thead>
            <tr>
                <th>BIL</th>
                <th>STATUS</th>
                <th>TINDAKAN</th>
                <th>NAMA STAF</th>
                <th>CATATAN</th>
                <th>TARIKH</th>
                <th>MASA</th>
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
                <td></td>
            </tr>
        </tbody>
    </table>
    <br>    
    <br>    
    <br>    
    <br>
    <h5>UNTUK DISEMAK OLEH PELULUS</h5>
    <label for="">LULUS:</label>
    <select name="" id="">
        <option value="">SILA PILIH</option>
    </select>
    <br>
    <label for="">CATATAN:</label>
    <textarea name="" id="" cols="30" rows="10"></textarea>
    <br><button>HANTAR</button>



</form>
@endsection
