
<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
          <div class="container">

          <div class="row ">
            <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><i class="ni ni-fat-remove" style="color: black;"></i></span></button>
            <div class="col-xl-12 d-flex justify-content-center align-items-stretch">
              <h2 class="modal-title "><b>Add New Deposit Plan</b></h2><br>
            </div>
            <div class="col-xl-12  justify-content-center align-items-stretch">
              <form action="{{url('create/deposit_plan')}}" class="form-horizontal" method="post">
                @csrf
                <div class="form-row">
                  <div class="col-md-12 form-group">
                    <input type="text" name="deposit_plan" placeholder="Enter Text" required="" class="form-control">
                  </div>
            </div>
          </div>
            <div class="col-xl-12 d-flex justify-content-center align-items-stretch">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button  type="submit" class="btn btn-primary btn-flat pull-right"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>

        </div>

    </div>
</div>
</div>
</div>






<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
          <div class="container">

          <div class="row ">
            <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><i class="ni ni-fat-remove" style="color: black;"></i></span></button>
            <div class="col-xl-12 d-flex justify-content-center align-items-stretch">
              <h2 class="modal-title name "></h2><br>
            </div>
            <div class="col-xl-12  justify-content-center align-items-stretch">
              <form action="{{url('edit/deposit_plan')}}" class="form-horizontal" method="post">
                @csrf
                <input type="hidden" name="id" class="prodid">
                <div class="form-row">
                  <div class="col-md-12 form-group">
                    <input type="text" name="deposit_plan" id="edit_type" required="" class="form-control">
                  </div>
            </div>
          </div>
            <div class="col-xl-12 d-flex justify-content-center align-items-stretch">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button  type="submit" class="btn btn-primary btn-flat pull-right"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>

        </div>
        
    </div>
</div>
</div>
</div>



<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
          <div class="container">

          <div class="row ">
            <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><i class="ni ni-fat-remove" style="color: black;"></i></span></button>
            <div class="col-xl-12 d-flex justify-content-center align-items-stretch">
              <h2 class="modal-title "><b>Deleting...</b></h2><br>
            </div>
            <div class="col-xl-12  justify-content-center align-items-stretch">
              <form action="{{url('delete/deposit_plan')}}" class="form-horizontal" method="post">
                @csrf
                <input type="hidden" class="prodid" name="id">
                <div class="text-center">
                    <p class="description"><b>DELETE DEPOSIT PLAN</b></p>
                    <h2 class="description name"></h2>
                </div>
        
            <div class="col-xl-12 d-flex justify-content-center align-items-stretch">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button  type="submit" class="btn btn-warning btn-flat pull-right"><i class="fa fa-save"></i> Delete</button>
              </form>
            </div>

        </div>
        
    </div>
</div>
</div>
</div>













