
@extends('bases')

@section('content')   
<form action="">
    @csrf

<h1>INVOIS</h1>
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
<button>CARIAN</button>
<br>
<br>
<br>
<table>
    <thead>
        <tr>
            <th>BIL.</th>
            <th>NAMA PELANGGAN</th>
            <th>NO. INVOIS</th>
            <th>STATUS BAYARAN</th>
            <th>STATUS INVOIS</th>
            <th>JENIS</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>ASTRA</td>
            <td>20001-200</td>
            <td>PESANAN</td>
            <td>PESANAN</td>
            <td>PESANAN</td>
        </tr>
    </tbody>
</table>
<br>
<!--PAGE-->
<br>
<label for="">NO. INVOIS</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">TARIKH INVOIS</label>
<input type="date" name="" id="">
<br>
<br>
<label for="">NO. PESANAN</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">KEPADA</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">PUSAT KHIDMAT</label>
<input type="text" name="" id="">
<br>
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
<h5>JUMLAH: RM</h5>
<br>
<label for="">CATATAN</label>
<textarea name="" id="" cols="30" rows="10"></textarea>
<br>
<!--PAGE-->
<h5>NOTA DEBIT</h5>
<br>
<button>TAMBAH DEBIT</button>
<br><br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>NO. KAD KERJA</th>
            <th>PERKARA</th>
            <th>AMAUN(RM)</th>
            <th>PUSAT KHIDMAT</th>
            <th>TARIKH</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>
                <select name="" id="">
                    <option value="">SILA PILIH</option>
                </select>
            </td>
            <td></td>
            <td>0.00</td>
            <td>
                <select name="" id="">
                    <option value="">SILA PILIH</option>
                </select>
            </td>
            <td></td>
            <td>
                <i class="fas fa-pen"><button></button></i>
                <i class="far fa-trash-alt"><button></button></i>
            </td>
        </tr>
    </tbody>
</table>
<h5>JUMLAH: RM 0.00</h5>
<!--PAGE-->
<!--PAGE-->
<h5>NOTA DEBIT</h5>
<br>
<button>TAMBAH DEBIT</button>
<br><br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>NO. KAD KERJA</th>
            <th>PERKARA</th>
            <th>AMAUN(RM)</th>
            <th>PUSAT KHIDMAT</th>
            <th>TARIKH</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>
                <select name="" id="">
                    <option value="">SILA PILIH</option>
                </select>
            </td>
            <td></td>
            <td>0.00</td>
            <td>
                <select name="" id="">
                    <option value="">SILA PILIH</option>
                </select>
            </td>
            <td></td>
            <td>
                <i class="fas fa-pen"><button></button></i>
                <i class="far fa-trash-alt"><button></button></i>
            </td>
        </tr>
    </tbody>
</table>
<h5>JUMLAH: RM 0.00</h5>
<!--PAGE-->
<!--PAGE-->
<h5>NOTA KREDIT</h5>
<br>
<button>TAMBAH KREDIT</button>
<br><br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>NO. KAD KERJA</th>
            <th>PERKARA</th>
            <th>AMAUN(RM)</th>
            <th>PUSAT KHIDMAT</th>
            <th>TARIKH</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>
                <select name="" id="">
                    <option value="">SILA PILIH</option>
                </select>
            </td>
            <td></td>
            <td>0.00</td>
            <td>
                <select name="" id="">
                    <option value="">SILA PILIH</option>
                </select>
            </td>
            <td></td>
            <td>
                <i class="fas fa-pen"><button></button></i>
                <i class="far fa-trash-alt"><button></button></i>
            </td>
        </tr>
    </tbody>
