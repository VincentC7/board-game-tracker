import { createRouter, createWebHistory } from 'vue-router'
import DashboardPage from "@/pages/DashboardPage.vue";
import GamesPage from "@/pages/GamesPage.vue";

const routes = [
    {
        path: '/',
        name: 'dashboard',
        component: DashboardPage
    },
    {
        path: '/games',
        name: 'games',
        component: GamesPage
    },
]

const router = createRouter({ history: createWebHistory(), routes })
export default router
