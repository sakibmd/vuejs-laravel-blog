<template>
    <span id="sidebar">
        <div class="span4">
            <aside class="right-sidebar">
                <div class="widget">
                    <form class="form-search">
                        <input
                            placeholder="Type something"
                            type="text"
                            class="input-medium search-query"
                            v-model="keyword"
                            @keyup="RealSearch"
                        />
                        <button
                            type="submit"
                            class="btn btn-square btn-theme"
                            @click.prevent="RealSearch"
                        >
                            Search
                        </button>
                    </form>
                </div>
                <div class="widget">
                    <h5 class="widgetheading">Categories</h5>
                    <ul class="cat">
                        <li
                            v-for="category in allCategories"
                            :key="category.id"
                        >
                            <i class="icon-angle-right"></i
                            ><router-link :to="`/categories/${category.id}`">{{
                                category.category_name
                            }}</router-link
                            ><span> (20)</span>
                        </li>
                    </ul>
                </div>
                <div class="widget">
                    <h5 class="widgetheading">Latest posts</h5>
                    <ul class="recent">
                        <li
                            v-for="(post, index) in blogpost"
                            :key="post.id"
                            v-if="index < 5"
                        >
                            <img :src="`/uploadimage/${post.photo}`" alt="" />
                            <h6>
                                <router-link :to="`/blog/${post.id}`">{{
                                    post.title
                                }}</router-link>
                            </h6>
                            <p>
                                {{ post.description | shortlength(100, "...") }}
                            </p>
                            <hr />
                        </li>
                    </ul>
                </div>
            </aside>
        </div>
    </span>
</template>

<script>
import _ from "lodash";
export default {
    data() {
        return {
            keyword: ""
        };
    },
    mounted() {
        this.$store.dispatch("allCategoriesForSidebar");
        this.$store.dispatch("getBlogPost");
    },
    computed: {
        allCategories() {
            return this.$store.getters.categorySidebar;
        },
        blogpost() {
            return this.$store.getters.getBlogPost;
        }
    },
    methods: {
        getAllCategoryWisePost() {
            if (this.$route.params.id != null) {
                this.$store.dispatch(
                    "getPostByCategoryId",
                    this.$route.params.id
                );
            } else {
                this.$store.dispatch("getBlogPost");
            }
        },
        RealSearch: _.debounce(function() {
            this.$store.dispatch("searchPost", this.keyword);
        }, 1000)
    },
    watch: {
        $route(to, from) {
            this.getAllCategoryWisePost();
        }
    }
};
</script>

<style scoped></style>
