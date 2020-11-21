<template>
  <span id="single-post">
    <div class="card justify-content-center">
      <div class="card-header bg-info">
        <strong>Details</strong>
      </div>
      <div class="card-body">
        <table class="table table-hover">
          <tr>
            <th>Post Title</th>
            <td>
              {{ getPostDetails.title }}
            </td>
          </tr>
          <tr>
            <th>Posted By</th>
            <td>
              <p v-if="getPostDetails.user">{{ getPostDetails.user.name }}</p>
            </td>
          </tr>
          <tr>
            <th>Category</th>
            <td>
              <p v-if="getPostDetails.category">
                {{ getPostDetails.category.category_name }}
              </p>
            </td>
          </tr>
          <tr>
            <th>Description</th>
            <td>
              <p class="text-justify">{{ getPostDetails.description }}</p>
            </td>
          </tr>
        </table>
      </div>
      <div class="card-footer">
        <router-link
          class="btn btn-danger btn-sm m-1"
          :to="`/post-list`"
          >Back</router-link
        >
      </div>
    </div>
  </span>
</template>
<script>
export default {
  name: "List",
  mounted() {
    this.$store.dispatch("getPostDetailsAdminPanel", this.$route.params.id);
  },
  computed: {
    getPostDetails() {
      return this.$store.getters.postDetailsAdminPanel;
    },
  },
  methods: {},
};
</script>

<style></style>
