<template>
  <h1>Tableau de bord</h1>
  <div
      v-for="game in games"
      class="game-list"
  >
    <div>
      {{ game.gameTitle }}
    </div>
  </div>
</template>

<script setup>

import {onMounted, ref} from "vue";
import axios from "axios";

const games = ref([]);

onMounted(() => {
  axios.get("http://127.0.0.1:8000/api/board_games")
      .then(response => {
        games.value = response.data["hydra:member"];
      })
})
</script>

<style scoped>
</style>
