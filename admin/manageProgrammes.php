<?php include("./includes/hearder.php") ?>
  <!-- /.navbar -->


 <?php $page = "addprogrammes"; include("./includes/sidebar.php") ?>
 <?php include("./modals/programmeModal.php") ?>
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
              <li class="breadcrumb-item"><a href="#">Programmes</a></li>
              <li class="breadcrumb-item active">Manage Programmes</li>
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
                        <h4 class="card-title"><strong>Menues</strong></h4>
                        <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#addProgrammeModal">
                        <i class="fa-solid fa-plus"></i> Add Programme
                        </button>
                    </div>
                    <div class="card-body">
                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th style="width: 50%;">Programme Name</th>
                                    <th>Date Created</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                              <?php 
                                include("./db_connection.php");

                                $count = 1;
                                $sql = mysqli_query($conn, "SELECT * FROM programmestbl");
                                while($row = mysqli_fetch_assoc($sql)){

                                
                              ?>
                                <tr>
                                    <td><?php echo $count ?></td>
                                    <td style="text-transform: capitalize;"><?php echo $row["programmeName"] ?></td>
                                    <td><?php echo $row["dateCreated"] ?></td>
                                    <td>
                                    <button type="button" id="viewProgrammeBtn" class="btn btn-info" value="<?php echo $row["id"] ?>" data-bs-toggle="modal" data-bs-target="">View</button>

                                    <button type="button" id="editProgrammeBtn" class="btn btn-warning" value="<?php echo $row["id"] ?>" data-bs-toggle="modal" data-bs-target="">Edit</button>

                                    <button onclick="return confirm('Are you sure you want to delete this programme?')" class="btn btn-danger"><a href="backEnd/programme.php?delteProgrammeId=<?php echo $row["id"]  ?>" style="color: white">Delete</a></button>
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


  



 <?php include("./includes/footer.php") ?>