</table>
<h5>JUMLAH: RM 0.00</h5>
<!--PAGE-->
<!--PAGE-->
<h5>NOTA KREDIT</h5>
<br>
<label for="">NO. NOTA KREDIT</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">NO. INVOIS</label>
<input type="text" name="" id="">
<br>
<br>
<label for="">KEPADA</label>
<input type="text" name="" id="">
<br>
<button>TAMBAH KREDIT</button>
<br><br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>NO. KAD KERJA</th>
            <th>PERKARA</th>
            <th>AMAUN(RM)</th>
            <th>PUSAT KHIDMAT</th>
            <th>TARIKH</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>
                <select name="" id="">
                    <option value="">SILA PILIH</option>
                </select>
            </td>
            <td></td>
            <td>0.00</td>
            <td>
                <select name="" id="">
                    <option value="">SILA PILIH</option>
                </select>
            </td>
            <td></td>
            <td>
                <i class="fas fa-pen"><button></button></i>
                <i class="far fa-trash-alt"><button></button></i>
            </td>
        </tr>
    </tbody>
</table>
<h5>JUMLAH: RM 0.00</h5>
<!--PAGE-->
<h4>PENGESAHAN INVOIS</h4>
<br>
<label for="">NO. INVOIS:</label>
<input type="text" name="" id="">
<br>
<label for="">PENGESAH INVOIS:</label>
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
            <td>FILEM DAN ANALISA DOS</td>
            <td>23</td>
            <td>3,000</td>
            <td>30,000</td>
        </tr>
    </tbody>
</table>
<h5>JUMLAH: RM </h5>
<br>
<br>
<h5>NOTA DEBIT: </h5>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>NO. KAD KERJA</th>
            <th>PERKARA</th>
            <th>PUSAT KHIDMAT</th>
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
<h5>JUMLAH: RM</h5>
<br><br>
<h5>NOTA KREDIT: </h5>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>NO. KAD KERJA</th>
            <th>PERKARA</th>
            <th>PUSAT KHIDMAT</th>
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
<h5>JUMLAH: RM</h5>
<br>
<br>
<br>
<br>
<label for="">DISKAUN:</label><input type="checkbox" name="" id=""><input type="text" name="" id=""><label for="">% ATAU RM</label><input type="checkbox" name="" id=""><input type="text" name="" id="">
<br>
<br>
<label for="">JUMLAH SELEPAS DISKAUN(RM): RM </label><input type="text" name="" id="">
<br>
<button>INVOIS SELESAI</button>
<!--PAGE-->

<h4>PENGESAHAN INVOIS</h4>
<br>
<label for="">NO. INVOIS:</label>
<input type="text" name="" id="">
<br>
<label for="">PENGESAH INVOIS:</label>
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
            <td>FILEM DAN ANALISA DOS</td>
            <td>23</td>
            <td>3,000</td>
            <td>30,000</td>
        </tr>
    </tbody>
</table>
<h5>JUMLAH: RM </h5>
<br>
<br>
<h5>NOTA DEBIT: </h5>
<br>
<br>
<h3>INVOIS TELAH DISAHKAN</h3>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>NO. KAD KERJA</th>
            <th>PERKARA</th>
            <th>PUSAT KHIDMAT</th>
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
<h5>JUMLAH: RM</h5>
<br><br>
<h5>NOTA KREDIT: </h5>
<br>
<table>
    <thead>
        <tr>
            <th>BIL</th>
            <th>NO. KAD KERJA</th>
            <th>PERKARA</th>
            <th>PUSAT KHIDMAT</th>
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
<h5>JUMLAH: RM</h5>
<br>
<br>
<br>
<br>
<label for="">DISKAUN:</label><input type="checkbox" name="" id=""><input type="text" name="" id=""><label for="">% ATAU RM</label><input type="checkbox" name="" id=""><input type="text" name="" id="">
<br>
<br>
<label for="">JUMLAH SELEPAS DISKAUN(RM): RM </label><input type="text" name="" id="">
<br>
<button>KEMAS KINI INVOIS</button>
<!--PAGE-->
<!--PAGE-->



</form>
@endsection
