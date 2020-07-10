import VueRouter from 'vue-router';
import PostsComponent from './components/PostsComponent';
import HeaderComponent from './components/HeaderComponent';
require('./bootstrap');

window.Vue = require('vue');

Vue.use(VueRouter);
const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/posts',
            name: 'user.posts',
            component: PostsComponent,
        }
    ]
});

Vue.component('header-component', HeaderComponent);

const app = new Vue({
    el: '#app',
    router
});
