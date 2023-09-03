import './bootstrap';
// import { createApp } from 'vue';
// import ExampleComponent from './components/ExampleComponent.vue';
// import router from './router';

import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';

// Import components
import App from './components/App.vue';
import ShowDnsRecords from './components/ShowDnsRecords.vue';

const router = createRouter({
    history: createWebHistory(),
    routes: [
        { path: '/dns', component: ShowDnsRecords },
    ]
});
const app = createApp(App);
app.use(router);
app.mount('#app');