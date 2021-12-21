@include('applicants.includes.header')
@include('applicants.includes.navbar')
  <!-- BEGIN: Content -->
<div class="content">
@include('applicants.includes.topbar')
<div class="container">


			<?php  
				$image = Storage::url($program->background_image);
			?>
	<div class="row">
		<!--================ School logo and other details======================= -->
		<?php  
			$image_2= Storage::url($program->school_image);
		?>
		<div style="padding-left: 0;" class="col-xl-3">
			<img src="{{ asset('/public/'.$image_2) }}" class="mx-auto d-block img-fluid" width="100px">
			<div class="col-xl-12" style="margin-top: 1em;">
				<div style=" border-radius: 1em;" class="card">
				<div class="card-body">
					<h3 style="font-size: 2em;" align="center" class="font-weight-bold">{{$program->school_name}}</h3><br>
					<h4 align="center" class="font-weight-bold">{{$program->location}}</h4><hr><br>
					<h4 class="font-weight-bold">DLI:{{$program->dli}}</h4><br>
					<h4 class="font-weight-bold">TYPE:{{$program->type}}</h4><br>
					<h4 class="font-weight-bold">TOTAL STUDENTS:{{$program->total_students}}</h4><br>
					<h4 class="font-weight-bold">FOUNDED:{{$program->founded}}</h4>
				</div>
			</div>

	</div>
</div>
		<!-- ================Main details on school and the program=============== -->
	<div class="col-xl-9">
		<img src="{{ asset($image) }}" class=" img-fluid" height="100px">
		<div class="row">
				<div class="col-xl-12">
		<div class="card">
	<div class="card-body">		
				<h3 align="center" style="font-size: 1.5em;" class="font-weight-bold">About</h3>
				 @if(strlen($program->about) > 700)
				{!! substr($program->about,0,700)  !!}
            <button style="display: block;" id="more" class="btn btn-info ">Read More</button>
            <div id="read" style="display: none;"> {!! substr($program->about,700,strlen($program->about)) !!} 
            <button style="display: none;" id="less" class="btn btn-info">Read Less</button> </div>
            @else
            {!! $program->about  !!}
				@endif
			</div>
		</div>
</div>

<div style="margin-top: 1em;" class="col-xl-12">
	<div class="card">
		<div class="card-body">
			<h3 style="font-size: 1.2em;" align="center" class="font-weight-bold">Financials</h3><hr>
			
			<div class="row">
				<div class="col-6">
					<p class="font-weight-bold" style="font-size: 1.3em; color: blue;">DESCRIPTION</p><br>
					<p>Average Cost of Tuition/Year</p><br>
					<p>Average Cost of Living/Year</p><br>
					<p>*Application Fee</p>
				</div>

				<div class="col-6" style="float: right;">
					<p class="font-weight-bold" style="font-size: 1.3em; color: blue;">SUBTOTAL</p><br>
					<p>${{number_format($program->cost_per_year,2)}}</p><br>
					<p>${{number_format($program->cost_of_living,2)}}</p><br>
					<p>${{number_format($program->application_fee_school,2)}}</p>

				</div>

			</div>
		</div>
	</div>
</div>

	<div style="margin-top: 1em;" class="col-xl-12">
		<div class="card">
			<div class="card-body">
				<h3 style="font-size: 1.5em;" align="center" class="font-weight-bold">Find Your Program!</h3>
				<h3 class="font-weight-bold">Program: </h3>{!!$program->program_name!!}<br>
				<h3 class="font-weight-bold">Application Fee: ${{$program->application_fee}}</h3><br>
				<h3 class="font-weight-bold">Requirement:</h3> {!! $program->requirements!!}
				<button data-id="{{$program->program_id}}" id="payment" class="btn btn-primary btn-block">Apply</button>
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

<?php if(Session::get('error')!==null): ?>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 align="center" class="modal-title">Status</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h3 align="center">{{Session::get('error')}}&nbsp;<img src="{{ asset('admin/assets/img/icons/common/clipboard (2).png') }}" width="40px"></h3><hr>  
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<!-- modal page -->

<div id="all_payment" class="modal fade" tabindex="-1" style="overflow:hidden;" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 align="center" class="modal-title">Apply to program</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            	<form method="POST" action="{{url('applicants/add_to_applications')}}">
            		@csrf
            		<input type="hidden" name="program_id" class="program_id">
            		<input type="hidden" name="school_id" class="school_id">
            	<h3 align="center" class="font-weight-bold">Are you sure you want to apply to this program?</h3><br>
            	<button class="btn btn-success btn-block" style="float: left;">Yes</button><br>
            	
                 </form>
<br>
                 <button class="btn btn-warning btn-block " style="float: right;" data-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>


    <!-- Modal -->
<div class="modal fade" id="loadMe" tabindex="-1"  data-backdrop="static" data-keyboard="false" >
  <div class="modal-dialog modal-xl-lg" role="document">
    <div class="modal-content">
      <div class="modal-body text-center">
        <div class="loader"></div>
        <div clas="loader-txt">
          <h3 class="font-weight-bold">LOADING...</h3><br>
          <p class="font-weight-bold">Please wait.</p>
        </div>
      </div>
    </div>
  </div>
</div>

@include('applicants.includes.footer')
<script type="text/javascript">
$(document).on('click', '#more', function(e){
    e.preventDefault();
 var x = document.getElementById("read");
 var y = document.getElementById("more");
  var z = document.getElementById("less");

		  if(x.style.display ==='none' && y.style.display ==='block')
		    {
		        x.style.display = 'block';
		        y.style.display = 'none';
		        z.style.display ='block';
		        
		    }
		    else
		    {
		        x.style.display = 'none';
		        y.style.display ='block';
		    }

  });

$(document).on('click', '#less', function(e){
    e.preventDefault();
     var x = document.getElementById("read");
      var y = document.getElementById("more");
      var z = document.getElementById("less");
	     if(z.style.display ==='block')
	    {
	        z.style.display = 'none';
	        y.style.display = 'block';
	        x.style.display = 'none';
	        
	    }

  });


</script>

    <script>

    $(document).on('click', '#payment', function(e){
    e.preventDefault();
    //$("#loadMe").modal('show');
     var id = $(this).data('id');
    getRow(id);

});

    function getRow(id){
  $.ajax({
    type: 'GET',
    url: '{{ url("fetch_program_details") }}',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $("#loadMe").modal('hide');
      $('.modal-backdrop').remove();
      $('.application_fe').html(response.application_fee);
      $('.tution_fe').html(response.tution_fee);
      $('.program_name').html(response.program_name);
      $('.program_id').val(response.program_id);
      $('.tution_fee').val(response.tution_fee);
  	  $('.application_fee').val(response.application_fee);
  	  $('.school_id').val(response.school_id);
  	  $('#all_payment').modal('show');
  	   
    
    }
  });
}
    </script>