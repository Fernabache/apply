<!-- Add new school -->
<div id="add_school"  class="modal fade" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 align="center" class="modal-title font-weight-bold">School Info</h4>

                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                    <div class="">  
                        <div class="">
    <form enctype="multipart/form-data" action="{{url('admin/save_school_details')}}" method="post">
                @csrf
        <div class="row">

             <div class="col-xl-6">
                <label>School Name</label>
         <input placeholder="Enter Name of School" type="text" name="school_name" class="form-control" required ><br>
            </div>
            <div class="col-xl-6">
                <label>School Logo</label>
                <input type="file" name="school_image" required="">    
            </div>

              <div class="col-xl-6">
                <label>Background Image</label>
                 <input type="file" name="background_image" required="">
            </div>

            <div class="col-xl-6">
                <label>Location</label>
             <input placeholder="Enter School's Location" type="text" name="location" class="form-control" required min="1000"><br> 
          </div>

          <div class="col-xl-6">
            <label>Founded</label>
        <input placeholder="YYYY-MM-DD" type="text" name="founded" class="form-control" required ><br>
        </div>

        <div class="col-xl-6">
            <label>DLI</label>
        <input placeholder="Enter DlI" type="number" name="dli" class="form-control" ><br>
        </div>

        <div class="col-xl-6">
         <label>Total students</label>
        <input placeholder="Enter Total number of Students" type="number" name="total_students" class="form-control" required ><br>
        </div>

         <div class="col-xl-6">
         <label>Application Fee</label>
        <input placeholder="Enter Application Fee" type="number" name="application_fee" class="form-control"  ><br>
        </div>

     <div class="col-xl-6">
         <label>Cost per Year</label>
        <input placeholder="Enter Cost per Year" type="number" name="cost_per_year" class="form-control" required ><br>
        </div>

       <div class="col-xl-6">
         <label>Cost of Living</label>
        <input placeholder="Enter Cost of Living " type="number" name="cost_of_living" class="form-control" required ><br>
        </div>

         <div class="col-xl-12">
         <label>About</label>
        <textarea id="editor1" placeholder="Enter Province"   name="about" class="form-control" required ></textarea><br>
        </div>

      <div class="col-xl-6">
         <label>Type</label>
        <input placeholder="Enter Type" type="text" name="type" class="form-control" required ><br>
        </div>
      </div>                          
        <button  class="btn btn-primary btn-block btn-color" type="submit">
                                    Save Details
        </button>       
                            </form>
               </div>
        </div>
      </div>
    </div>
</div>
</div>










<!-- View modal -->

<div class="modal fade" id="view_school">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
          <div class="container">

          <div class="row ">
            <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><i class="ni ni-fat-remove" style="color: black;"></i></span></button>
            <div class="col-xl-12 d-flex justify-content-center align-items-stretch">
              <h2 class="modal-title "><b>Edit School's Details</b></h2><br>
            </div>
            <div class="col-xl-12  justify-content-center align-items-stretch">
              <form action="{{url('admin/update_about')}}" class="form-horizontal" method="POST">
                @csrf
                <div class="form-row">
                    <input type="hidden" name="school_id" class="school_id">
                  <div class="col-md-12 form-group">
                    <textarea id="editor2"  name="about" required="" class="form-control"></textarea>
                  </div>
            </div>
          </div>
            <div class="col-xl-12 d-flex justify-content-center align-items-stretch">
              <button style="float: left;" type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button style="float: right;"  type="submit" class="btn btn-primary btn-flat pull-right"><i class="fa fa-save"></i> Update</button>
              </form>
            </div>

        </div>

    </div>
</div>
</div>
</div>






