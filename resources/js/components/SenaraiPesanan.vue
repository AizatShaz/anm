<template>
<div class="row">
    <div class="col-8">
        <h1>SENARAI PESANAN</h1>
        <hr>
        <form class="">
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-3 col-form-label">NAMA PELANGGAN</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="staticEmail" value="email@example.com">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-3 col-form-label">STATUS</label>
                <div class="col-sm-9">
                    <select class="form-select">
                        <option>SILA PILIH</option>
                        <option>SILA PILIH</option>
                        <option>SILA PILIH</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-3 col-form-label">NO. PESANAN</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" id="inputPassword">
                </div>
            </div>
            <div class="text-end">
                <button class="btn btn-primary"><i class="bi bi-search"></i> CARIAN</button>
            </div>
        </form>

        <form class="">
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-3 col-form-label">JENIS PESANAN</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control-plaintext" id="staticEmail" value="LOREM IPSUM">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-3 col-form-label">NO. PESANAN</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control-plaintext" id="staticEmail" value="12345">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-3 col-form-label">NO. SEBUTHARGA</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control-plaintext" value="67890">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-3 col-form-label">NAMA PELANGGAN : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control-plaintext" value="LOREM IPSUM">
                </div>
            </div>
            <div class="text-end">
                <button class="btn btn-primary"><i class="bi bi-search"></i> CARIAN</button>
            </div>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">BIL.</th>
                    <th scope="col">NAMA PELANGGAN</th>
                    <th scope="col">NO. PESANAN</th>
                    <th scope="col">STATUS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>HEALA</td>
                    <td>PO-0098</td>
                    <td>BARU</td>
                    <td>
                        <a href="#"><i class="bi bi-printer"></i></a>
                        <a href="#"><i class="bi bi-trash3"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">TINDAKAN</th>
                    <th scope="col">NAMA STAF</th>
                    <th scope="col">CATATAN</th>
                    <th scope="col">TARIKH</th>
                    <th scope="col">MASA</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>KEMASUKAN</td>
                    <td>YA</td>
                    <td>LOREM IPSUM</td>
                    <td></td>
                    <td>17-10-2021</td>
                    <td>
                        14:44:54
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>KEMASUKAN</td>
                    <td>YA</td>
                    <td>LOREM IPSUM</td>
                    <td></td>
                    <td>17-10-2021</td>
                    <td>
                        14:44:54
                    </td>
                </tr>
            </tbody>
        </table>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NAMA KHIDMAT / PRODUK</th>
                    <th scope="col">KUANTITI</th>
                    <th scope="col">UNIT HARGA (RM)</th>
                    <th scope="col">AMAUN (RM)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>
                        <span>
                            SSDL-MAKMAL STANDARD DOSIMETRI
                        SEKUNDER SUPPLY & EVALUATION OF
                        PERSONAL DOSIMETER- PERKHIDMATAN FILEM
                        FILEM DAN ANALISA DOS (FILM AND DOSE ANALYSIS)
                        </span>
                    </td>
                    <td>12</td>
                    <td>20.00</td>
                    <td>240.00</td>
                </tr>
            </tbody>
        </table>
        <div class="p-3  d-flex justify-content-end">
            <div class="mb-3 row justify-content-end">
                <label for="inputPassword" class="col-sm-5 col-form-label">JUMLAH KESELURUHAN : RM</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" value="LOREM IPSUM">
                </div>
            </div>
        </div>
        <div class="p-3 d-flex justify-content-between">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropA">KEMASKINI PERMOHONAN</button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">BATAL PERMOHONAN</button>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">KEMASKINI PERMOHONAN</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-4 col-form-label">JENIS PESANAN : </label>
                            <div class="col-sm-8">
                                <select class="form-select">
                                    <option>SILA PILIH</option>
                                    <option>SILA PILIH</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-4 col-form-label">NO. PESANAN</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" value="" id="inputPassword">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-4 col-form-label">TARIKH PESANAN</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" value="" id="inputPassword">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-4 col-form-label">NO. SEBUTHARGA</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" value="" id="inputPassword">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-4 col-form-label">NAMA PELANGGAN</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" value="" id="inputPassword">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-4 col-form-label">ALAMAT</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" rows="4"></textarea>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-4 col-form-label">UNTUK PERHATIAN</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" value="" id="inputPassword">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-4 col-form-label">NO. TELEFON BIMBIT</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" value="" id="inputPassword">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-4 col-form-label">E-MEL</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" value="" id="inputPassword">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-8">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Sila Tanda Jika Maklumat Penghantaran Sama dengan Diatas
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary"><i class="bi bi-file-plus"></i>SIMPAN</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdropA" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">BATAL PERMOHONAN</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5>MAKLUMAT PESANAN</h5>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-4 col-form-label">JENIS PESANAN</label>
                            <div class="col-sm-8">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-4 col-form-label">NO. PESANAN</label>
                            <div class="col-sm-8">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="123456">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-4 col-form-label">NO. SEBUTHARGA</label>
                            <div class="col-sm-8">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="789012">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-4 col-form-label">NAMA PELANGGAN</label>
                            <div class="col-sm-8">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="LOREM IPSUM">
                            </div>
                        </div>

                        <h5>NYATAKAN SEBAB-SEBAB BATAL :</h5>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-4 col-form-label"> CATATAN</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" rows="4"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">HANTAR</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>