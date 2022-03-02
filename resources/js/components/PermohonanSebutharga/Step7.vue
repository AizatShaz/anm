<template>
    <div>
        <h1 class="mt-4">PERMOHONAN SEBUTHARGA</h1>
        <hr>
        <div class="card mb-4">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>KHIDMAT / PRODUK</th>
                            <th>KUANTITI</th>
                            <th>AMAUN</th>
                            <th>JUMLAH</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>TS-1000-4</td>
                            <td>2 x RM0.12</td>
                            <td>RM0.24</td>
                            <td>
                                <a href="#"><i class="bi bi-trash3"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12 text-center">
                <button class="btn btn-primary" @click="submit">HANTAR PERMOHONAN</button>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <button class="btn btn-secondary float-start" @click="back">KEMBALI</button>
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
        back() {
            this.$emit('back')
        },
        submit() {
            this.$emit('back')
        }
    }
}

</script>
