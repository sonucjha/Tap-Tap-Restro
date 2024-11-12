<template>
  <div id="app" class="app-container">
    <Header />
    <div class="main-content">
      <Sidebar />
      <div class="content">
        <router-view />
      </div>
    </div>
    <Footer />
  </div>
</template>

<script>
import Sidebar from "./sidebar.vue";
import Header from "./header.vue";
import Footer from "./footer.vue";

export default {
  components: {
    Sidebar,
    Header,
    Footer,
  },
};
</script>

<style>
.app-container {
  display: flex;
  flex-direction: column;
  height: 100vh;
}

.main-content {
  display: flex;
  flex: 1;
}

.content {
  flex: 1;
  padding: 20px;
  background-color: #f9f9f9;
}
</style>
