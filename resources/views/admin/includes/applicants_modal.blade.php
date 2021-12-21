
<!-- Add -->
<div class="modal fade" id="applicant_modal">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
          <div class="container">

          <div class="row ">
            <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><i class="ni ni-fat-remove" style="color: black;"></i></span></button>
            <div class="col-xl-12 d-flex justify-content-center align-items-stretch">
              <h2 class="modal-title name"><b></b></h2><br>
            </div>
            <div class="col-xl-12  justify-content-center align-items-stretch">
              <form action="{{url('create/savings_plan')}}" class="form-horizontal" method="POST">
                @csrf
                <div class="form-row">
                  <div class="col-xl-6">
                    <label>Email</label>
                    <input type="text" name="savings_plan"  placeholder="Enter Text" readonly="" class="form-control email">
                  </div>

                  <div class="col-xl-6">
                    <label>Address</label>
                    <input type="text" class="form-control address" readonly="">
                  </div>

                  <div class="col-xl-6">
                    <label>Postal Code</label>
                    <input type="text" class="form-control postal_code" readonly="">
                  </div>

                  <div class="col-xl-6">
                    <label>State</label>
                    <input type="text" class="form-control state" readonly="">
                  </div>

           

                  <div class="col-xl-6">
                    <label>Budget for Fees</label>
                    <input type="text" class="form-control budget_for_fees" readonly="">
                  </div>

                  <div class="col-xl-6">
                    <label>Date of Birth</label>
                    <input type="text" class="form-control d_o_b" readonly="">
                  </div><br>
            </div>
          </div>
            <div class="col-xl-12 d-flex justify-content-center align-items-stretch">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
             
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
              <form action="{{url('delete/savings-plan')}}" class="form-horizontal" method="post">
                @csrf
                <input type="hidden" name="id" class="prodid">
                <div class="text-center">
                    <p class="description"><b>DELETE SAVINGS PLAN</b></p>
                    <h2 class="description name"></h2>
                </div>
        
            <div class="col-xl-12 d-flex justify-content-cente align-items-stretch">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button  type="submit" class="btn btn-warning btn-flat pull-right"><i class="fa fa-save"></i> Delete</button>
              </form>
            </div>

        </div>
        
    </div>
</div>
</div>
</div>













