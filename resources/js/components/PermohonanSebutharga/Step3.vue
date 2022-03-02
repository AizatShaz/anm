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
                            <td>
                                <span class="text-primary">TS-1000-4</span>
                                <span class="text-primary">IRRADIATION - KHIDMAT PENYINARAN TIUB KECUT HABA</span>
                            </td>
                            <td>
                                <input type="" name="" class="form-control">
                            </td>
                            <td>RM0.12 /mete </td>
                            <td>RM <input type="" name="" class="form-control"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>BIL</th>
                            <th>CAJ-CAJ LAIN</th>
                            <th>AMAUN</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td>1.</td>
                          <td></td>
                          <td></td>
                          <td>
                        <a href="#"><i class="bi bi-trash3"></i></a>
                          </td>
                        </tr>
                    </tbody>
                </table>
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
        back(){
        	this.$emit('back')
        }
    }
}

</script>
