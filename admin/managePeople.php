<?php include("./includes/hearder.php") ?>
  <!-- /.navbar -->


 <?php $page = "people"; include("./includes/sidebar.php") ?>
 <?php include("./modals/peopleModal.php") ?>
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
              <li class="breadcrumb-item"><a href="#">People</a></li>
              <li class="breadcrumb-item active">Manage People</li>
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
                        <h4 class="card-title"><strong>People</strong></h4>
                        <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#addPersonModal">
                        <i class="fa-solid fa-plus"></i> Add
                        </button>
                    </div>
                    <div class="card-body">
                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Full Name</th>
                                    <th>Picture</th>
                                    <th>Roll</th>
                                    <th>Qualification</th>
                                    <th>Email</th>

                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                              <?php  
                                include("db_connection.php");
                                $count = 1;
                                $sql = mysqli_query($conn, "SELECT * FROM peopletbl");
                                while($row = mysqli_fetch_assoc($sql)){

                               
                              ?>
                                <tr>
                                    <td><?php echo $count ?></td>
                                    <td><?php echo $row["fullName"] ?></td>
                                    <td>
                                      <div style="width: 50px">
                                        <img style="width: 100%;" src="./assets/uploaded_images/<?php echo $row["imageFile"] ?>" alt="">
                                      </div>
                                    </td>
                                    <td><?php echo $row["role"] ?></td>
                                    <td><?php echo $row["qualification"] ?></td>
                                    <td><?php echo $row["email"] ?></td>
                                    <td>
                                    <button type="button" value="<?php echo $row["id"] ?>" class="btn btn-info viewPersonBtn" data-bs-toggle="modal" data-bs-target="">View</button>
                                    <button type="button" value="<?php echo $row["id"] ?>" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editPersonModal">Edit</button>
                                    <button onclick="return confirm('Did you want to delete this user?')" class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                                <?php  
                                  $count++;
                                }
                                ?>
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