import VueRouter from 'vue-router';
import PostsComponent from './components/PostsComponent';
import HeaderComponent from './components/HeaderComponent';
import HomeComponent from './components/HomeComponent';
import AdminHeaderComponent from './components/Admin/AdminHeaderComponent';
import AdminPostsComponent from './components/Admin/AdminPostsComponent';
import AdminQAComponent from './components/Admin/AdminQAComponent';
import AdminMembersComponent from './components/Admin/AdminMembersComponent';
import AdminPostsCreate from './components/Admin/AdminPostsCreate';
require('./bootstrap');

window.Vue = require('vue');

Vue.use(VueRouter);
import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);

const routes = [
    {
        path: '/posts',
        name: 'user.posts',
        component: PostsComponent,
    },

    {
        path: '/admin/home',
        name: 'admin.home',
        component: HomeComponent,
    },

    {
        path: '/admin/posts',
        name: 'admin.posts',
        component: AdminPostsComponent,   
    },

    {
        path: '/admin/posts/create',
        name: 'posts.create',
        component: AdminPostsCreate,
    },

    {
        path: '/admin/qa',
        name: 'admin.qa',
        component: AdminQAComponent,   
    },

    {
        path: '/admin/members',
        name: 'admin.members',
        component: AdminMembersComponent,   
    },
]



Vue.component('header-component', HeaderComponent);
Vue.component('admin-header', AdminHeaderComponent);

const router = new VueRouter({ mode: 'history', routes: routes});
const app = new Vue(Vue.util.extend({ router })).$mount('#app');