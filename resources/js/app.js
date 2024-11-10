import './bootstrap';
import { createApp } from 'vue';
import router from './router';

import AdminDashboard from './components/backEnd/adminLayout.vue';
import App from './components/App.vue';

const app = createApp({});
app.component('app-component', App);
app.component('admin-dashboard', AdminDashboard);
app.use(router).mount('#app');

