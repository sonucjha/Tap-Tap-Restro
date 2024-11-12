<template>
    <div class="sidebar">
      <ul class="menu">
        <li><i class="icon">🏠</i> Dashboard</li>
        <li>
          <div @click="toggleDropdown('staff')" class="dropdown-toggle">
            <i class="icon">👨‍💼</i> Staff
          </div>
          <ul v-show="dropdowns.staff" class="dropdown-menu">
            <li>Staff List</li>
            <li>Roles</li>
          </ul>
        </li>
        <li><i class="icon">👥</i> Customer</li>
        <li>
          <div @click="toggleDropdown('menuManagement')" class="dropdown-toggle">
            <i class="icon">📋</i> Menu Management
          </div>
          <ul v-show="dropdowns.menuManagement" class="dropdown-menu">
            <li>View Menus</li>
            <li>Add Menu</li>
          </ul>
        </li>
        <li>
          <div @click="toggleDropdown('kiranaItem')" class="dropdown-toggle">
            <i class="icon">🍎</i> Kirana Item
          </div>
          <ul v-show="dropdowns.kiranaItem" class="dropdown-menu">
            <li>Items List</li>
            <li>Add Item</li>
          </ul>
        </li>
        <li>
          <div @click="toggleDropdown('order')" class="dropdown-toggle">
            <i class="icon">📦</i> Order
          </div>
          <ul v-show="dropdowns.order" class="dropdown-menu">
            <li>Orders</li>
            <li>Order History</li>
          </ul>
        </li>
        <li><i class="icon">⭐</i> Customer Review</li>
        <li>
          <div @click="toggleDropdown('photo')" class="dropdown-toggle">
            <i class="icon">📸</i> Photo
          </div>
          <ul v-show="dropdowns.photo" class="dropdown-menu">
            <li>Gallery</li>
            <li>Upload Photo</li>
          </ul>
        </li>
        <li>
          <div @click="toggleDropdown('video')" class="dropdown-toggle">
            <i class="icon">🎥</i> Video
          </div>
          <ul v-show="dropdowns.video" class="dropdown-menu">
            <li>Video List</li>
            <li>Upload Video</li>
          </ul>
        </li>
      </ul>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        dropdowns: {
          staff: false,
          menuManagement: false,
          kiranaItem: false,
          order: false,
          photo: false,
          video: false,
        },
      };
    },
    methods: {
      toggleDropdown(menu) {
        this.dropdowns[menu] = !this.dropdowns[menu];
      },
    },
  };
  </script>
  
  <style>
  .sidebar {
    width: 250px;
    background-color: #333;
    color: #fff;
    padding: 15px;
  }
  
  .menu {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  
  .menu > li {
    margin: 10px 0;
  }
  
  .icon {
    margin-right: 10px;
  }
  
  .dropdown-toggle {
    cursor: pointer;
  }
  
  .dropdown-menu {
    list-style: none;
    padding-left: 20px;
    margin: 5px 0;
  }
  </style>
  