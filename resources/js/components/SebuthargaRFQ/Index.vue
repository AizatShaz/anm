<template>
    <div>
        <sebutharga-rfq-step1 v-if="step == 1" @next="next" @back="step--"></sebutharga-rfq-step1>
        <sebutharga-rfq-step2 v-if="step == 2" @next="next" @back="step--"></sebutharga-rfq-step2>
        <sebutharga-rfq-step3 v-if="step == 3" @next="next" @back="step--"></sebutharga-rfq-step3>
        <sebutharga-rfq-step4 v-if="step == 4" @next="next" @back="step--"></sebutharga-rfq-step4>
        <sebutharga-rfq-step5 v-if="step == 5" @next="next" @back="step--"></sebutharga-rfq-step5>
        <sebutharga-rfq-step6 v-if="step == 6" @next="next" @back="step--"></sebutharga-rfq-step6>
        <sebutharga-rfq-step7 v-if="step == 7" @next="next" @back="step--"></sebutharga-rfq-step7>
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
