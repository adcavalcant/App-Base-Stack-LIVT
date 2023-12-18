import "./bootstrap";

import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/inertia-vue3";

const pages = require.context("./Pages/", true, /\.vue$/i);
const resolveComponent = (name) => {
    return pages(`./${name}.vue`).default;
};

createInertiaApp({
    resolve: (name) => resolveComponent(name),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mixin({ methods: window.route })
            .mount(el);
    },
});
