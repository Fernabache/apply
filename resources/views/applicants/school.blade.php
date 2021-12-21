@include('applicants.includes.header')
<div class="posts">
@include('applicants.includes.navbar')
  <!-- BEGIN: Content -->
<div class="content">
@include('applicants.includes.topbar')
<div class="container">
<style>
body {
	font-family: 'Varela Round', sans-serif;
}

.material-icons {
    font-family: 'Material Icons';
    font-weight: normal;
    font-style: normal;
    font-size: 57px;
    line-height: 1;
    letter-spacing: normal;
    text-transform: none;
    display: inline-block;
    white-space: nowrap;
    word-wrap: normal;
    direction: ltr;
    -webkit-font-feature-settings: 'liga';
    -webkit-font-smoothing: antialiased;
}


.modal-confirm {		
	color: #636363;
	width: 400px;
}
.modal-confirm .modal-content {
	padding: 20px;
	border-radius: 5px;
	border: none;
	text-align: center;
	font-size: 14px;
}
.modal-confirm .modal-header {
	border-bottom: none;   
	position: relative;
}
.modal-confirm h4 {
	text-align: center;
	font-size: 26px;
	margin: 30px 0 -10px;
}
.modal-confirm .close {
	position: absolute;
	top: -5px;
	right: -2px;
}
.modal-confirm .modal-body {
	color: #999;
}
.modal-confirm .modal-footer {
	border: none;
	text-align: center;		
	border-radius: 5px;
	font-size: 13px;
	padding: 10px 15px 25px;
}
.modal-confirm .modal-footer a {
	color: #999;
}		
.modal-confirm .icon-box {
	width: 80px;
	height: 80px;
	margin: 0 auto;
	border-radius: 50%;
	z-index: 9;
	text-align: center;
	border: 3px solid #82ce34;
}
.modal-confirm .icon-box i {
	color: #f15e5e;
	font-size: 46px;
	display: inline-block;
	margin-top: 1px;
}
.modal-confirm .btn, .modal-confirm .btn:active {
	color: #fff;
	border-radius: 4px;
	background: #60c7c1;
	text-decoration: none;
	transition: all 0.4s;
	line-height: normal;
	min-width: 120px;
	border: none;
	min-height: 40px;
	border-radius: 3px;
	margin: 0 5px;
}
.modal-confirm .btn-secondary {
	background: #c1c1c1;
}
.modal-confirm .btn-secondary:hover, .modal-confirm .btn-secondary:focus {
	background: #a8a8a8;
}
.modal-confirm .btn-danger {
	background: #f15e5e;
}
.modal-confirm .btn-danger:hover, .modal-confirm .btn-danger:focus {
	background: #ee3535;
}
.trigger-btn {
	display: inline-block;
	margin: 100px auto;
}
</style>
<style>
body {
	font-family: 'Varela Round', sans-serif;
}
.modal-confirm {		
	color: #636363;
	width: 325px;
	font-size: 14px;
}
.modal-confirm .modal-content {
	padding: 20px;
	border-radius: 5px;
	border: none;
}
.modal-confirm .modal-header {
	border-bottom: none;   
	position: relative;
}
.modal-confirm h4 {
	text-align: center;
	font-size: 26px;
	margin: 30px 0 -15px;
}
.modal-confirm .form-control, .modal-confirm .btn {
	min-height: 40px;
	border-radius: 3px; 
}
.modal-confirm .close {
	position: absolute;
	top: -5px;
	right: -5px;
}	
.modal-confirm .modal-footer {
	border: none;
	text-align: center;
	border-radius: 5px;
	font-size: 13px;
}	
.modal-confirm .icon-box {
	color: #fff;		
	position: absolute;
	margin: 0 auto;
	left: 0;
	right: 0;
	top: -70px;
	width: 95px;
	height: 95px;
	border-radius: 50%;
	z-index: 9;
	background: #82ce34;
	padding: 15px;
	text-align: center;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}
.modal-confirm .icon-box i {
	font-size: 58px;
	position: relative;
	top: 3px;
}
.modal-confirm.modal-dialog {
	margin-top: 80px;
}
.modal-confirm .btn {
	color: #fff;
	border-radius: 4px;
	background: #82ce34;
	text-decoration: none;
	transition: all 0.4s;
	line-height: normal;
	border: none;
}
.modal-confirm .btn:hover, .modal-confirm .btn:focus {
	background: #6fb32b;
	outline: none;
}
.trigger-btn {
	display: inline-block;
	margin: 100px auto;
}
</style>


<style>
body {
	font-family: 'Varela Round', sans-serif;
}
.modal-confirm {		
	color: #636363;
	width: 325px;
}
.modal-confirm .modal-content {
	padding: 20px;
	border-radius: 5px;
	border: none;
}
.modal-confirm .modal-header {
	border-bottom: none;   
	position: relative;
}
.modal-confirm h4 {
	text-align: center;
	font-size: 26px;
	margin: 30px 0 -15px;
}
.modal-confirm .form-control, .modal-confirm .btn {
	min-height: 40px;
	border-radius: 3px; 
}
.modal-confirm .close {
	position: absolute;
	top: -5px;
	right: -5px;
}	
.modal-confirm .modal-footer {
	border: none;
	text-align: center;
	border-radius: 5px;
	font-size: 13px;
}	
.modal-confirm .icon-box {
	color: #fff;		
	position: absolute;
	margin: 0 auto;
	left: 0;
	right: 0;
	top: -70px;
	width: 95px;
	height: 95px;
	border-radius: 50%;
	z-index: 9;
	background: #152f7e;;
	padding: 15px;
	text-align: center;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}
