<!-- Add Person Modal -->
<div class="modal fade" id="addPersonModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="viewUserModal">Add Person</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="backEnd/people.php" enctype="multipart/form-data" method="POST">
          <div class="modal-body">
              <div class="form-group">
                <label for="">Full Name</label>
                <input type="text" name="fullName" class="form-control" placeholder="full name" required>
              </div>
              <div class="form-group">
                <label for="">Image</label>
                <input type="file" name="imageFile" class="form-control" placeholder="" required>
              </div>
              <div class="form-group">
                <label for="">Role</label>
                <input type="text" name="role" class="form-control" placeholder="role" required>
              </div>
              <div class="form-group">
                <label for="">Qualification</label>
                <input type="text" name="qualification" class="form-control" placeholder="qualification" required>
              </div>
              <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" placeholder="email" required>
              </div>
              
             
          </div>
          <div class="modal-footer">
            <button type="submit" name="addPerson" class="btn btn-primary">Save</button>
          </div>
        </form>
       
      </div>
    </div>
  </div>
  




  <!--  -->
  <!-- View Person Modal -->
<div class="modal fade" id="viewPersonModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="viewUserModal">Add Person</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" enctype="multipart/form-data">
          <div class="modal-body" style="height: 70vh; overflow: auto">
              <div class="form-group">
                <label for="">Full Name</label>
                <p class="form-control fullName">loo</p>
              </div>
              <div class="form-group">
                <label for="">Image</label>
                <img class="form-control image" style="height: auto; width: 70%" src="dist/img/avatar3.png" alt="Image">
              </div>
              <div class="form-group">
                <label for="">Role</label>
                <p class="form-control role"></p>
              </div>
              <div class="form-group">
                <label for="">Qualification</label>
                <p class="form-control qualification"></p>
              </div>
              <div class="form-group">
                <label for="">Email</label>
                <p class="form-control email"></p>
              </div>
              
             
          </div>
          <div class="modal-footer">
            <button type="submit" name="addPerson" class="btn btn-primary">Save</button>
          </div>
        </form>
       
      </div>
    </div>
  </div>
  
















<!-- Edit Person Modal -->
<div class="modal fade" id="editPersonModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="viewUserModal">Edit Person</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" enctype="multipart/form-data">
          <div class="modal-body" style="height: 70vh; overflow: auto">
              <div class="form-group">
                <label for="">Full Name</label>
                <input type="text" name="fullName" class="form-control fullName" placeholder="full name" required>
              </div>
              <div class="form-group">
                <label for="">Image</label>
                <div style="width: 50%; height:auto; padding-bottom: 10px">
                  <img class="image" src="dist/img/photo3.jpg" style="width: 100%;" alt="">
                </div>
                <input type="file" name="imageFile" class="form-control " placeholder="">

              </div>
              <div class="form-group">
                <label for="">Role</label>
                <input type="text" name="roll" class="form-control role" placeholder="role" required>
              </div>
              <div class="form-group">
                <label for="">Qualification</label>
                <input type="text" name="qualification" class="form-control qualification" placeholder="qualification" required>
              </div>
              <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control email" placeholder="email" required>
              </div>
              
             
          </div>
          <div class="modal-footer">
            <button type="submit" name="addPerson" class="btn btn-primary">Save</button>
          </div>
        </form>
       
      </div>
    </div>
  </div>
  


























































  