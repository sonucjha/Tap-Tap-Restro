<template>
  <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
    <div class=" brand-backgound">
        <h4 class="mb-1" style="color:white">Tap-Tap-Restro</h4>
      </div>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="#" class="nav-link active" aria-current="page">
          <i class="bi bi-house-door me-2"></i>
          Home
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          <i class="bi bi-speedometer2 me-2"></i>
          Dashboard
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          <i class="bi bi-table me-2"></i>
          Orders
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          <i class="bi bi-grid me-2"></i>
          Products
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          <i class="bi bi-people me-2"></i>
          Customers
        </a>
      </li>
      <!-- New Dropdown -->
      <li>
        <div class="dropdown">
          <a 
            class="nav-link dropdown-toggle text-white" 
            href="#" 
            id="dropdownMenuButton1" 
            data-bs-toggle="dropdown" 
            aria-expanded="false">
            <i class="bi bi-list me-2"></i>
            More Options
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Option 1</a></li>
            <li><a class="dropdown-item" href="#">Option 2</a></li>
            <li><a class="dropdown-item" href="#">Option 3</a></li>
          </ul>
        </div>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a 
        href="#" 
        class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" 
        id="dropdownUser1" 
        data-bs-toggle="dropdown" 
        aria-expanded="false">
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
