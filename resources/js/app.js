import VueRouter from 'vue-router';
import PostsComponent from './components/PostsComponent';
import HeaderComponent from './components/HeaderComponent';
import HomeComponent from './components/HomeComponent';
import AdminHeaderComponent from './components/Admin/AdminHeaderComponent';
import AdminQAComponent from './components/Admin/AdminQAComponent';
import AdminMembersComponent from './components/Admin/AdminMembersComponent';
import AdminPostsComponent from './components/Admin/posts/AdminPostsComponent';
import AdminPostsCreate from './components/Admin/posts/AdminPostsCreate';
import AdminPostsShow from './components/Admin/posts/AdminPostsShow';
import AdminPostsComment from './components/Admin/posts/AdminPostsComment';
import AdminPostsEdit from './components/Admin/posts/AdminPostsEdit';
require('./bootstrap');

window.Vue = require('vue');

Vue.use(VueRouter);
const router = new VueRouter({
    routes: [
        {
            path: '/posts',
            name: 'user.posts',
            component: PostsComponent,
        },
    
        {
            path: '/',
            name: 'admin.home',
            component: HomeComponent,
        },
    
        {
            path: '/admin/posts',
            name: 'admin.posts',
            component: AdminPostsComponent,   
        },
    
        {
            path: '/admin/post/:postId',
            name: 'admin.post.show',
            component: AdminPostsShow,
            props: true,
        },
    
        {
            path: '/admin/post/create',
            name: 'admin.post.create',
            component: AdminPostsCreate,
        },

        {
            path: '/admin/post/edit',
            name: 'admin.post.edit',
            component: AdminPostsEdit,
        },
    
        {
            path: '/admin/comments',
            name: 'admin.comments',
            component: AdminPostsComment,
        },
    
        {
            path: '/admin/qa',
            name: 'admin.qa',
            component: AdminQAComponent,   
        },
    
        {
            path: '/members',
            name: 'admin.members',
            component: AdminMembersComponent,   
        },    
    ]
})
    
Vue.component('header-component', HeaderComponent);
Vue.component('admin-header', AdminHeaderComponent);

const app = new Vue({
    el: '#app',
    router
});
