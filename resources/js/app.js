import './bootstrap';
// Import Bootstrap CSS
import 'bootstrap/dist/css/bootstrap.min.css';

// Import Bootstrap JS
import 'bootstrap/dist/js/bootstrap.bundle.min.js';

import { createApp } from 'vue';
import router from './router';

// import AdminLayout from './components/backEnd/adminLayout.vue';
import App from './components/App.vue';

import AdminLayout from './views/admin/test.vue';

const app = createApp({});
app.component('app-component', App);
app.component('admin-layout', AdminLayout);
app.use(router).mount('#app');

