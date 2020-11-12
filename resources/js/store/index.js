import Axios from "axios"

export default {
    state: {
        category: [],
        post: [],
        blogpost: [],
        singlepost: [],
    },
    getters: {
        getCategory(state) {
            return state.category
        },
        getPost(state) {
            return state.post
        },
        getBlogPost(state) {
            return state.blogpost
        },
        singlePost(state) {
            return state.singlepost
        }

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
        getBlogPost(context) {
            axios.get('/blogposts')
                .then((response) => {
                    context.commit('getBlogPost', response.data.posts)

                })
        },
        getPostById(context, payload) {
            axios.get('/singlepost/'+ payload)
                .then((response) => {
                    context.commit('singlePost', response.data.post)
                })
        }

    },
    mutations: {
        categories(state, date) {
            return state.category = date
        },
        posts(state, date) {
            return state.post = date
        },
        getBlogPost(state, payload) {
            return state.blogpost = payload
        },
        singlePost(state, payload) {
            return state.singlepost = payload
        }
    },


}
