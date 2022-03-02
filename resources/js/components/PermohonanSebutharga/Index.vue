<template>
    <div>
        <permohonan-sebutharga-step1 v-if="step == 1" @next="next" @back="step--"></permohonan-sebutharga-step1>
        <permohonan-sebutharga-step2 v-if="step == 2" @next="next" @back="step--"></permohonan-sebutharga-step2>
        <permohonan-sebutharga-step3 v-if="step == 3" @next="next" @back="step--"></permohonan-sebutharga-step3>
        <permohonan-sebutharga-step4 v-if="step == 4" @next="next" @back="step--"></permohonan-sebutharga-step4>
        <permohonan-sebutharga-step5 v-if="step == 5" @next="next" @back="step--"></permohonan-sebutharga-step5>
        <permohonan-sebutharga-step6 v-if="step == 6" @next="next" @back="step--"></permohonan-sebutharga-step6>
        <permohonan-sebutharga-step7 v-if="step == 7" @next="next" @back="step--"></permohonan-sebutharga-step7>
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
