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
                    <button class="btn btn-primary">Add Category</button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Sl</th>
                    <th>Category Name</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Laravel
                    <td>
                        <a href="" class="btn btn-info">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
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

}
</script>

<style>

</style>