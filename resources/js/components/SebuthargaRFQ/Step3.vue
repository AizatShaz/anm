<template>
<div>
    <h1 class="mt-4">SEBUTHARGA RFQ</h1>
    <hr>

    <div class="shadow-lg p-3 mb-5 bg-white rounded mb-4">
        <div class="card-body">
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-3 col-form-label">NO. RFQ : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="NM/QUO/2010-10000">
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
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-3 col-form-label">E-MEL : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control-plaintext" id="inputPassword3" placeholder="loremipsum@gmail.com">
                </div>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-5 col-form-label label">LAMPIRAN PERMOHONAN SEBUTHARGA (RFQ) :</label>
        <div class="col-sm-6">
        <label for="inputPassword3" class="col-sm-5 col-form-label labelValue">Lampiran03.docx</label>
        </div>
    </div>

    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">TARIKH : </label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="inputPassword3" placeholder="">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">TARIKH SAH : </label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="inputPassword3" placeholder="">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">CATATAN : </label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="inputPassword3" placeholder="">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-12">
            <button class="btn btn-primary float-end" @click="next">SETERUSNYA</button>
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
