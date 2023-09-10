import { createApp } from 'vue'
import App from './App.vue'
import router from "@/router";
import './assets/css/icons.css'
import './assets/css/variables.css'

createApp(App)
    .use(router)
    .mount('#app')
