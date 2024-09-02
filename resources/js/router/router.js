import { createWebHistory, createRouter } from "vue-router";

const routes = [
    {
        path: "/",
        name: "main",
        component: () => import('../../componets/page/main.vue'),
    },

    {
        path: "/home",
        name: "home",
        component: () => import('../../componets/page/home.vue'),
    },

    {
        path: "/about",
        name: "about",
        component: () => import('../../componets/page/about.vue'),
    },

    {
        path: "/:pathMatch(.*)*",
        name: "pageNotFound",
        component: () => import('../../componets/page/notFoundPage.vue'),
    },

    {
        path: "/hotel",
        name: "hotel",
        component: () => import('../../componets/hotel/show.vue'),
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
