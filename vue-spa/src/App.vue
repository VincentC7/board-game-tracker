<template>
  <div class="page">
    <div class="sidebar">
      <SideBar></SideBar>
    </div>
    <div class="content">
      <router-view/>
    </div>
  </div>
</template>

<script setup>
import SideBar from "@/components/SideBar.vue";

</script>

<style>
body {
  background-color: #f1f5f9;
  padding: 0;
  margin: 0;
  font-family: Inter, sans-serif;
  font-size: .875rem;
}

.page {
  display: flex;
}

.content {
  width: 100%;
  padding: var(--padding-meddium);
}
</style>
