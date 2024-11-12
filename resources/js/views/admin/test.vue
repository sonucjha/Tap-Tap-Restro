<template>
    <div class="layout">
      <!-- Header -->
      <header class="header">
        <div class="header-content">
          <h1>My App</h1>
          <div class="settings">
            <button @click="toggleDropdown">⚙️ Settings</button>
            <ul v-if="dropdownOpen" class="dropdown">
              <li><a href="#">Profile</a></li>
              <li><a href="#">Logout</a></li>
            </ul>
          </div>
        </div>
      </header>
  
      <!-- Sidebar -->
      <aside class="sidebar">
        <ul>
          <li><span>🏠</span> <a href="#">Home</a></li>
          <li><span>📄</span> <a href="#">Documents</a></li>
          <li><span>📊</span> <a href="#">Reports</a></li>
          <li><span>⚙️</span> <a href="#">Settings</a></li>
        </ul>
      </aside>
  
      <!-- Main Content -->
      <main class="main-content">
        <p>Welcome to the main content area.</p>
      </main>
  
      <!-- Footer -->
      <footer class="footer">
        <p>&copy; 2024 My App</p>
      </footer>
    </div>
  </template>
<script>
export default {
  data() {
    return {
      dropdownOpen: false,
    };
  },
  methods: {
    toggleDropdown() {
      this.dropdownOpen = !this.dropdownOpen;
    },
  },
};
</script>
<style scoped>
.layout {
  display: grid;
  grid-template-areas:
    "header header"
    "sidebar main"
    "footer footer";
  grid-template-rows: auto 1fr auto;
  grid-template-columns: 200px 1fr;
  height: 100vh;
}

.header {
  grid-area: header;
  background-color: #333;
  color: white;
  padding: 1rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.settings {
  position: relative;
}

.settings button {
  background: none;
  border: none;
  color: white;
  cursor: pointer;
}

.dropdown {
  position: absolute;
  top: 100%;
  right: 0;
  background: white;
  border: 1px solid #ddd;
  list-style: none;
  margin: 0;
  padding: 0;
}

.dropdown li {
  padding: 0.5rem 1rem;
}

.dropdown li a {
  text-decoration: none;
  color: #333;
}

.sidebar {
  grid-area: sidebar;
  background: linear-gradient(to right, #6d0f4d, #4e4e4eba) !important;
  padding: 1rem;
}

.sidebar ul {
  list-style: none;
  padding: 0;
}

.sidebar li {
  display: flex;
  align-items: center;
  margin: 0.5rem 0;
}

.sidebar li span {
  margin-right: 0.5rem;
}

.main-content {
  grid-area: main;
  padding: 1rem;
}

.footer {
  grid-area: footer;
  background-color: #333;
  color: white;
  text-align: center;
  padding: 1rem;
}
</style>
  