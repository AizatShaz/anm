<template>
<div>
    <h1 class="mt-4">SEBUTHARGA RFQ</h1>
    <hr>

    <div class="card mb-4">
        <div class="card-body">
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-3 col-form-label">NO. RFQ : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control-plaintext" id="inputPassword3" placeholder="NM/QUO/2010-10000">
                </div>
            </div>
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

    <p class="fw-medium">MAKLUMAT SEBUTHARGA</p>
    <div class="card mb-4">
        <div class="card-body">
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-3 col-form-label">PUSAT KHIDMAT :</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control-plaintext" id="inputPassword3" placeholder="SSDL-MAKMAL STANDARD DOSIMETRI SEKUNDER">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-3 col-form-label">JENIS PERKHIDMATAN : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control-plaintext" id="inputPassword3" placeholder="SUPPLY & EVALUATION OF PERSONAL DOSIMETER-
PERKHIDMATAN FILEM">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-3 col-form-label">KHIDMAT / PRODUK : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control-plaintext" id="inputPassword3" placeholder="FILEM DAN ANALISA DOS (FILM AND DOSE ANALYSIS)">
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-end">
        <p>JUMLAH REKOD : </p> <b>1</b>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <p class="fw-medium">SYARAT</p>
            <p class="fw-bold">BERPENGALAMAN DUA TAHUN</p>
        </div>
    </div>

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
