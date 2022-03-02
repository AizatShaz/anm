<template>
    <div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-3 col-form-label">NAMA PELANGGAN :</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="inputPassword3" placeholder="NAMA">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-3 col-form-label">NO. PESANAN :</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="inputPassword3" placeholder="NO. TELEFON">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-3 col-form-label">NO. PERJANJIAN / PESANAN BERJADUAL : </label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="inputPassword3" placeholder="NO. TELEFON">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <button class="btn btn-primary float-end" @click="next">SETERUSNYA</button>
            </div>
        </div>
         <div class="shadow-lg p-3 mb-5 bg-white rounded">
           <div class="card-body">
                <table class="table table-responsive ">
                    <thead>
                        <tr>
                            <th>Bil</th>
                            <th>NAMA</th>
                            <th>NO. PESANAN / PERJANJIAN</th>
                            <th>JENIS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><span class="labelValue">RUMBIA</span></td>
                            <td><span class="labelValue">TEST22</span></td>
                            <td><span class="labelValue">PESANAN</span></td>
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
