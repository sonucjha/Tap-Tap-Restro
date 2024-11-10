import { createRouter, createWebHistory } from 'vue-router';
import AdminLayout from './views/admin/adminLayout.vue';
import Dashboard from './views/admin/dashboard.vue';
import Header from './views/admin/header.vue';
import Footer from './views/admin/footer.vue';
import SideBar from './views/admin/sidebar.vue';

const routes = [
  {
    path: '/',
    component: AdminLayout,
    children: [
      { path: 'dashboard', component: Dashboard },
      { path: 'header', component: Header },
      { path: 'footer', component: Footer },
      { path: 'sidebar', component: SideBar },
    ],
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
