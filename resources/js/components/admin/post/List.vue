<template>
    <div>
    
        <section class="content">
    
            <div class="container-fluid">
    
                <div class="row justify-content-center">
    
                    <div class="col-12 ">
    
                        <div class="card ">
    
                            <div class="card-header">
    
                                <h3 class="card-title">Post List</h3>
    
                                <div class="card-tools">
    
    
    
                                    <router-link to="/add-post" style="color:white" class="btn btn-primary">
    
                                        Add Post
    
                                    </router-link>
    
    
    
                                </div>
    
                            </div>
    
                            <!-- /.card-header -->
    
                            <div class="card-body">
    
                                <table id="example2" class="table table-bordered table-hover">
    
                                    <thead>
    
                                        <tr>
    
                                            <th>SL</th>
    
                                            <th>User</th>
    
                                            <th>Category</th>
    
                                            <th>Title</th>
    
                                            <th>Description</th>
    
                                            <th>Photo</th>
    
                                            <th>Actions</th>
    
                                        </tr>
    
                                    </thead>
    
                                    <tbody>
    
                                        <tr v-for="(post, index) in getAllPost" :key="post.id">
    
                                            <td>{{ index+1 }}</td>
    
                                            <td v-if="post.user">{{ post.user.name }}</td>
    
                                            <td v-if="post.category">{{ post.category.category_name }}</td>
    
                                            <td>{{ post.title | shortlength(30, "...") }}</td>
    
                                            <td>{{ post.description | shortlength(40, "...") }}</td>
    
                                            <td><img :src="post.photo" height="45" width="50"></td>
    
                                            <td>
    
    
    
                                                <a href="" class="btn btn-info btn-sm">Edit</a>
    
                                                <a href="" class="btn btn-danger btn-sm">Delete</a>
    
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
        this.$store.dispatch("getAllPost")
    },
    computed: {
        getAllPost() {
            return this.$store.getters.getPost
        }
    },
}
</script>

<style>

</style>