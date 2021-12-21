@include('admin.sections.header')
@include('admin.sections.sidebar')
@include('admin.sections.navbar')


<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Schools</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="ni ni-istanbul"></i></a></li>
                  <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Schools</li>
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
	<button id="add" class="btn btn-primary ">Add New School</button><hr>
</div>
</div>
</div>
			<div class="table-responsive">
			<table  id="example1" class=" table  table-bordered align-items-center table-flush table-dark" >
		 <thead>
		  <th>Id</th>
          <th>Image</th>
		  <th>School Name</th>
          <th>Location</th>
		  <th>Founded</th>
          <th>DLI</th>
          <th>Total Students</th>
          <th>Application  Fee</th>
          <th>Average Cost per Year</th>
          <th>Average Cost of Living</th>
          <th>Type</th>
          <td>Background Image</td>
          <th>About</th>
		  <th colspan="" >Tools</th>
		 </thead>
		<tbody>
          @foreach($schools as $key=>$school)
              <?php  $image = Storage::url($school->school_image);
              		 $image_2 = Storage::url($school->background_image);
              if($school->school_image===null)
              {
                $image_f = 'admin/assets/img/theme/team-4.png';
              } 
              else
              {
                $image_f = $image;
                $image_f_2 = $image_2;
              }
              ?>
        <tr>
          
          <td>{{ $key+1 }}</td>

          <td><img style="border-radius: 3em; "  height="40px" width="40px" src="{{ asset('/public/'.$image_f) }}">&nbsp;<i class="fa fa-edit photo_1" data-id="{{$school->id}}" ></i></td>
          <td>{{ $school->school_name }}</td>
          <td>{{ $school->location }}</td>

          <td>{{ $school->founded}}</td>

          <td>{{ $school->dli}}</td>

          <td>{{ $school->total_students}}</td>
           <td>{{ $school->application_fee}}</td>
          <td>{{ $school->cost_per_year}}</td>
          <td>{{$school->cost_of_living}}</td>
          <td>{{$school->type}}</td>
          <td><img style="border-radius: 3em; "  height="40px" width="40px" src="{{ asset('/public/'.$image_f_2) }}">&nbsp;<i class="fa fa-edit photo_2" data-id = "{{$school->id}}"></i></td>
          <td><button class="btn btn-info view" data-id="{{$school->id}}">View</button></td>
          <td>
             <button class="btn btn-success edit btn-flat" data-id = "{{$school->id}}">
              <i class="fa fa-edit">Edit</i>
              </button>
          


          
          <button class="btn btn-danger delete btn-flat" data-id = "{{$school->id}}">
          <i class="fa fa-trash">Delete</i>
          </button>
          </td>
                    
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
<?php if(isset($_GET['success'])): ?>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 align="center" class="modal-title">Status</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h3 align="center">{{$_GET['success']}}&nbsp;<img src="{{ asset('admin/assets/img/icons/common/checked.png') }}" width="40px"></h3><hr>  
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
@include('admin.sections.footer')
@include('admin.includes.school_modal')





<script>
	//add modal
 $(document).on('click', '#add', function(e){
    e.preventDefault();
    $('#add_school').modal('show');
  });

 	//view modal
 $(document).on('click', '.view', function(e){
    e.preventDefault();
    $('#view_school').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

 	//edit modal
 $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#edit_school').modal('show');
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

  	//add modal
 $(document).on('click', '.photo_1', function(e){
    e.preventDefault();
    $('#edit_photo_1').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

 	//add modal
 $(document).on('click', '.photo_2', function(e){
    e.preventDefault();
    $('#edit_photo_2').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });





function getRow(id){
  $.ajax({
    type: 'GET',
    url: '{{ url("edit_school") }}',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.name').html(response.school_name);
      $('.school_name').val(response.school_name);
      $('.school_id').val(response.school_id);
  	  $('.location').val(response.location);
  	  $('.founded').val(response.founded);
  	  $('.dli').val(response.dli);
  	  $('.total_students').val(response.total_students);
  	  $('.application_fee').val(response.application_fee);
  	  $('.cost_per_year').val(response.cost_per_year);
  	  $('.cost_of_living').val(response.cost_of_living);
  	  $('.about').val(response.about);
  	  $('.type').val(response.type);
  	   CKEDITOR.instances["editor2"].setData(response.about);
    
    }
  });
}
</script>