<template>
    <div>
        <Header />
        <Sidebar />
        <main class="ml-64 p-6">
            <h2 class="text-2xl font-bold mb-4">Welcome to the Dashboard!</h2>
            <p>Content goes here...</p>
        </main>
        <Footer />
    </div>
</template>

<script setup>
import Sidebar from './Sidebar.vue';
import Header from './Header.vue';
import Footer from './Footer.vue';
</script>

<style scoped>
main {
    min-height: calc(100vh - 96px);
    /* Adjust based on header & footer height */
}
</style>