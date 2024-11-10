import './bootstrap';
import { createApp } from 'vue';

import AdminDashboard from './components/backEnd/AdminDashboard.vue';
import App from './components/App.vue';

const app = createApp({});
app.component('app-component', App);
app.component('admin-dashboard', AdminDashboard);
app.mount('#app');

