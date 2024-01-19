<!-- View User Modal -->
<div class="modal fade" id="addMenuModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="addMenuModal">Add Menu</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="backEnd/addMenu.php" method="post">
        <div class="modal-body">
            <div class="form-group">
                <label for="">Menu Name</label>
                <input type="text" name="menuName" class="form-control" placeholder="Menu Name" required>
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <textarea name="description" id="" class="form-control" cols="30" rows="5" placeholder="Description"></textarea>
            </div>
           
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="addMenu" class="btn btn-primary">Add</button>
        </div>
      </form>
     
    </div>
  </div>
</div>





<!-- View User Modal -->
<div class="modal fade" id="viewMenuModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="">View Menu</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form  method="post">
        <div class="modal-body">
          <input type="hidden" name="menuId" class="menuId">
            <div class="form-group">
                <label for="">Menu Name</label>
                
                <p class="form-control menuName" ></p>
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <textarea name="description" id="" class="form-control menuDescription" cols="30" rows="5" placeholder="" readonly></textarea>
            </div>
           
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </form>
     
    </div>
  </div>
</div>




<div class="modal fade" id="editMenuModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="">Edit Menu</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="backEnd/addMenu.php" method="post">
        <div class="modal-body">
          <input type="hidden" name="menuId" class="menuid">
            <div class="form-group">
                <label for="">Menu Name</label>
                <input type="text" class="form-control menuname" name="menuName" required>
                
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <textarea name="description" id="" class="form-control menudescription" cols="30" rows="5" placeholder="" ></textarea>
            </div>
           
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="updateMenu" class="btn btn-success">Update</button>
        </div>
      </form>
     
    </div>
  </div>
</div>
