<template>
    <div>
        <h1 class="mt-4">PERMOHONAN SEBUTHARGA</h1>
        <hr>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-3 col-form-label">NAMA PELANGGAN :</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="inputPassword3" placeholder="NAMA PELANGGAN">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-3 col-form-label">TAJUK :</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="inputPassword3" placeholder="TAJUK">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-3 col-form-label">CATATAN : </label>
            <div class="col-sm-9">
                <textarea class="form-control"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="formFile" class="form-label col-sm-3">Default file input example</label>
            <div class="col-sm-9">
            <input class="form-control" type="file" id="formFile">
        </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <button class="btn btn-secondary float-start" @click="back">KEMBALI</button>
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
        },
        back() {
            this.$emit('back')
        }
    }
}

</script>
