<template>
    <header class="header">
      <div class="logo"></div>
      <div class="settings-dropdown">
        <div @click="toggleDropdown" class="settings-toggle pointer">
          ⚙️ Settings
        </div>
        <ul v-if="showDropdown" class="dropdown-menus">
          <li>Profile</li>
          <li>Logout</li>
        </ul>
      </div>
    </header>
  </template>
  
  <script>
  export default {
    data() {
      return {
        showDropdown: false,
      };
    },
    methods: {
      toggleDropdown() {
        this.showDropdown = !this.showDropdown;
      },
    },
  };
  </script>
  