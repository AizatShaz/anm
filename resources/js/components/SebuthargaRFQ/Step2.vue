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

        <div class="card mb-4">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>BIL.</th>
                            <th>NO PERMOHONAN SEBUTHARGA (RFQ)</th>
                            <th>PERKHIDMATAN</th>
                            <th>PUSAT KHIDMAT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>NM/QUO/2010-10000</td>
                            <td>LOREM IPSUM</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
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
