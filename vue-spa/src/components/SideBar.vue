<template>
  <div class="sidebar">
    <div class="sidebar-title">
      BoardGameTracker
    </div>
    <nav class="sidebar-nav">
      <ul>
        <li>
          <router-link class="sidebar-link" to="/">
            <div class="link-content">
              <HomeIcon class="icon"/>
              <div class="link-content-text">Tableau de bord</div>
            </div>
          </router-link>
        </li>
        <li>
          <router-link class="sidebar-link" to="/games">
            <div class="link-content">
              <PuzzlePieceIcon class="icon"/>
              <div class="link-content-text">Mes Jeux</div>
            </div>
          </router-link>
        </li>
      </ul>
    </nav>
  </div>
</template>

<script setup>
import { HomeIcon } from '@heroicons/vue/24/outline'
import { PuzzlePieceIcon } from '@heroicons/vue/24/outline'
</script>

<style scoped>
ul {
  margin: 0;
  padding: 1rem;
  list-style-type: none;
}

.sidebar {
  width: 15rem;
  height: 100vh;
  display: flex;
  flex-direction: column;
  background-color: #ffffff;
  border-right: 1px solid #e3e7ed;
}

.sidebar-title {
  padding: var(--padding-small);
  font-weight: bold;
}

.sidebar-link, .sidebar-link:link, .sidebar-link:visited, .sidebar-link:active {
  display: flex;
  margin: var(--margin-small) 0;
  padding: var(--padding-small);
  border-radius: 3px;
  text-decoration: none;
  color: inherit;
}

.sidebar-link a {
  margin-left: 10px;
}

li:hover, .router-link-active {
  background-color: #eceff3;
  font-weight: bold;
}

.link-content {
  display: flex;
}

.link-content-text {
  margin-left: var(--margin-small);
  align-self: center;
}


</style>