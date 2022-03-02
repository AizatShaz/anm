<template>
    <div>
        <h1 class="mt-4">SEBUTHARGA RFQ</h1>
        <hr>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-4 col-form-label">NAMA PELANGGAN :</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="inputPassword3" placeholder="NAMA">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-4 col-form-label">NO PERMOHONAN SEBUTHARGA : NM/RFQ/ :</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="inputPassword3" placeholder="NO. TELEFON">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <button class="btn btn-primary float-end" @click="next">CARIAN</button>
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
