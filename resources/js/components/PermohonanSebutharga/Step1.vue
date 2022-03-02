<template>
    <div>
        <h1 class="mt-4">PERMOHONAN SEBUTHARGA</h1>
        <hr>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-3 col-form-label">JENIS PERMOHONAN :</label>
            <div class="col-sm-9">
                <select class="form-select">
                    <option>PERMOHONAN DALAMAN</option>
                    <option>PERMOHONAN LUAR</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-3 col-form-label">Nama :</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="inputPassword3" placeholder="NAMA">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-3 col-form-label">NO. TELEFON :</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="inputPassword3" placeholder="NO. TELEFON">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-3 col-form-label">CATATAN : </label>
            <div class="col-sm-9">
                <textarea class="form-control"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-9">
                <p>*Untuk khidmat PDC/PIA sila nyatakan unit/bhg, no telefon, e-mel, nama &
                    e-mel penyelia, serta keterangan ringkas khidmat dipohon.</p>
                <p>*Sila nyatakan lokasi alat jika melibatkan pembaikan & penyelenggaraan alat.</p>
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
