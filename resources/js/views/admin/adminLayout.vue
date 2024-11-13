<template>
  <div id="app" class="app-container">
    <Header />
    <div class="main-content">
      <Sidebar  :dropdowns="dropdownStates" @update-dropdown="updateDropdown" />
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

import { ref } from "vue";

const dropdownStates = ref({
  staff: false,
  menuManagement: false,
  kiranaItem: false,
  order: false,
  photo: false,
  video: false,
});

const updateDropdown = (menu) => {
  dropdownStates.value[menu] = !dropdownStates.value[menu];
};
</script>
