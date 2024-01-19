<?php include("./includes/hearder.php") ?>
  <!-- /.navbar -->

 <?php include("./includes/sidebar.php") ?>
 <?php include("./modals/manage_users_modal.php") ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Settings</a></li>
              <li class="breadcrumb-item active">Manage Users</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class=" card-header">
                        <h4 class="card-title"><strong>Users</strong></h4>
                        <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#addUserModal">
                        <i class="fa-solid fa-plus"></i> Add User
                        </button>
                    </div>
                    <div class="card-body">
                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Staff ID</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>102020</td>
                                    <td>John Doe</td>
                                    <td>email@mail.com</td>
                                    <td>+2335456655566</td>
                                    <td>
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#viewUserModal">View</button>
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editUserModal">Edit</button>
                                    <button onclick="return confirm('Did you want to delete this user?')" class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                            
                        </table>
                    </div>
                  </div>
                </div>
            </div>
        </div>
       
      </div><!-- /.container-fluid -->
    </section>

    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  
<script>
</script>


 <?php include("./includes/footer.php") ?>