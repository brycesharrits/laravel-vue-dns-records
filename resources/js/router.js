import { createRouter, createWebHistory } from 'vue-router';
import ExampleComponent from './ExampleComponent.vue';

const routes = [
  {
    path: '/example',
    component: ExampleComponent,
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
