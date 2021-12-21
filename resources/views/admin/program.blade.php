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
              <h6 class="h2 text-white d-inline-block mb-0">Programs</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="ni ni-istanbul"></i></a></li>
                  <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Programs</li>
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
	<button id="add" class="btn btn-primary">Add New Program</button><hr>
</div>
</div>
</div>
			<div class="table-responsive">
			<table  id="example1" class=" table  table-bordered align-items-center table-flush table-dark" >
		 <thead>
		      <th>Id</th>
          <th style="white-space:pre-wrap; word-wrap:break-word;" >Program Name</th>
          <th>Edit Program Name</th>
          <th>School Name</th>
		      <th>Tution Fee</th>
          <th>Application Fee</th>
		      <th>Requirements</th>
		      <th colspan="" >Tools</th>
		 </thead>
		<tbody>
          @foreach($programs as $key=>$program)
             
        <tr>
          
          <td>{{ $key+1 }}</td>
          <td  style="white-space:pre-wrap; word-wrap:break-word; width: 50%;">{!! $program->program_name!!}</td>
          <td><button class="btn btn-info view_2" data-id="{{$program->program_id}}">View</button></td>
          
          <td>{{ $program->school_name }}</td>
          <td>{{ $program->tution_fee }}</td>

          <td>${{ number_format($program->application_fee,2)}}</td>
          <td><button class="btn btn-info view" data-id="{{$program->program_id}}">View</button></td>

          <td>
          <button class="btn btn-success edit btn-flat" data-id = "{{$program->program_id}}">
          <i class="fa fa-trash">Edit</i>
          </button>

           <button class="btn btn-danger delete btn-flat" data-id = "{{$program->program_id}}">
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
@include('admin.includes.program_modal')





<script>

  //add modal
 $(document).on('click', '#add', function(e){
    e.preventDefault();
    $('#add_program').modal('show');
  });



  //edit modal
 $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#edit_modal').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });


 	//view modal
 $(document).on('click', '.view', function(e){
    e.preventDefault();
    $('#view_modal').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  //view modal 2
 $(document).on('click', '.view_2', function(e){
    e.preventDefault();
    $('#view_modal_2').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });


//delete modal
  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete_modal').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });








function getRow(id){
  $.ajax({
    type: 'GET',
    url: '{{ url("program_details") }}',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.program_name').html(response.program_name)
      $('.program_id').val(response.program_id);
      $('.tution_fee').val(response.tution_fee);
  	  $('.application_fee').val(response.application_fee);
  	  $('.school_id').val(response.school_id);
       CKEDITOR.instances["editor3"].setData(response.requirements);
       CKEDITOR.instances["editor4"].setData(response.program_name);

    
    }
  });
}
</script>