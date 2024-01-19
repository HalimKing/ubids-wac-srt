<!-- Add Programme Modal -->
<div class="modal fade" id="addProgrammeModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" >
    
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="">Add Programmes</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="backEnd/programme.php" method="post">
        <div class="modal-body">
            <div class="form-group">
                <label for="">Programme Name</label>
                <input type="text" name="name" class="form-control" placeholder="Menu Name" required>
            </div>
            <div class="form-group overflow-auto">
                <label for="">Description</label>
                <textarea  name="content"  id="summernote" class="form-control summernote" cols="30" rows="5" placeholder="Description"></textarea>
            </div>
           
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="addProgramme" class="btn btn-primary">Add</button>
        </div>
      </form>
     
    </div>
  </div>
</div>












<!-- View Programme Modal -->
<div class="modal fade" id="viewProgrammeModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" >
    
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="">View Programmes</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form>
        <div class="modal-body">
            <input type="hidden" name="programmeId" class="form-control programmeId">
            <div class="form-group">
                <label for="">Programme Name</label>
                <input type="text" name="name" class="form-control programmeName" style="text-transform: capitalize;" placeholder="Menu Name" required>
            </div>
            <div class="form-group">
                <label class="pb-3" for="">Description</label>
                <p class="file"></p>
            </div>
           
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="addProgramme" class="btn btn-primary">Add</button>
        </div>
      </form>
     
    </div>
  </div>
</div>



























<!-- Edit Programme Modal -->
<div class="modal fade" id="editProgrammeModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" >
    
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="">Edit Programmes</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="backEnd/programme.php" method="post">
        <div class="modal-body">
            <input type="hidden" name="programmeId" class="form-control programmeId">
            <div class="form-group">
                <label for="">Programme Name</label>
                <input type="text" name="programmeName" class="form-control programmeName" style="text-transform: capitalize;" placeholder="Menu Name" required>
            </div>
            <div class="form-group">
                <label class="pb-3" for="">Description</label>
                <textarea  name="content"  id="" class="form-control summernote file2" cols="30" rows="5" placeholder="Description"></textarea>
            </div>
           
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="updateProgramme" class="btn btn-success">Update</button>
        </div>
      </form>
     
    </div>
  </div>
</div>

