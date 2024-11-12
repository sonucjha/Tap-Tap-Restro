<template>
    <header class="header">
      <div class="logo">My App</div>
      <div class="settings-dropdown">
        <div @click="toggleDropdown" class="settings-toggle">
          ⚙️ Settings
        </div>
        <ul v-show="showDropdown" class="dropdown-menu">
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
  