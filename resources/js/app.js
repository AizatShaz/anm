/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('pro-forma', require('./components/ProForma.vue').default);
Vue.component('jana-pro-forma', require('./components/SenaraiPesanan.vue').default);

Vue.component('permohonan-sebutharga', require('./components/PermohonanSebutharga/Index.vue').default);
Vue.component('permohonan-sebutharga-step1', require('./components/PermohonanSebutharga/Step1.vue').default);
Vue.component('permohonan-sebutharga-step2', require('./components/PermohonanSebutharga/Step2.vue').default);
Vue.component('permohonan-sebutharga-step3', require('./components/PermohonanSebutharga/Step3.vue').default);
Vue.component('permohonan-sebutharga-step4', require('./components/PermohonanSebutharga/Step4.vue').default);
Vue.component('permohonan-sebutharga-step5', require('./components/PermohonanSebutharga/Step5.vue').default);
Vue.component('permohonan-sebutharga-step6', require('./components/PermohonanSebutharga/Step6.vue').default);
Vue.component('permohonan-sebutharga-step7', require('./components/PermohonanSebutharga/Step7.vue').default);

Vue.component('sebutharga', require('./components/SebuthargaRFQ/Index.vue').default);
Vue.component('sebutharga-rfq-step1', require('./components/SebuthargaRFQ/Step1.vue').default);
Vue.component('sebutharga-rfq-step2', require('./components/SebuthargaRFQ/Step2.vue').default);
Vue.component('sebutharga-rfq-step3', require('./components/SebuthargaRFQ/Step3.vue').default);
Vue.component('sebutharga-rfq-step4', require('./components/SebuthargaRFQ/Step4.vue').default);
Vue.component('sebutharga-rfq-step5', require('./components/SebuthargaRFQ/Step5.vue').default);
Vue.component('sebutharga-rfq-step6', require('./components/SebuthargaRFQ/Step6.vue').default);
Vue.component('sebutharga-rfq-step7', require('./components/SebuthargaRFQ/Step7.vue').default);


Vue.component('jana-kad-kerja', require('./components/Kadkerja/JanaKadKerja/Index.vue').default);
Vue.component('jana-kad-kerja-step1', require('./components/Kadkerja/JanaKadKerja/Step1.vue').default);
Vue.component('jana-kad-kerja-step2', require('./components/Kadkerja/JanaKadKerja/Step2.vue').default);
Vue.component('jana-kad-kerja-step3', require('./components/Kadkerja/JanaKadKerja/Step3.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
