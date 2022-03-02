<template>
<div class="row">
    <div class="col-8">
        <h1>JANA PRO FORMA</h1>
        <hr>
        <form class="shadow p-3 rounded">
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-3 col-form-label">NO. PESANAN</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control-plaintext" id="staticEmail" value="12345">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-3 col-form-label">NAMA PELANGGAN : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control-plaintext" id="staticEmail" value="LOREM IPSUM">
                </div>
            </div>
        </form>

        <table class="table shadow rounded mt-3">
            <thead>
                <tr>
                    <th scope="col">BIL.</th>
                    <th scope="col">MAKLUMAT PESANAN</th>
                    <th scope="col">TINDAKAN</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc cursus pellentesque </td>
                    <td>
                        <button class="btn btn-primary">JANAKAN PRO FORMA</button>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table shadow rounded mt-3">
            <thead>
                <tr>
                    <th scope="col">BIL.</th>
                    <th scope="col">MAKLUMAT PESANAN</th>
                    <th scope="col">TINDAKAN</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc cursus pellentesque </td>
                    <td class="d-flex flex-column justify-content-center align-items-center">
                        <span>PRO FORMA TELAH DIJANA :</span>
                        <span>NO PRO FORMA :</span>
                        <span>NM/PRO/775</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</template>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>