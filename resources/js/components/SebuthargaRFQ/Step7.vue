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

    <div class="row">
        <div class="col-9 offset-3 text-center">
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-3 col-form-label fw-bold">NO. SEBUTHARGA :</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control-plaintext" id="inputPassword3" placeholder="NM/QUO/2010-10000">
                </div>
            </div>
        </div>
    </div>

    <p class="fw-medium">MAKLUMAT SEBUTHARGA</p>
    <div class="card mb-4">
        <div class="card-body">
            <p class="fw-medium">SEBUTHARGA</p>
            <p class="fw-bold">1) “NAMA PERKHIDMATAN”</p>
            <div class="d-flex flex-column align-items-end">
                <div class="col-6 form-group row">
                    <label for="inputPassword3" class="col-sm-5 col-form-label fw-bold">JUMLAH :  RM</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="">
                    </div>
                </div>
                <div class="col-6 form-group row">
                    <label for="inputPassword3" class="col-sm-5 col-form-label fw-bold">DISKAUN : RM</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-end">
        <div class="col-10">
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-6 col-form-label fw-bold">JUMLAH SETELAH DISKAUN (RM) :</label>
                <div class="col">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="00.00">
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <p class="fw-medium">SYARAT</p>
            <p class="fw-bold">BERPENGALAMAN DUA TAHUN</p>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-12">
            <button class="btn btn-primary float-end" @click="next">JANA SEBUTHARGA</button>
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
