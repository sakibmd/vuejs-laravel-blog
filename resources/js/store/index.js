import Axios from "axios"

export default {
    state: {
        category: [],
        post: []
    },
    getters: {
        getCategory(state) {
            return state.category
        },
        getPost(state) {
            return state.post
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
        }
    },
    mutations: {
        categories(state, date) {
            return state.category = date
        },
        posts(state, date) {
            return state.post = date
        }
    },
   
    
}