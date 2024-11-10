<template>
  <div class="admin-dashboard">
    <!-- header start -->
    <Header />
    <!-- header end -->

    <div class="main-container">
      <!-- sidebar start -->
      <sidebar></sidebar>
      <!-- sidebar end -->

      <main class="content">
        <router-view />
      </main>
    </div>

    <!-- footer start -->
    <footer></footer>
    <!-- footer end -->
  </div>
</template>

<script setup>
import Sidebar from '../sidebar.vue';
import Header from '../header.vue';
import Footer from '../footer.vue';
</script>

 
