@include('admin.sections.header')
@include('admin.sections.sidebar')
@include('admin.sections.navbar')


<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Applicants</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="ni ni-istanbul"></i></a></li>
                  <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Applicants</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
 <div class="container-fluid mt--6">
	 <div class="row justify-content-center">
        <div class=" col-xl-12 ">
          <div class="card">
	
 <div class="">
 <div class="">
 <div class="">
 <div class="">

 <div class ="box-body">
 <div class="">
<div class="col-xl-6" style="margin-top: 1em;">
	
</div>
</div>
</div>
			<div class="table-responsive">
			<table  id="example1" class=" table  table-bordered align-items-center table-flush table-dark" >
		 <thead>
		  <th>Id</th>
          <th>Image</th>
		      <th>First Name</th>
          <th>Middle Name</th>
		      <th>Last Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Gender</th>
          <th>Country</th>
          <th>Marital Status</th>
          <th>Other Details</th>
           @if(Auth::user()->role === "superadmin")
          <th>Role</th>
          <th>Select Role</th>
          @endif
		  <!--<th colspan="" >Tools</th>-->
		 </thead>
		<tbody>
          @foreach($applicants as $key=>$applicant)
              <?php 
                if(isset($applicant->image))
                {
                  $image_f = Storage::url($applicant->image);
                }
                else
                {
                   $image_f = 'admin/assets/img/theme/vue.jpg';
                }
               
               
           
              ?>
        <tr>
          
          <td>{{ $key+1 }}</td>

          <td><img style="border-radius: 3em; "  height="40px" width="40px" src="{{ asset($image_f) }}">&nbsp;<i class="fa fa-edit photo_1" data-id="{{$applicant->id}}" ></i></td>
          <td><a href="{{url('admin/applicants/'.$applicant->id)}}">{{ $applicant->first_name}}</a></td>
          <td>{{ $applicant->middle_name}}</td>

          <td>{{ $applicant->last_name}}</td>
          <td><a href="{{url('admin/applicants/'.$applicant->id)}}">{{ $applicant->email}}</a></td>
          <td>{{ $applicant->phone}}</td>
          <td>{{ $applicant->gender}}</td>

          <td>{{ $applicant->country_of_citizenship}}</td>
           <td>{{ $applicant->marital_status}}</td>
          <td><button class="btn btn-info view" data-id="{{$applicant->id}}">View</button></td>

          @if(Auth::user()->role === "superadmin")
          <td>{{$applicant->role}}</td>
          <td>
             <button class="btn btn-success edit btn-flat" data-id = "{{$applicant->id}}">
              <i class="fa fa-edit">Select Role</i>
              </button>
          </td>
          @endif
          <!--<td>-->
          <!--<button class="btn btn-danger delete btn-flat" data-id = "{{$applicant->id}}">-->
          <!--<i class="fa fa-trash">Delete</i>-->
          <!--</button>-->
          <!--</td>-->
                    
        </tr>
        @endforeach
				</tbody>
      </table>

    
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- modal page -->
<?php if(Session::get('success')!==null): ?>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 align="center" class="modal-title">Status</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h3 align="center">{{Session::get('success')}}&nbsp;<img src="{{ asset('admin/assets/img/icons/common/checked.png') }}" width="40px"></h3><hr>  
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<!-- edit -->
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
              <form action="{{url('edit/user_role')}}" class="form-horizontal" method="post">
                @csrf
                <input type="hidden" name="id" class="user_id">
                <div class="form-row">
                  <div class="col-md-12 form-group">
                    <select name="role" class="form-control" required="">
                      <option value="">Select Role</option>
                       <option value="superadmin" required="">SUPERADMIN</option>
                       <option value="admin" required="">ADMIN</option>
                       <option value="user" required="">USER</option>
                    </select>
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
@include('admin.sections.footer')
@include('admin.includes.applicants_modal')





<script>

// select role modal
 $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });


 	//view modal
 $(document).on('click', '.view', function(e){
    e.preventDefault();
    $('#applicant_modal').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });



//delete modal
  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete_school').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });








function getRow(id){
  $.ajax({
    type: 'GET',
    url: '{{ url("applicant_details") }}',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.name').html(response.email);
      $('.email').val(response.email);
      $('.user_id').val(response.user_id);
  	  $('.address').val(response.address);
  	  $('.postal_code').val(response.postal_code);
  	  $('.state').val(response.state);
  	  $('.transcipt_image').val(response.transcipt_image);
  	  $('.high_school_certificate').val(response.high_school_certificate);
  	  $('.budget_for_fees').val(response.budget_for_fees);
  	  $('.d_o_b').val(response.d_o_b);

    
    }
  });
}
</script>