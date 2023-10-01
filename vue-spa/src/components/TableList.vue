<template>
  <div class="table">
    <h1 class="table-title">{{ tableTitle }}</h1>
    <table>
      <thead>
      <tr>
        <th v-for="header in headers">
          {{ header }}
        </th>
      </tr>
      </thead>
      <tbody>
      <tr v-for="game in data">
        <td v-for="field in fields">
          {{ game[field] }}
        </td>
      </tr>
      </tbody>
    </table>
  </div>
</template>

<script setup>
const props = defineProps({
  tableTitle: {
    type: String,
    required: true,
  },
  headers: {
    type: Array,
    required: true,
  },
  data: {
    type: Array,
    required: true,
  },
  fields: {
    type: Array,
    required: true,
  },
});
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