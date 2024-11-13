<template>
    <header class="header">
      
    </header>
  </template>
  
  <script>
  export default {
    data() {
      return {
        showDropdown: false,
      };
    },
    methods: {
      toggleDropdown() {
        this.showDropdown = !this.showDropdown;
      },
    },
  };
  </script>
  