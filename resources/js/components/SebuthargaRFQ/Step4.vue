<template>
<div>
    <h1 class="mt-4">SEBUTHARGA RFQ</h1>
    <hr>

    <div class="card mb-4">
        <div class="card-body">
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-3 col-form-label">NAMA PELANGGAN : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control-plaintext" id="inputPassword3" placeholder="LOREM IPSUM">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-3 col-form-label">ALAMAT PELANGGAN : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control-plaintext" id="inputPassword3" placeholder="202-A BUKIT RAFFLESIA, TAMAN BUNGA ROGAYAH, SELANGOR DARUL EHSAN.">
                </div>
            </div>
        </div>
    </div>

    <h5>MAKLUMAT PERMOHONAN SEBUTHARGA</h5>
    <div class="d-flex justify-content-end">
        <p>JUMLAH KHIDMAT / PRODUK : </p> <b>1</b>
    </div>

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

    <div class="form-group row">
        <div class="col-sm-12">
            <button class="btn btn-primary float-end" @click="next">TAMBAH</button>
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
