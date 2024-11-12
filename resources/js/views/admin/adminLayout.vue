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
