import Axios from "axios"

export default {
    state: {
        category: [],
        post: [],
        postDetailsAdminPanel: [],
        blogpost: [],
        singlepost: [],
        allCategoriesForSidebar: [],
        latestpost: [],
        totalUsers: []
    },
    getters: {
        getCategory(state) {
            return state.category
        },
        getPost(state) {
            return state.post
        },
        postDetailsAdminPanel(state) {
            return state.postDetailsAdminPanel
        },
        getBlogPost(state) {
            return state.blogpost
        },
        singlePost(state) {
            return state.singlepost
        },
        categorySidebar(state) {
            return state.allCategoriesForSidebar
        },
        latestPost(state) {
            return state.latestpost
        },
        totalUsers(state) {
            return state.totalUsers
        },


    },
    actions: {
        allCategory(context) {
            axios.get('/category')
                .then((response) => {
                    context.commit('categories', response.data.categories)

                })
        },
        getAllPost(context) {
            axios.get('/posts')
                .then((response) => {
                    context.commit('posts', response.data.posts)

                })
        },
        getPostDetailsAdminPanel(context, payload) {
            axios.get('/post-details/' + payload)
                .then((response) => {
                    context.commit('getPostDetailsAdminPanel', response.data.post)
                })
        },
        getBlogPost(context) {
            axios.get('/blogposts')
                .then((response) => {
                    context.commit('getBlogPost', response.data.posts)

                })
        },
        getPostById(context, payload) {
            axios.get('/singlepost/' + payload)
                .then((response) => {
                    context.commit('singlePost', response.data.post)
                })
        },
        allCategoriesForSidebar(context) {
            axios.get('/categories')
                .then((response) => {
                    context.commit('allCategoriesForSidebar', response.data.categories)
                })
        },
        getPostByCategoryId(context, payload) {
            axios.get('/categorywisepost/' + payload)
                .then((response) => {
                    context.commit('getPostByCategoryId', response.data.posts)
                })
        },
        searchPost(context, payload) {
            axios.get('/search?s=' + payload)
                .then((response) => {
                    context.commit('searchPost', response.data.posts)
                })
        },
        latestPost(context) {
            axios.get('/latestpost')
                .then((response) => {
                    context.commit('latestpost', response.data.posts)
                })
        },
        totalUser(context) {
            axios.get('/totalUsers')
                .then((response) => {
                    context.commit('totalUsers', response.data.totalUsers)
                })
        },

    },
    mutations: {
        categories(state, date) {
            return state.category = date
        },
        posts(state, date) {
            return state.post = date
        },
        getPostDetailsAdminPanel(state, date) {
            return state.postDetailsAdminPanel = date
        },
        getBlogPost(state, payload) {
            return state.blogpost = payload
        },
        singlePost(state, payload) {
            return state.singlepost = payload
        },
        allCategoriesForSidebar(state, payload) {
            return state.allCategoriesForSidebar = payload
        },
        getPostByCategoryId(state, payload) {
            return state.blogpost = payload
        },
        searchPost(state, payload) {
            return state.blogpost = payload
        },
        latestpost(state, payload) {
            return state.latestpost = payload
        },
        totalUsers(state, payload) {
            return state.totalUsers = payload
        },
    },

}
