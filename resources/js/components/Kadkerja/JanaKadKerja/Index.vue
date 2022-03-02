<template>
    <div>
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">JANA KAD KERJA</a></li>
                <li class="breadcrumb-item active" aria-current="page">MAKLUMAT PESANAN</li>
            </ol>
        </nav>
        <h1 class="mt-4">JANA KAD KERJA</h1>
        <hr>
        <jana-kad-kerja-step1 v-if="step == 1" @next="next" @back="step--"></jana-kad-kerja-step1>
        <jana-kad-kerja-step2 v-if="step == 2" @next="next" @back="step--"></jana-kad-kerja-step2>
        <jana-kad-kerja-step3 v-if="step == 3" @next="next" @back="step--"></jana-kad-kerja-step3>
    </div>
</template>
<script>
export default {
    data() {
        return {
            step: 1
        }
    },
    mounted() {
        console.log('Component mounted.')
    },
    methods: {
        next() {
            this.step++;
        }
    }
}

</script>