<!-- edit school details -->
<div id="edit_school"  class="modal fade" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 align="center" class="modal-title font-weight-bold"> Edit School Info</h4>

                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                    <div class="">  
                        <div class="">
    <form  action="{{url('admin/edit_school_details')}}" method="post">
                @csrf
        <div class="row">
            <input type="hidden" name="school_id" class="school_id">
             <div class="col-xl-6">
                <label>School Name</label>
         <input placeholder="Enter Name of School" type="text" name="school_name" class="form-control school_name" required ><br>
            </div>
            
            <div class="col-xl-6">
                <label>Location</label>
             <input placeholder="Enter School's Location" type="text" name="location" class="form-control location" required ><br> 
          </div>

          <div class="col-xl-6">
            <label>Founded</label>
        <input placeholder="Enter the year it was founded" type="text" name="founded" c class="form-control founded" required ><br>
        </div>

        <div class="col-xl-6">
            <label>DLI</label>
        <input placeholder="Enter DlI"  type="number" name="dli" class="form-control dli" required ><br>
        </div>

        <div class="col-xl-6">
         <label>Total students</label>
        <input placeholder="Enter Total number of Students" type="number" name="total_students" class="form-control total_students"  required ><br>
        </div>

         <div class="col-xl-6">
         <label>Application Fee</label>
        <input placeholder="Enter Application Fee" type="number" name="application_fee" class="form-control application_fee" required ><br>
        </div>

     <div class="col-xl-6">
         <label>Cost per Year</label>
        <input placeholder="Enter Cost per Year"  type="number" name="cost_per_year" class="form-control cost_per_year" required ><br>
        </div>

       <div class="col-xl-6">
         <label>Cost of Living</label>
        <input placeholder="Enter Cost of Living " type="number"  name="cost_of_living" class="form-control cost_of_living" required ><br>
        </div>

      <div class="col-xl-6">
         <label>Type</label>
        <input placeholder="Enter Type" type="text" name="type" class="form-control type" required  ><br>
        </div>
      </div>                          
        <button  class="btn btn-primary btn-block btn-color" type="submit">
                                    Update Details
        </button>       
                            </form>
               </div>
        </div>
      </div>
    </div>
</div>
</div>







<!-- Delete modal -->

<div class="modal fade" id="delete_school">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
          <div class="container">

          <div class="row ">
            <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><i class="ni ni-fat-remove" style="color: black;"></i></span></button>
            <div class="col-xl-12 d-flex justify-content-center align-items-stretch">
              <h2 class="modal-title "><b>Delete School</b></h2><br>
              <h2 align="center" class="name"><b></b></h2>
            </div>
            <div class="col-xl-12  justify-content-center align-items-stretch">
              <form action="{{url('admin/delete_school')}}" class="form-horizontal" method="POST">
                @csrf
                <input type="hidden" name="school_id" class="school_id">
                <div class="form-row">
                    <input type="hidden" name="school_id" class="school_id">
                  <div class="col-md-12 form-group">
                   <h4 align="center">Are you sure you want to delete this?</h4>
                  </div>
            </div>
          </div>
            <div class="col-xl-12 d-flex justify-content-center align-items-stretch">
              <button style="float: left;" type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> No</button>
              <button style="float: right;"  type="submit" class="btn btn-primary btn-flat pull-right"><i class="fa fa-sav"></i> Yes</button>
              </form>
            </div>

        </div>

    </div>
</div>
</div>
</div>



<!-- edit school logo -->

<div class="modal fade" id="edit_photo_1">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
          <div class="container">

          <div class="row ">
            <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><i class="ni ni-fat-remove" style="color: black;"></i></span></button>
            <div class="col-xl-12 d-flex justify-content-center align-items-stretch">
              <h2 class="modal-title school_id "><b>Edit School Logo</b></h2><br>
            </div>
            <div class="col-xl-12  justify-content-center align-items-stretch">
              <form  enctype="multipart/form-data" action="{{url('admin/edit_photo_1')}}" class="form-horizontal" method="POST">
                @csrf
                <input type="hidden" name="school_id" class="school_id">
                <div class="form-row">
                  <div class="col-xl-6 form-group">
                    <label>School Logo</label>
                   <input type="file" name="school_image">
                  </div>
            </div>
          </div>
            <div class="col-xl-12 d-flex justify-content-center align-items-stretch">
              <button   type="submit" class="btn btn-primary btn-block pull-right"><i class="fa fa-save"></i>Update</button><br>
              </form>
            </div>

        </div>

    </div>
</div>
</div>
</div>







<!-- edit school background -->

<div class="modal fade" id="edit_photo_2">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
          <div class="container">

          <div class="row ">
            <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><i class="ni ni-fat-remove" style="color: black;"></i></span></button>
            <div class="col-xl-12 d-flex justify-content-center align-items-stretch">
              <h2 class="modal-title "><b>Edit Background Image</b></h2><br>
            </div>
            <div class="col-xl-12  justify-content-center align-items-stretch">
              <form  enctype="multipart/form-data" action="{{url('admin/edit_photo_2')}}" class="form-horizontal" method="POST">
                @csrf
                <input type="hidden" name="school_id" class="school_id">
                <div class="form-row">
                  <div class="col-xl-6 form-group">
                    <label>Background Image</label>
                   <input type="file" name="background_image">
                  </div>
            </div>
          </div>
            <div class="col-xl-12 d-flex justify-content-center align-items-stretch">
              <button   type="submit" class="btn btn-primary btn-block pull-right"><i class="fa fa-sav"></i>Update</button>
              </form>
            </div>

        </div>

    </div>
</div>
</div>
</div>



















