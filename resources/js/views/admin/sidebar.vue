<template>
  <div class="sidebar">
    <ul class="menu">
      <li><i class="icon">🏠</i> Dashboard</li>
      <li>
        <div @click="toggleDropdown(staff)" class="dropdown-toggle">
          <i class="icon">👨‍💼</i> Staff
        </div>
        <ul v-if="staff" class="dropdown-menu">
          <li>Staff List</li>
          <li>Roles</li>
        </ul>
      </li>
      <li><i class="icon">👥</i> Customer</li>
      <li>
        <div @click="toggleDropdown(menuManagement)" class="dropdown-toggle">
          <i class="icon">📋</i> Menu Management
        </div>
        <ul v-if="menuManagement" class="dropdown-menu">
          <li>View Menus</li>
          <li>Add Menu</li>
        </ul>
      </li>
      <li>
        <div @click="toggleDropdown(kiranaItem)" class="dropdown-toggle">
          <i class="icon">🍎</i> Kirana Item
        </div>
        <ul v-if="kiranaItem" class="dropdown-menu">
          <li>Items List</li>
          <li>Add Item</li>
        </ul>
      </li>
      <li>
        <div @click="toggleDropdown(order)" class="dropdown-toggle">
          <i class="icon">📦</i> Order
        </div>
        <ul v-if="order" class="dropdown-menu">
          <li>Orders</li>
          <li>Order History</li>
        </ul>
      </li>
      <li><i class="icon">⭐</i> Customer Review</li>
      <li>
        <div @click="toggleDropdown(photo)" class="dropdown-toggle">
          <i class="icon">📸</i> Photo
        </div>
        <ul v-if="photo" class="dropdown-menu">
          <li>Gallery</li>
          <li>Upload Photo</li>
        </ul>
      </li>
      <li>
        <div @click="toggleDropdown(video)" class="dropdown-toggle">
          <i class="icon">🎥</i> Video
        </div>
        <ul v-if="video" class="dropdown-menu">
          <li>Video List</li>
          <li>Upload Video</li>
        </ul>
      </li>
    </ul>
  </div>
</template>

<script setup>
import { ref } from "vue";

const staff = ref(false)
const menuManagement = ref(false)
const kiranaItem = ref(false)
const order = ref(false)
const photo = ref(false)
const video = ref(false)

const toggleDropdown = (menu) => {
  // emit("toggle-dropdown", menu);
  menu.value = !menu.value
};

</script>

<!-- const dropdownStates = ref({
  staff: false,
  menuManagement: false,
  kiranaItem: false,
  order: false,
  photo: false,
  video: false,
}); -->