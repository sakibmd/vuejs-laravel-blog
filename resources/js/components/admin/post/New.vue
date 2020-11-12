<template>
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-around">
                <!-- left column -->

                <div class="col-md-10">
                    <!-- general form elements -->

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add New Post</h3>
                        </div>

                        <!-- /.card-header -->

                        <!-- form start -->

                        <form
                            role="form"
                            enctype="multipart/form-data"
                            @submit.prevent="addNewPost()"
                        >
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Title</label>

                                    <input
                                        type="text"
                                        class="form-control"
                                        id="title"
                                        placeholder="post title.."
                                        v-model="form.title"
                                        name="title"
                                        :class="{
                                            'is-invalid': form.errors.has(
                                                'title'
                                            )
                                        }"
                                    />

                                    <has-error
                                        :form="form"
                                        field="title"
                                    ></has-error>
                                </div>

                                <div class="form-group">
                                    <label for="descriptionId"
                                        >Description</label
                                    >

                                    <!-- <textarea type="text" class="form-control" id="description" placeholder="post description.." v-model="form.description" name="description" :class="{ 'is-invalid': form.errors.has('description') }">
    
                                        </textarea> -->

                                    <markdown-editor
                                        placeholder="post description.."
                                        v-model="form.description"
                                    ></markdown-editor>

                                    <has-error
                                        :form="form"
                                        field="description"
                                    ></has-error>
                                </div>

                                <div class="form-group">
                                    <label>Select</label>

                                    <select
                                        class="form-control"
                                        :class="{
                                            'is-invalid': form.errors.has(
                                                'category_id'
                                            )
                                        }"
                                        v-model="form.category_id"
                                    >
                                        <option disabled value=""
                                            >Select One</option
                                        >

                                        <option
                                            v-for="category in getAllCategory"
                                            :value="category.id"
                                            :key="category.id"
                                        >
                                            {{ category.category_name }}
                                        </option>
                                    </select>

                                    <has-error
                                        :form="form"
                                        field="category_id"
                                    ></has-error>
                                </div>

                                <div class="form-group">
                                    <input
                                        @change="changePhoto($event)"
                                        name="photo"
                                        type="file"
                                        :class="{
                                            'is-invalid': form.errors.has(
                                                'photo'
                                            )
                                        }"
                                    />

                                    <img
                                        :src="form.photo"
                                        width="80"
                                        height="80"
                                        alt="preview"
                                    />

                                    <has-error
                                        :form="form"
                                        field="photo"
                                    ></has-error>
                                </div>
                            </div>

                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- /.card -->
                </div>
            </div>

            <!-- /.row -->
        </div>

        <!-- /.container-fluid -->
    </section>
</template>
<script>
export default {
    name: "New",
    data() {
        return {
            form: new Form({
                title: "",
                description: "",
                photo: "",
                category_id: ""
            })
        };
    },
    mounted() {
        this.$store.dispatch("allCategory");
    },
    computed: {
        getAllCategory() {
            return this.$store.getters.getCategory;
        }
    },
    methods: {
        changePhoto(event) {
            let file = event.target.files[0];
            if (file.size > 1048576) {
                Swal.fire({
                    type: "error",
                    title: "Oops...",
                    text:
                        "Something went wrong! The image size must be less than 1mb"
                });
            } else {
                let reader = new FileReader();
                reader.onload = event => {
                    this.form.photo = event.target.result;
                    console.log(event.target.result);
                };
                reader.readAsDataURL(file);
            }
        },
        addNewPost() {
            this.form
                .post("/savepost")
                .then(response => {
                    this.$router.push("/post-list");
                    Toast.fire({
                        icon: "success",
                        title: "Post added successfully"
                    });
                })
                .catch(() => {});
        }
    }
};
</script>

<style></style>
