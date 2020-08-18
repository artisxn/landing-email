Nova.booting((Vue, router, store) => {
  Vue.component('unlayer-editor', require('./components/UnlayerEditor'))
  Vue.component('index-landing-email', require('./components/IndexField'))
  Vue.component('detail-landing-email', require('./components/DetailField'))
  Vue.component('form-landing-email', require('./components/FormField'))
})
