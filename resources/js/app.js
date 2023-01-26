import './bootstrap';
import '../css/app.css';

import {createApp, h, watchEffect} from 'vue';
import {createInertiaApp, usePage} from '@inertiajs/vue3';
import {resolvePageComponent} from 'laravel-vite-plugin/inertia-helpers';
import {ZiggyVue} from '../../vendor/tightenco/ziggy/dist/vue.m';
import {createPinia} from 'pinia';
import {i18nVue, loadLanguageAsync} from 'laravel-vue-i18n';

const appName = window.document.getElementsByTagName('title')[0]?.innerText ||
    'Laravel';
import {useLayoutStore} from '@/Stores/layout';

const initialiseApp = () => {
    const layout = useLayoutStore();

    if (usePage().props.language) {
        loadLanguageAsync(usePage().props.language);
    }
    watchEffect(() => {

        if (usePage().props.layout) {
            layout.navigation = usePage().props.layout.navigation ?? null;
            layout.actions = usePage().props.layout.actions ?? null;

        }
        if (usePage().props.tenant) {
            layout.tenant = usePage().props.tenant ?? null;
        }
        layout.currentRoute = route().current();

    });
    return layout;
};

createInertiaApp({
                     title  : (title) => `${title} - ${appName}`,
                     resolve: (name) => resolvePageComponent(
                         `./Pages/${name}.vue`,
                         import.meta.glob('./Pages/**/*.vue')),
                     setup({el, App, props, plugin}) {
                         return createApp({render: () => h(App, props)}).
                             use(plugin).
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

