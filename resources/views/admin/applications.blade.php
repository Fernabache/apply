@include('admin.sections.header')
@include('admin.sections.sidebar')
@include('admin.sections.navbar')

<style>

    h4,h3{
        color: #fff !important;
    }
</style>
<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Applications</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="ni ni-istanbul"></i></a></li>
                  <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Applications</li>
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
          <th>Email</th>
		  <th>Name</th>
		  <th>Program Name</th>
		  <th>Image</th>
		  <th>School Name</th>
		  <th>Admission Status</th>
		  <th>Payment</th>
		 </thead>
		<tbody>
          @foreach($applications as $key=>$application)
              <?php 
                if(isset($application->school_image))
                {
                  $image_f = Storage::url($application->school_image);
                }
                else
                {
                   $image_f = 'admin/assets/img/theme/vue.jpg';
                }
               
               
           
              ?>
        <tr>
          
          <td>{{ $key+1 }}</td>

          <td><a href="{{url('admin/applicants/'.$application->user_id)}}">{{ $application->email}}</a></td>
          <td>{{ $application->first_name.' '.$application->last_name }}</td>
          <td>{!! $application->program_name !!}</td>
          <td><img style="border-radius: 3em; "  height="60px" width="60px" src="{{ asset('/public/'.$image_f) }}"></td>
          <td><h4 style="font-size: 1.3em; color: #fff; display: inline;">{{ $application->school_name}}</td>
          <td>{{ $application->admission_status}}</td>

          <td>{{ $application->payment}}</td>
                    
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