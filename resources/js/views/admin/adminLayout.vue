<template>
  <div>
    <Header />
    <div class="d-flex bg-light">
      <Sidebar />
      <main class="ml-12 p-6 col-9">
        <h2 class="text-2xl font-bold mb-4">Welcome to the Dashboard!</h2>
        <p>Content goes here...</p>
        <router-view />
      </main>
    </div>

    <Footer />
  </div>
</template>

<script setup>
import Sidebar from './sidebar.vue';
import Header from './header.vue';
import Footer from './footer.vue';
</script>
