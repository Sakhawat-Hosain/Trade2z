<div class="button-add-crypto">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" 
    data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add Currency</button>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Currency</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="POST" action="cryptoadd.php" enctype="multipart/form-data">
                <div class="">
                  <label for="recipient-name" class="col-form-label">image:</label>
                  <input type="file" class="form-control" id="recipient-name" accept=".jpg,.png,.jpeg" name="img">
                </div>
                <div class="">
                  <label for="recipient-name" class="col-form-label">Name:</label>
                    <input type="text" class="form-control" id="recipient-name" name="Name">
                </div>         
                <div class="">
                  <label for="recipient-name" class="col-form-label">Value:</label>
                  <input type="text" class="form-control" id="recipient-name" name="Value">
                </div>
                <div class="">
                            <label for="graph" class="col-form-label">Graph:</label>
                            <select class="form-control" id="graph" name="Graph">
                                <option value="up">Up</option>
                                <option value="down">Down</option>
                            </select>
                  </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" name="submit" class="btn btn-primary">Confirm</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
</div>