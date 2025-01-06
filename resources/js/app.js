import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import { createPinia } from 'pinia'
import VueTyped from 'vue3-typed-js';
import VueSweetalert2 from 'vue-sweetalert2';
import FloatingVue from 'floating-vue'
import 'sweetalert2/dist/sweetalert2.min.css';
import '/node_modules/flowbite-vue/dist/index.css'
import 'floating-vue/dist/style.css'
import 'animate.css';
import { createHead } from 'unhead'

import { library } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { faGithub,faLinkedin,faWhatsapp,faInstagram, } from '@fortawesome/free-brands-svg-icons'
import { faDownload,faBriefcase,faHandPeace,faPaperPlane,faHome,faCode,faTerminal,faStar,faMapMarkerAlt,faNewspaper,faPhoneAlt,faEnvelopeOpenText,faPlus,faLink,faBars,faArrowRight,} from '@fortawesome/free-solid-svg-icons'
library.add(faGithub,faLinkedin,faInstagram,faWhatsapp,faDownload,faBriefcase,faHandPeace,faPaperPlane,faHome,faCode,faTerminal,faStar,faMapMarkerAlt,faNewspaper,faPhoneAlt,faEnvelopeOpenText,faPlus,faLink,faBars,faArrowRight,)

const appName = import.meta.env.VITE_APP_NAME || 'Portfolio';
const pinia = createPinia()
const head = createHead()

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .component('font-awesome-icon', FontAwesomeIcon)
            .use(pinia)
            .use(plugin)
            .use(VueSweetalert2)
            .use(FloatingVue)
            .use(VueTyped)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