.modal-confirm .icon-box i {
	font-size: 56px;
	position: relative;
	top: 4px;
}
.modal-confirm.modal-dialog {
	margin-top: 80px;
}
.modal-confirm .btn {
	color: #fff;
	border-radius: 4px;
	background: #82ce38;
	text-decoration: none;
	transition: all 0.4s;
	line-height: normal;
	border: none;
}
.modal-confirm .btn:hover, .modal-confirm .btn:focus {
	background: #152f7e;
	outline: none;
}
.trigger-btn {
	display: inline-block;
	margin: 100px auto;
}
</style>

			<?php  
				$image = Storage::url($school->background_image);
			?>
	<div class="row">
		<!--================ School logo and other details======================= -->
		<?php  
			$image_2= Storage::url($school->school_image);
		?>
		<div style="padding-left: 0;" class="col-xl-3">
			<img src="{{ asset('/public/'.$image_2) }}" class="mx-auto d-block img-fluid" width="100px">
			<div class="col-xl-12" style="margin-top: 1em;">
				<div style=" border-radius: 1em;" class="card">
				<div class="card-body">
					<h3 style="font-size: 2em;" align="center" class="font-weight-bold">{{$school->school_name}}</h3><br>
					<h4 align="center" class="font-weight-bold">{{$school->location}}</h4><hr><br>
					<h4 class="font-weight-bold">DLI:{{$school->dli}}</h4><br>
					<h4 class="font-weight-bold">TYPE:{{$school->type}}</h4><br>
					<h4 class="font-weight-bold">TOTAL STUDENTS:{{$school->total_students}}</h4><br>
					<h4 class="font-weight-bold">FOUNDED:{{$school->founded}}</h4>
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
				 @if(strlen($school->about) > 700)
				{!! substr($school->about,0,700)  !!}
            <button style="display: block;" id="more" class="btn btn-info ">Read More</button>
            <div id="read" style="display: none;"> {!! substr($school->about,700,strlen($school->about)) !!} 
            <button style="display: none;" id="less" class="btn btn-info">Read Less</button> </div>
            @else
            {!! $school->about  !!}
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
					<p>${{number_format($school->cost_per_year,2)}}</p><br>
					<p>${{number_format($school->cost_of_living,2)}}</p><br>
					<p>${{number_format($school->application_fee_school,2)}}</p>

				</div>

			</div>
		</div>
	</div>
</div>

	<div style="margin-top: 1em;" class="col-xl-12">
		<h3 style="font-size: 1.5em;" align="center" class="font-weight-bold">Find Your Program!</h3>
		@foreach($programs as $program)
		<div class="card">
			<div class="card-body">
				
				<h3 class="font-weight-bold">Program: </h3>{!!$program->program_name!!}<br>
				<h3 class="font-weight-bold">Application Fee: ${{$program->application_fee}} </h3><br>
				<h3 class="font-weight-bold">Requirement:</h3> {!! $program->requirements!!}
				<button data-id="{{$program->id}}" id="payment" class="btn btn-primary btn-block">Apply</button>
			</div>
		</div>
		@endforeach
		{{$programs->links()}}
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
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i class="material-icons">&#xE876;</i>
				</div>				
				<h4 class="modal-title w-100">Awesome!</h4>	
			</div>
			<div class="modal-body">
				<p class="text-center">{{Session::get('success')}}</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-success btn-block" data-dismiss="modal">OK</button>
			</div>
		</div>
	</div>
</div>     

<?php endif; ?>


<!-- modal page -->


<?php if(Session::get('error')!==null): ?>
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
			     
				<div class="icon-box">
					<i class="material-icons">&#xE5CD;</i>
				</div>				
				<h4 class="modal-title w-100">Sorry!</h4>	
			</div>
			<div class="modal-body">
				<p class="text-center">{{Session::get('error')}}</p>
				<p class="text-center"> Please go back and choose another program.</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-danger btn-block" data-dismiss="modal">Okay </button>
				
			</div>
		</div>
	</div>
</div>
<?php endif; ?>



<!-- Modal HTML -->
     



<!-- modal page -->




<!-- Modal HTML -->
<div id="all_payment" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
		  
			<div class="modal-header flex-column">
				<div class="icon-box">
				    
					<span class="material-icons">
add_task
</span>
				</div>						
				<h4 class="modal-title w-100">Apply to program</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
			    	<form method="POST" action="{{url('applicants/add_to_applications')}}">
            		@csrf
            		<input type="hidden" name="program_id" class="program_id">
            		<input type="hidden" name="school_id" class="school_id">
            	<p>Are you sure you want to apply to this program?</p><br>
            	<button  class="btn btn-danger">Yes</button><br>
            	
                 </form>
                
			</div>
			<div class="modal-footer justify-content-center">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
			
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
    // $(window).on('hashchange', function() {
    //     if (window.location.hash) {
    //         var page = window.location.hash.replace('#', '');
    //         if (page == Number.NaN || page <= 0) {
    //             return false;
    //         } else {
    //             getPosts(page);
    //         }
    //     }
    // });


    // $(document).ready(function() {
    //     $(document).on('click', '.pagination a', function (e) {
    //         $("#loadMe").modal('show');
    //         getPosts($(this).attr('href').split('page=')[1]);
    //         e.preventDefault();
    //     });
    // });



    // function getPosts(page) {
    //     $.ajax({
    //         url : '?page='+page,
    //         dataType: 'json',
    //     }).done(function (data) {
    //         $("#loadMe").modal('hide');
    //     	$('.modal-backdrop').remove();
    //       //  $('.posts').html(data);
    //         location.hash = page;
    //     }).fail(function () {
    //         alert('Posts could not be loaded.');
    //     });
    // }



    	
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
    </div>