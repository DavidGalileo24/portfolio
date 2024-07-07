import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import { createPinia } from 'pinia'
import VueTyped from 'vue3-typed-js';
import '/node_modules/flowbite-vue/dist/index.css'

import { library } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { faGithub,faLinkedin,faInstagram, } from '@fortawesome/free-brands-svg-icons'
import { faDownload,faBriefcase,faHandPeace,} from '@fortawesome/free-solid-svg-icons'
library.add(faGithub,faLinkedin,faInstagram,faDownload,faBriefcase,faHandPeace, )

const appName = import.meta.env.VITE_APP_NAME || 'Portfolio';
const pinia = createPinia()

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .component('font-awesome-icon', FontAwesomeIcon)
            .use(pinia)
            .use(plugin)
            .use(VueTyped)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
