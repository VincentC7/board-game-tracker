<template>
  <TableList
      table-title="Tableau de bord"
      :columns-names=columnsNames
      :data=games
      :fields=fields
  >
  </TableList>
</template>

<script setup>

import {onMounted, ref} from "vue";
import axios from "axios";
import TableList from "@/components/TableList.vue";

const games = ref([]);
const columnsNames = [
    "Titre",
    "Date d'achat",
    "Prix",
    "Note"
]

const fields = [
  "gameTitle",
  "purchaseDate",
  "price",
  "rate"
]

onMounted(() => {
  axios.get("http://127.0.0.1:8000/api/board_games")
      .then(response => {
        console.log(response.data["hydra:member"])
        games.value = response.data["hydra:member"];
      })
})
</script>
