<template>
<div class="row">
    <div class="col-8">
        <h1>Pro Forma</h1>
        <hr>
        <form class="">
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-3 col-form-label">NAMA PELANGGAN</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="staticEmail" value="email@example.com">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-3 col-form-label">STATUS ABT</label>
                <div class="col-sm-9">
                    <select class="form-select">
                        <option>Alpha</option>
                        <option>Bravo</option>
                        <option>Charlie</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-3 col-form-label">NO. INVOIS PRO FORMA : NM/PRO/</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" id="inputPassword">
                    <div class="text-end">
                        <span class="text-muted">*Cth : NM/RFQ/6588</span>
                    </div>
                </div>
            </div>
            <div class="text-end">
                <button class="btn btn-primary"><i class="bi bi-search"></i> CARIAN</button>
            </div>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">BIL.</th>
                    <th scope="col">NAMA PELANGGAN</th>
                    <th scope="col">STATUS ABT</th>
                    <th scope="col">TINDAKAN</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>ATRA</td>
                    <td>NM/PRO/6588</td>
                    <td>ABT</td>
                    <td>
                        <a href="#"><i class="bi bi-printer"></i></a>
                        <a href="#"><i class="bi bi-trash3"></i></a>
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