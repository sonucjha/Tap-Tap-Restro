<template>
  <div class="sidebar">
    <div class="mt-3 brand-backgound">
        <h4 class="mb-1" style="color:white">TAP TAP RESTRO</h4>
          <!-- Make My Dayy -->
          <!-- make my bhojan / bhoj -->
          <!-- cook uncle -->
          <!-- 5star In House -->
      </div>
    <ul class="menu">
      <li class="pointer"><i class="icon">🏠</i> Dashboard</li>
      <li>
        <div @click="toggleDropdown('staff')" class="dropdown-toggle">
          <i class="icon">👨‍💼</i> Staff
        </div>
        <ul v-if="dropdowns.staff" class="dropdown-menus">
          <li>Staff List</li>
          <li>Roles</li>
        </ul>
      </li>
      <li class="pointer"><i class="icon">👥</i> Customer</li>
      <li>
        <div @click="toggleDropdown('menuManagement')" class="dropdown-toggle">
          <i class="icon">📋</i> Menu Management
        </div>
        <ul v-if="dropdowns.menuManagement" class="dropdown-menus">
          <li>View Menus</li>
          <li>Add Menu</li>
        </ul>
      </li>
      <li>
        <div @click="toggleDropdown('kiranaItem')" class="dropdown-toggle">
          <i class="icon">🍎</i> Kirana Item
        </div>
        <ul v-if="dropdowns.kiranaItem" class="dropdown-menus">
          <li>Items List</li>
          <li>Add Item</li>
        </ul>
      </li>
      <li>
        <div @click="toggleDropdown('order')" class="dropdown-toggle">
          <i class="icon">📦</i> Order
        </div>
        <ul v-if="dropdowns.order" class="dropdown-menus">
          <li>Orders</li>
          <li>Order History</li>
        </ul>
      </li>
      <li class="pointer"><i class="icon">⭐</i> Customer Review</li>
      <li>
        <div @click="toggleDropdown('photo')" class="dropdown-toggle">
          <i class="icon">📸</i> Photo
        </div>
        <ul v-if="dropdowns.photo" class="dropdown-menus">
          <li>Gallery</li>
          <li>Upload Photo</li>
        </ul>
      </li>
      <li>
        <div @click="toggleDropdown('video')" class="dropdown-toggle">
          <i class="icon">🎥</i> Video
        </div>
        <ul v-if="dropdowns.video" class="dropdown-menus">
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
 