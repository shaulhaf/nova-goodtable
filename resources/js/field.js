Nova.booting((Vue, router, store) => {
  Vue.component('index-nova-goodtable', require('./components/IndexField'))
  Vue.component('detail-nova-goodtable', require('./components/DetailField'))
  Vue.component('form-nova-goodtable', require('./components/FormField'))
})
