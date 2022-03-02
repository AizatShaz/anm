<template>
<div>
    <h1 class="mt-4">SEBUTHARGA RFQ</h1>
    <hr>

    <h5>MAKLUMAT SEBUTHARGA</h5>
    <div class="d-flex justify-content-end">
        <p>JUMLAH KHIDMAT / PRODUK : </p> <b>1</b>
    </div>

    <div class="form-group row">
        <div class="col-sm-12 text-start">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">SEBUTHARGA</button>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>BIL.</th>
                        <th>NAMAKHIDMAT / PRODUK</th>
                        <th>KUANTITI</th>
                        <th>UNIT HARGA (RM)</th>
                        <th>AMAUN (RM)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>100</td>
                        <td>300.00</td>
                        <td>30000.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-4 text-start">
            <button class="btn btn-primary" @click="next">HAPUS</button>
        </div>
        <div class="col-8 text-end">
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-3 col-form-label">JUMLAH SETIAP PERKHIDMATAN (RM) :</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="30000.00">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-3 col-form-label">JUMLAH KESELURUHAN (RM) :</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="LOREM IPSUM">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-3 col-form-label">DISKAUN :</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-3 col-form-label">JUMLAH SELEPAS DISKAUN (RM) : RM</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p calss="fw-bold">TAMBAH PESANAN</p>
                    <div class="col-8 offset-2">
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">PUSAT KHIDMAT : </label>
                            <div class="col-sm-9">
                                <select class="form-select">
                                    <option>SILA PILIH</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">JENIS PERKHIDMATAN : </label>
                            <div class="col-sm-9">
                                <select class="form-select">
                                    <option>SILA PILIH</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <p calss="fw-bold">ANALISIS UNSUR-UNSUR</p>

                    <h5>SENARAI HARGA KHIDMAT YANG DITAWARKAN</h5>
                    <div class="card mb-4">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>BIL.</th>
                                        <th>NAMAKHIDMAT / PRODUK</th>
                                        <th>KUANTITI</th>
                                        <th>UNIT HARGA (RM)</th>
                                        <th>AMAUN (RM)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-6 text-start">
            <button class="btn btn-primary" @click="next">KEMBALI</button>
        </div>
        <div class="col-sm-6 text-end">
            <button class="btn btn-primary" @click="next">SETERUSNYA</button>
        </div>
    </div>
</div>
</template>
<script>
export default {
    mounted() {
        console.log('Component mounted.')
    },
    methods: {
        next() {
            this.$emit('next')
        }
    }
}

</script>
