<template>
  <div class="table">
    <h1 class="table-title">Tableau de bord</h1>
    <table>
      <thead>
      <tr>
        <th>Titre</th>
        <th>Date d'achat</th>
        <th>Prix</th>
        <th>Note</th>
      </tr>
      </thead>
      <tbody>
      <tr v-for="game in games">
        <td>{{ game.gameTitle }}</td>
        <td>{{ game.purchaseDate }}</td>
        <td>{{ game.price }}</td>
        <td>{{ game.rate }}</td>
      </tr>
      </tbody>
    </table>
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
.table {
  background-color: #ffffff;
  border-radius: var(--border-radius-meddium);
  border: 1px solid var(--border-color);
  overflow: hidden;
}

.table-title{
  margin: 1rem;
}

.table table {
  width: 100%;
}

table, tr, td {
  border: none;
  border-collapse: collapse;
}

thead {
  color: #475569;
  background-color: #e2e8f0;
}

thead tr th, tbody tr td {
  text-align: start;
  padding: 1rem;
}

tbody tr:nth-child(odd) {
  background: #f8f8f8;
}

</style>
