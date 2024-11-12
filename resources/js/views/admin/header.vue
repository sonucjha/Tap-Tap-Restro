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
  
  <style>
  .header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #444;
    color: #fff;
    padding: 10px 20px;
  }
  
  .settings-dropdown {
    position: relative;
  }
  
  .dropdown-menu {
    position: absolute;
    right: 0;
    top: 100%;
    background-color: #fff;
    color: #333;
    list-style: none;
    padding: 10px;
    margin: 0;
    border: 1px solid #ccc;
    display: none;
  }
  
  .dropdown-menu > li {
    padding: 5px 10px;
    cursor: pointer;
  }
  </style>
  