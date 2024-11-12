<template>
  <div id="app" class="app-container">
    <Header />
    <div class="main-content">
      <Sidebar />
      <div class="content">
        <router-view />
      </div>
    </div>
    <Footer />
  </div>
</template>

<script setup>

import Sidebar from "./sidebar.vue";
import Header from "./header.vue";
import Footer from "./footer.vue";

const toggleDropdown = (menu) => {
  dropdowns[menu] = !dropdowns[menu];
};
</script>
