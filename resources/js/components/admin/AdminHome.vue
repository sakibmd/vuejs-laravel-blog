<template>
  <div class="">
    <div class="row justify-content-center">
      <h1 class="my-5">Welcome to Admin Panel</h1>
    </div>

    <div class="row text-center">
      <div class="col-md-4">
        <div class="box">
          <h4>Total User</h4>
          <h1 class="my-3">{{ getTotalUsers }}</h1>
        </div>
      </div>
      <div class="col-md-4">
        <div class="box">
          <h4>Total Category</h4>
          <h1 class="my-3">{{ getallCategory.length }}</h1>
        </div>
      </div>
      <div class="col-md-4">
        <div class="box">
          <h4>Total Posts</h4>
          <h1 class="my-3">{{ getAllPost.length }}</h1>
        </div>
      </div>
    </div>
  </div>
</template>


<script>
export default {
  mounted() {
    this.$store.dispatch("totalUser");
    this.$store.dispatch("allCategory");
    this.$store.dispatch("getAllPost");
  },
  computed: {
    getallCategory() {
      return this.$store.getters.getCategory;
    },
    getAllPost() {
      return this.$store.getters.getPost;
    },
    getTotalUsers() {
      return this.$store.getters.totalUsers;
    },
  },
};
</script>

<style scoped>
.box {
  background: rgb(150, 202, 195);
  padding: 40px;
  margin: 10px 20px;
}
</style>
