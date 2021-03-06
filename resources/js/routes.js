import AdminHome from "./components/admin/AdminHome.vue"
import CategoryList from "./components/admin/category/List.vue"
import AddCategory from "./components/admin/category/New.vue"
import EditCategory from "./components/admin/category/Edit.vue"

import PostList from "./components/admin/post/List.vue"
import AddPost from "./components/admin/post/New.vue"
import EditPost from "./components/admin/post/Edit.vue"
import PostsDetails from "./components/admin/post/SinglePost.vue"

import PublicHome from "./components/public/PublicHome.vue"
import BlogPost from "./components/public/blog/BlogPost.vue"
import SinglePost from "./components/public/blog/SingleBlog.vue"


import Login from "./components/public/Login.vue"

export const routes = [
    {
        path:'/login',
        component: Login
    },
    {
        path:'/home',
        component: AdminHome
    },

    {
        path:'/category-list',
        component: CategoryList
    },

    {
        path:'/add-category',
        component: AddCategory
    },
    {
        path:'/edit-category/:categoryid',
        component:EditCategory
    },

    //post
    {
        path:'/post-list',
        component: PostList
    },

    {
        path:'/add-post',
        component: AddPost
    },
    {
        path:'/edit-post/:postid',
        component:EditPost
    },
    {
        path:'/post-details/:id',
        component:PostsDetails
    },



    //public path
    {
        path:'/',
        component:PublicHome
    },

    {
        path:'/blog',
        component:BlogPost
    },

    {
        path:'/blog/:id',
        component:SinglePost
    },

    {
        path:'/categories/:id',
        component:BlogPost
    },

];