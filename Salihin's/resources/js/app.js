import './bootstrap';
import { createApp, h } from 'vue';
import { createInertiaApp, Link } from '@inertiajs/vue3';
import { ZiggyVue } from 'ziggy-js';
import { InertiaProgress } from '@inertiajs/progress';


InertiaProgress.init({
  color: '#4B5563',    // Progress bar color
  showSpinner: true,
});
  
createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true });
    return pages[`./Pages/${name}.vue`];
  },
  title: title => `JobSeeker - ${title}`,
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(ZiggyVue)  // Use ZiggyVue for routing
      .component('Link', Link)  // Register Inertia Link component globally // Use ZiggyVue to handle route generation
      .mount(el);
  },
});
