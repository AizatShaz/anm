<template>
    <div>
        <div class="shadow-lg p-3 mb-5 bg-white rounded">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-3">
                        <span class="label">NO. PESANAN :</span>
                    </div>
                    <div class="col-md-3">
                        <span class="labelValue">12345</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-3">
                        <span class="label">NAMA PELANGGAN : </span>
                    </div>
                    <div class="col-md-3">
                        <span class="labelValue">Lorem</span>
                    </div>
                </div>
            </div>
        </div>
        <span class="label">PENJANA KAD KERJA :</span>
        <span class="labelValue">LIM CHENG OII</span>
        <div class="shadow-lg p-3 mb-5 bg-white rounded mt-4">
            <div class="card-body">
                <table class="table table-responsive ">
                    <thead>
                        <tr>
                            <th>Bil</th>
                            <th>BilMAKLUMAT PESANAN</th>
                            <th>TINDAKAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <span class="label">PUSAT KHIDMAT :</span>
                                <span class="labelValue">
                                    SSDL-MAKMAL STANDARD
                                    DOSIMETRI SEKUNDER
                                </span>
                            </td>
                            <td>
                                <span class="label">PENERIMA KAD KERJA :</span>
                                <select class="form-select">
                                    <option>ABC</option>
                                </select>
                            </td>
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
