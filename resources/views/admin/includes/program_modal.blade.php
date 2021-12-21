
<!-- Add -->
<div class="modal fade" id="add_program">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
          <div class="container">

          <div class="row ">
            <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><i class="ni ni-fat-remove" style="color: black;"></i></span></button>
            <div class="col-xl-12 d-flex justify-content-center align-items-stretch">
              <h2 class="modal-title "><b>Add New School Program </b></h2><br>
            </div>
            <div class="col-xl-12  justify-content-center align-items-stretch">
              <form action="{{url('create/program')}}" class="form-horizontal" method="post">
                @csrf
                
                <div class="form-row">
                  <div class="col-xl-12">
                    <label>Program Name</label>
                    <textarea id="editor2" type="text" name="program_name" placeholder="Description" required="" class="form-control" cols="10" rows="10"></textarea><br>
                  </div>

                  <div class="col-xl-6">
                      <input type="text" name="school_id" class="form-control"  list="schools" placeholder="Enter School Name">
                      <datalist id="schools">
                         @foreach($schools as $school)
                      <option value="{{$school->id}}">{{$school->school_name}}</option>
                      @endforeach
                      </datalist>
                     
                    <br>
                  </div>

                  <div class="col-xl-6">
                     <input type="number" name="tution_fee" placeholder="Enter Tuition fee" required="" class="form-control"><br>
                  </div>

                   <div class="col-xl-6">
                       <input type="number" name="application_fee" placeholder="Enter Application fee"  class="form-control"><br>
                   </div>

                   <div class="col-xl-12">
                     <label class="font-weight-bold">Requirements</label>
                    <textarea id="editor1" type="text" name="requirements" placeholder="Description" required="" class="form-control"></textarea><br>
                   </div>
                     
                    
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




























<!-- edit -->
<div class="modal fade" id="edit_modal">
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
              <form action="{{url('update_details')}}" class="form-horizontal" method="post">
                @csrf
                 <input type="hidden" name="id" class="program_id">
                <div class="form-row">            
                  <div class="col-xl-6">
                    <label>School Name</label>
                      <input type="text" name="school_id" class="form-control"  list="school_1" placeholder="Enter School Name">
                      <datalist id="school_1">
                         @foreach($schools as $school)
                      <option  value="{{$school->id}}">{{$school->school_name}}</option>
                      @endforeach
                      </datalist>
                     
                    <br>
                  </div>

                  <div class="col-xl-6">
                    <label>Tuition Fee</label>
                     <input type="number" name="tution_fee" placeholder="Enter Tuition fee" required="" class="form-control tution_fee"><br>
                  </div>

                   <div class="col-xl-6">
                    <label>Application Fee</label>
                       <input type="number" name="application_fee" placeholder="Enter Application fee"  class="form-control application_fee"><br>
                   </div>              
                     
                    
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





















<!-- description -->
<div class="modal fade" id="view_modal">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
          <div class="container">

            <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><i class="ni ni-fat-remove" style="color: black;"></i></span></button>
          
                <form action="{{url('update_requirements')}}" class="form-horizontal" method="post">
                   @csrf
                   <div class="col-xl-12">
                 <input type="hidden" name="id" class="program_id">
                  <label>Requirements</label>
                   <textarea id="editor3" type="text" name="requirements"  required="" class="form-control"></textarea><br>
                   <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button  type="submit" class="btn btn-primary btn-flat pull-right"><i class="fa fa-save"></i> Save</button>
              </div>
                </form>
            
            

        
    </div>
</div>
</div>
</div>





















<!-- description -->
<div class="modal fade" id="view_modal_2">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
          
            <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><i class="ni ni-fat-remove" style="color: black;"></i></span></button>
          
                <form action="{{url('update_program_name')}}" class="form-horizontal" method="post">
                   @csrf
                   <div class="col-xl-12">
                 <input type="hidden" name="id" class="program_id">
                  <label>Program Name</label>
                   <textarea id="editor4" type="text" name="program_name"  required="" class="form-control" cols="10" rows="10"></textarea><br>
                   <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button  type="submit" class="btn btn-primary btn-flat pull-right"><i class="fa fa-save"></i> Save</button>
              </div>
                </form>
            
            


</div>
</div>
</div>





















<!-- delete -->
<div class="modal fade" id="delete_modal">
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
              <form action="{{url('delete_program')}}" class="form-horizontal" method="post">
                @csrf
              <input type="hidden" name="id" class="program_id">
                <div class="text-center">
                    <p class="description"><b>DELETE PROGRAM</b></p>
                    <h2 class="description program_name"></h2>
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















