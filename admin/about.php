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
              <li class="breadcrumb-item"><a href="#">Dashbord</a></li>
              <li class="breadcrumb-item active">About Us</li>
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
                        <h4 class="card-title"><strong>About Us</strong></h4>
                    </div>
                    <div class="card-body">
                        <form action="">
                        <textarea name="about_us" id="summernote" cols="30" rows="2" class="form-control summernote"> <?php echo  is_file('../about.html') ? file_get_contents('../about.html') : "" ?></textarea>
                        <button class="btn btn-success">Update</button>
                        </form>
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