<template>
    <div>
        <section class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-8 ">
                        <div class="card ">
                            <div class="card-header">
                                <h3 class="card-title">Category List</h3>
                                <div class="card-tools">
                                    <button class="btn btn-primary">
                                        <router-link
                                            to="/add-category"
                                            style="color:white"
                                        >
                                            Add Category
                                        </router-link>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table
                                    id="example2"
                                    class="table table-bordered table-hover"
                                >
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Category Name</th>
                                            <th>Created</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr
                                            v-for="(category,
                                            index) in getallCategory"
                                            :key="category.id"
                                        >
                                            <td>{{ index + 1 }}</td>
                                            <td>
                                                {{ category.category_name }}
                                            </td>
                                            <td>
                                                {{
                                                    category.created_at
                                                        | timeformat
                                                }}
                                            </td>
                                            <td>
                                                <router-link
                                                    class="btn btn-info"
                                                    :to="
                                                        `/edit-category/${category.id}`
                                                    "
                                                    >Edit</router-link
                                                >
                                                <a
                                                    href=""
                                                    @click.prevent="
                                                        deleteCategory(
                                                            category.id
                                                        )
                                                    "
                                                    class="btn btn-danger"
                                                    >Delete</a
                                                >
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
    </div>
</template>

<script>
export default {
    name: "List",
    mounted() {
        this.$store.dispatch("allCategory");
    },
    computed: {
        getallCategory() {
            return this.$store.getters.getCategory;
        }
    },
    methods: {
        deleteCategory(id) {
            axios.get("/category/" + id).then(() => {
                this.$store.dispatch("allCategory");
                Toast.fire({
                    icon: "success",
                    title: "Category deleted successfully"
                });
            });
        }
    }
};
</script>

<style></style>
