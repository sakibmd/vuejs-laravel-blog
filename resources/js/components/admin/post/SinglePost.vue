<template>
    <span id="single-post">
        
    </span>
</template>
<script>
export default {
    name: "List",
    mounted() {
        this.$store.dispatch("getAllPost");
    },
    computed: {
        getAllPost() {
            return this.$store.getters.getPost;
        }
    },
    methods: {
        
    }
};
</script>

<style></style>
