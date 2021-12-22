import {initialize} from "./helpers/general";

require('./bootstrap');
//Libs
import Vue from 'vue';
import VueRouter from 'vue-router';
import Vuex from 'vuex';
import {routes} from "./routes";
import BootstrapVue from "bootstrap-vue";
import StoreData from "./store"
import {FontAwesomeIcon} from "@fortawesome/vue-fontawesome";
import {FontAwesomeLayers} from "@fortawesome/vue-fontawesome";
import {FontAwesomeLayersText} from "@fortawesome/vue-fontawesome";
import "vue-sidebar-menu/dist/vue-sidebar-menu.css";
// import StatusIndicator from 'vue-status-indicator';
import ProgressBar from 'vuejs-progress-bar';
import { Line } from 'vue-chartjs';
import VueChartJs from 'vue-chartjs';
import "vue-navigation-bar/dist/vue-navigation-bar.css";
import "export-json-excel";
// import StatusIndicator from 'vue-status-indicator';
// Vue.use(StatusIndicator);

//Components
import MainApp from "./components/MainApp.vue";

Vue.use(VueRouter);
Vue.use(Vuex);
Vue.use(BootstrapVue)
Vue.use(FontAwesomeIcon)
Vue.use(FontAwesomeLayers)
Vue.use(FontAwesomeLayersText)
// Vue.use(StatusIndicator);
Vue.use(ProgressBar);
Vue.component("vue-navigation-bar", VueNavigationBar);
//////////// Time formate ///////////////////
import moment from 'moment'
import VueNavigationBar from "vue-navigation-bar";



import 'datatables.net'
import 'datatables.net-bs';
import 'datatables.net-buttons-bs'
import 'datatables.net-responsive'
window.$ = window.jQuery = require( 'jquery' );
require( 'datatables.net' );
require( 'datatables.net-bs' );
// require( 'datatables.net-buttons/js/buttons.colVis.js' )();
// require( 'datatables.net-buttons/js/buttons.html5.js' )();
// require( 'datatables.net-buttons/js/buttons.print.js' )();


Vue.config.productionTip = false
Vue.filter('formatDate', function(value) {
    if (value) {
        return moment(String(value)).format('MM-DD-YYYY hh:mm A')
    }
});
Vue.filter('formatDate1', function(value) {
    if (value) {
        return moment(String(value)).format('MM-DD-YYYY HH:mm')
    }
});
////////////////////////////////////////////
const store = new Vuex.Store(StoreData)

const router = new VueRouter({
   routes,
   mode: 'history',
});

initialize(store, router);

const app = new Vue({
    el: '#app',
    router,
    store,
    components: {
        MainApp,

    }
})
