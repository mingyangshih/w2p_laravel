import Vue from 'vue'
import { camelCase } from 'lodash';
const requireComponent = require.context('./components', false, /\.vue$/);

requireComponent.keys().forEach(fileName => {
    
    let componentConfig = requireComponent(fileName)
    let componentName = camelCase(fileName.replace(/\.\//,'').slice(0,-4))
    Vue.component(
        componentName,
        componentConfig.default || componentConfig
    )
})

const app = new Vue({
    el: '#vueComponent',
});