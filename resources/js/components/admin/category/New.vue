<template>
  <div>
     
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" @click.prevent="addCategory()">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputcategoryEmail1">Add New Category</label>
                    <input type="text" class="form-control" id="category" placeholder="Enter category name"
                    name="cat_name" v-model="form.cat_name">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  </div>
</template>

<script>
export default {
    name: "New",
    data () {
        return {
            // Create a new form instance
            form: new Form({
                cat_name: '',
            })
        }
    },
    methods: {
        addCategory() {
        // Submit the form via a POST request
        this.form.post('/add-category')
            .then((response) => {
                console.log(response.data)
            })
            .catch(() => {

            })
        }
    }
    }
</script>

<style>

</style>