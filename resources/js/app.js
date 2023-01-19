import './bootstrap';
import '../css/app.css';

import {createApp, h, watchEffect} from 'vue';
import {createInertiaApp, usePage} from '@inertiajs/inertia-vue3';
import {InertiaProgress} from '@inertiajs/progress';
import {resolvePageComponent} from 'laravel-vite-plugin/inertia-helpers';
import {ZiggyVue} from '../../vendor/tightenco/ziggy/dist/vue.m';
import {createPinia} from 'pinia';
import {i18nVue, loadLanguageAsync} from 'laravel-vue-i18n';
import VueApexCharts from "vue3-apexcharts";



const appName = window.document.getElementsByTagName('title')[0]?.innerText ||
    'Laravel';
import {useLayoutStore} from '@/Stores/layout';
const initialiseApp = () => {
    const layout = useLayoutStore();

    if (usePage().props.value.language) {
        loadLanguageAsync(usePage().props.value.language);
    }
    watchEffect(() => {

        if (usePage().props.value.layout) {
            layout.navigation = usePage().props.value.layout.navigation ?? null;
            layout.actions = usePage().props.value.layout.actions ?? null;

        }
        if (usePage().props.value.tenant) {
            layout.tenant = usePage().props.value.tenant ?? null;
        }
        layout.currentRoute=route().current()

    });
    return layout;
};

createInertiaApp({
                     title  : (title) => `${title} - ${appName}`,
                     resolve: (name) => resolvePageComponent(
                         `./Pages/${name}.vue`,
                         import.meta.glob('./Pages/**/*.vue')),
                     setup({el, app, props, plugin}) {
                         return createApp({render: () => h(app, props)}).
                             use(plugin).
                             use(VueApexCharts).
                             use(createPinia()).
                             use(ZiggyVue, Ziggy).
                             use(i18nVue, {
                                 resolve: async lang => {
                                     const languages = import.meta.glob(
                                         '../../lang/*.json');
                                     return await languages[`../../lang/${lang}.json`]();
                                 },
                             }).
                             provide(
                                 'initialiseApp', initialiseApp,
                             ).
                             mount(el);
                     },
                 });

InertiaProgress.init({color: '#4B5563'});
