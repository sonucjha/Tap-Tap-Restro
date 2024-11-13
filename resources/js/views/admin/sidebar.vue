<template>
  <div class="sidebar">
    <ul class="menu">
      <li class="pointer"><i class="icon">🏠</i> Dashboard</li>
      <li>
        <div @click="toggleDropdown('staff')" class="dropdown-toggle">
          <i class="icon">👨‍💼</i> Staff
        </div>
        <ul v-if="dropdowns.staff" class="dropdown-menu">
          <li>Staff List</li>
          <li>Roles</li>
        </ul>
      </li>
      <li class="pointer"><i class="icon">👥</i> Customer</li>
      <li>
        <div @click="toggleDropdown('menuManagement')" class="dropdown-toggle">
          <i class="icon">📋</i> Menu Management
        </div>
        <ul v-if="dropdowns.menuManagement" class="dropdown-menu">
          <li>View Menus</li>
          <li>Add Menu</li>
        </ul>
      </li>
      <li>
        <div @click="toggleDropdown('kiranaItem')" class="dropdown-toggle">
          <i class="icon">🍎</i> Kirana Item
        </div>
        <ul v-if="dropdowns.kiranaItem" class="dropdown-menu">
          <li>Items List</li>
          <li>Add Item</li>
        </ul>
      </li>
      <li>
        <div @click="toggleDropdown('order')" class="dropdown-toggle">
          <i class="icon">📦</i> Order
        </div>
        <ul v-if="dropdowns.order" class="dropdown-menu">
          <li>Orders</li>
          <li>Order History</li>
        </ul>
      </li>
      <li class="pointer"><i class="icon">⭐</i> Customer Review</li>
      <li>
        <div @click="toggleDropdown('photo')" class="dropdown-toggle">
          <i class="icon">📸</i> Photo
        </div>
        <ul v-if="dropdowns.photo" class="dropdown-menu">
          <li>Gallery</li>
          <li>Upload Photo</li>
        </ul>
      </li>
      <li>
        <div @click="toggleDropdown('video')" class="dropdown-toggle">
          <i class="icon">🎥</i> Video
        </div>
        <ul v-if="dropdowns.video" class="dropdown-menu">
          <li>Video List</li>
          <li>Upload Video</li>
        </ul>
      </li>
    </ul>
  </div>
</template>

<script setup>

import { ref } from "vue";

const dropdowns = ref({
  staff: false,
  menuManagement: false,
  kiranaItem: false,
  order: false,
  photo: false,
  video: false,
});

const toggleDropdown = (menu) => {
  dropdowns.value[menu] = !dropdowns.value[menu];
};

</script>
 