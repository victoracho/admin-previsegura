import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import Vue3EasyDataTable from 'vue3-easy-data-table';
import { Quasar } from 'quasar';
import '@quasar/extras/material-icons/material-icons.css'
import 'vue3-easy-data-table/dist/style.css';
// Import icon libraries
import '@quasar/extras/material-icons/material-icons.css'

// Import Quasar css
import 'quasar/src/css/index.sass'


const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .component('EasyDataTable', Vue3EasyDataTable)
            .use(ZiggyVue, Ziggy)
            .use(Quasar)
            .mount(el);
    },
    
});

InertiaProgress.init({ color: '#4B5563' });
