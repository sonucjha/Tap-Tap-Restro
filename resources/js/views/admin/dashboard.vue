<template>
    <div>
        <Header />
        <Sidebar />
        <main class="ml-64 p-6">
            <h2 class="text-2xl font-bold mb-4">Welcome to the Dashboard!</h2>
            <p>Content goes here...</p>
            <router-view />
        </main>
        <Footer />
    </div>
</template>

<script setup>
import Sidebar from '../sidebar.vue';
import Header from '../header.vue';
import Footer from '../footer';
</script>
