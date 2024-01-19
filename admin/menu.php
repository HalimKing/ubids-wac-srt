<?php include("./includes/hearder.php") ?>
  <!-- /.navbar -->


 <?php $page = "menu"; include("./includes/sidebar.php") ?>
 <?php include("./modals/menuModal.php") ?>
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
              <li class="breadcrumb-item"><a href="#">Menu</a></li>
              <li class="breadcrumb-item active">Manage Menues</li>
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
                        <h4 class="card-title"><strong>Menus</strong></h4>
                        <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#addMenuModal">
                        <i class="fa-solid fa-plus"></i> Add
                        </button>
                    </div>
                    <div class="card-body">
                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Menu Name</th>
                                    <th>Description</th>

                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    include("./db_connection.php");
                                    $count = 1;
                                    $sql = mysqli_query($conn, "SELECT * FROM menutbl");
                                    while($row = mysqli_fetch_assoc($sql)){

                                    
                                 ?>
                                <tr>
                                    <td><?php echo $count  ?></td>
                                    <td><?php echo $row["menuName"]  ?></td>
                                    <td><?php echo $row["description"]  ?></td>
                                    <td>
                                    <button type="button"  id="viewMenuBtn" value="<?php echo $row["id"] ?>" class="btn btn-info" data-bs-toggle="modal" data-bs-target="">View</button>
                                    <button type="button" id="editMenuBtn" value="<?php echo $row["id"] ?>" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="">Edit</button>
                                    <button onclick="return confirm('Did you want to delete this user?')" class="btn btn-danger"><a href="backEnd/addMenu.php?updateMenuId=<?php echo $row["id"] ?>" style="color: white;">Delete</a></button>
                                    </td>
                                </tr>
                                <?php } ?>
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


  


 <?php include("./includes/footer.php") ?>

 
  <script>
    
  </script>