<template>
  <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark sidebar" style="width: 280px;">
    <div class=" brand-backgound">
        <h4 class="mb-1" style="color:white">Tap-Tap-Restro</h4>
      </div>

    <ul class="nav nav-pills flex-column mb-auto">
      <li>
        <a href="#" class="nav-link text-white">
          <i class="bi bi-speedometer2 me-2"></i>
          Dashboard
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white" @click.prevent="toggleDropdown('staff')">
          <i class="bi bi-people-fill me-2"></i>
          Staff
          <i :class="dropdowns.staff ? 'bi bi-chevron-up' : 'bi bi-chevron-down'" class="float-end"></i>
        </a>
        <ul v-if="dropdowns.staff" class="nav flex-column ms-3">
          <li><a href="#" class="nav-link text-white">View Staff</a></li>
          <li><a href="#" class="nav-link text-white">Add Staff</a></li>
        </ul>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          <i class="bi bi-people me-2"></i>
          Customer 
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white" @click.prevent="toggleDropdown('menuManagement')">
          <i class="bi bi-list-ul me-2"></i>
          Menu Management
          <i :class="dropdowns.menuManagement ? 'bi bi-chevron-up' : 'bi bi-chevron-down'" class="float-end"></i>
        </a>
        <ul v-if="dropdowns.menuManagement" class="nav flex-column ms-3">
          <li><a href="#" class="nav-link text-white">View Menu</a></li>
          <li><a href="#" class="nav-link text-white">Add Menu</a></li>
        </ul>
      </li>
      <li>
        <a href="#" class="nav-link text-white" @click.prevent="toggleDropdown('kiranaItem')">
          <i class="bi bi-box-seam me-2"></i>
          Kirana Item
          <i :class="dropdowns.kiranaItem ? 'bi bi-chevron-up' : 'bi bi-chevron-down'" class="float-end"></i>
        </a>
        <ul v-if="dropdowns.kiranaItem" class="nav flex-column ms-3">
          <li><a href="#" class="nav-link text-white">View Items</a></li>
          <li><a href="#" class="nav-link text-white">Add Item</a></li>
        </ul>
      </li>
      <li>
        <a href="#" class="nav-link text-white" @click.prevent="toggleDropdown('order')">
          <i class="bi bi-cart-fill me-2"></i>
          Orders
          <i :class="dropdowns.order ? 'bi bi-chevron-up' : 'bi bi-chevron-down'" class="float-end"></i>
        </a>
        <ul v-if="dropdowns.order" class="nav flex-column ms-3">
          <li><a href="#" class="nav-link text-white">View Orders</a></li>
          <li><a href="#" class="nav-link text-white">Manage Orders</a></li>
        </ul>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          <i class="bi bi-person-circle me-2"></i>
          Customer Review
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white" @click.prevent="toggleDropdown('photo')">
          <i class="bi bi-image me-2"></i>
          Photo
          <i :class="dropdowns.photo ? 'bi bi-chevron-up' : 'bi bi-chevron-down'" class="float-end"></i>
        </a>
        <ul v-if="dropdowns.photo" class="nav flex-column ms-3">
          <li><a href="#" class="nav-link text-white">View Photos</a></li>
          <li><a href="#" class="nav-link text-white">Add Photo</a></li>
        </ul>
      </li>
      <li>
        <a href="#" class="nav-link text-white" @click.prevent="toggleDropdown('video')">
          <i class="bi bi-camera-video-fill me-2"></i>
          Video
          <i :class="dropdowns.video ? 'bi bi-chevron-up' : 'bi bi-chevron-down'" class="float-end"></i>
        </a>
        <ul v-if="dropdowns.video" class="nav flex-column ms-3">
          <li><a href="#" class="nav-link text-white">View Videos</a></li>
          <li><a href="#" class="nav-link text-white">Add Video</a></li>
        </ul>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>mdo</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Sign out</a></li>
      </ul>
    </div>
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
