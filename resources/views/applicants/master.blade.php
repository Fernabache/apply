@include('applicants.includes.header')
@include('applicants.includes.navbar')
  <!-- BEGIN: Content -->
<div class="content">
@include('applicants.includes.topbar')
<div class="container">
    <br>
    
    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js" ></script>

    </head>
      <link rel="stylesheet" href="{{asset('applicant/dist/app.css')}}" >

    
    <div class="col-span-12 mt-6 -mb-6 intro-y">
                                <div class="alert alert-dismissible show box bg-theme-3 text-white flex items-center mb-6" role="alert">
                                    <span>
                                        
                                       <B> <H1> Welcome, {{Auth::user()->first_name}}. </H1></B>
                                    </span>
                                   
                                </div>
                            </div>
                            
                            
                            
                            
                            
          <br> 
           <br> 
            <br> 
         
              <br> 
                            
	<h3 style="font-size: 1.5em;" align="center" class="font-weight-bold" >Find the Right School & Program</h3><br>
	<br> 
	<div class="row">
		<div class="col-xl-5" style="margin-bottom: 1em;">
			<div class="card">
				<div class="card-body">
				<h4 align="center" class="font-weight-bold">Kindly complete your eligiblty process</h4><hr><br>
				<img  class="img-fluid" src="{{asset('applicant/images/11070.jpg')}}">
				<a href="{{url('eligibility')}}" class="btn btn-primary btn-block">Complete process</a>
				</div>
			</div>
		</div>

		<div class="col-xl-5" style="margin-bottom: 1em;">
			<div class="card">
				<div class="card-body">
					<h4 align="center" class="font-weight-bold">Find Programs</h4><hr><br>
					<img width="250px" class="img-fluid" src="{{asset('applicant/images/8576.jpg')}}">
					<a href="{{url('applicants/programs')}}" class="btn btn-primary btn-block">Check for Programs</a>	
				</div>
			</div>
		</div>
 
       	<div class="col-xl-5" style="margin-bottom: 1em;">
			<div class="card">
				<div class="card-body">
					<h4 align="center" class="font-weight-bold">Payment History</h4><hr>
					<img  class="img-fluid" src="{{asset('applicant/images/2889686.jpg')}}">
					<a href="{{url('applicants/payments')}}" class="btn btn-primary btn-block">Payments</a>		
				</div>
			</div>
		</div>
		
		<div class="col-xl-5" style="margin-bottom: 1em;">
			<div class="card">
				<div class="card-body">
					<h4 align="center" class="font-weight-bold">More Info</h4><hr>
				<div class="intro-y border-b border-t lg:border-b-0 lg:border-t-0 flex-1 p-5 lg:border-l lg:border-r border-gray-200 dark:border-dark-5 py-16">
                         <center> <img width="90px" height="90px" style="background: #fff; border-radius: 5em;"  src="{{asset('applicant/images/skyned.jpg')}}"> </center>
                    <div class="w-77 sm:w-88 truncate sm:whitespace-normal font-medium text-lg">Your Account Manager</div>
<BR>               
                  <div class="truncate sm:whitespace-normal flex items-center"> <i data-feather="user" class="w-4 h-4 mr-2"></i>David Amodu </div>
                  
                  <div class="truncate sm:whitespace-normal flex items-center"> <i data-feather="mail" class="w-4 h-4 mr-2"></i> Admissions@skynedconsults.com </div>
                  <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-feather="instagram" class="w-4 h-4 mr-2"></i> Instagram @Skynedconsults </div>
                 <div class="truncate sm:whitespace-normal flex items-center "> <i data-feather="twitter" class="w-4 h-4 mr-2"></i> Twitter @Skynedconsults </div>

                       
                       
                       
                       
                    </div>
					<a href="#" class="btn btn-primary btn-block">More Info </a>	
				</div>
			</div>
		</div>


		
	</div>
</div>	





<br>
<br>
<br>



<div class="col-span-12 lg:col-span-6 mt-6">
                                <div class="ads-box box p-8 relative overflow-hidden bg-theme-3 intro-y">
                                    <div class="ads-box__title w-full sm:w-72 text-white text-xl -mt-3">Skyned Consults connects international students and recruitment partners to <br> educational opportunities at institutions around the world.</div>
                                    <div class="w-full sm:w-72 leading-relaxed text-white text-opacity-70 dark:text-gray-600 dark:text-opacity-100 mt-3">Apply now, quick registration</div>
                                    <button class="btn w-32 bg-white dark:bg-dark-2 dark:text-white mt-6 sm:mt-10">Start Now</button>
                                    <img class="hidden sm:block absolute top-0 right-0 w-2/5 -mt-3 mr-2" alt="Rubick Tailwind HTML Admin Template" src="{{asset('applicant/images/woman-illustration.svg')}}">
                                </div>
                            </div>
                            <!-- END: Ads 1 -->
                            <!-- BEGIN: Ads 2 -->
                            <div class="col-span-12 lg:col-span-6 mt-6">
                                <div class="ads-box box p-8 relative overflow-hidden intro-y">
                                    <div class="ads-box__title w-full sm:w-52 text-theme-1 dark:text-white text-xl -mt-3">Invite friends to get <span class="font-medium">FREE</span> bonuses!</div>
                                    <div class="w-full sm:w-60 leading-relaxed text-gray-600 mt-2">Get a IDR 100,000 voucher by inviting your friends to fund #BecomeMember</div>
                                   
                                    <img class="hidden sm:block absolute top-0 right-0 w-1/2 mt-1 -mr-12" alt="Rubick Tailwind HTML Admin Template" src="{{asset('applicant/images/phone-illustration.svg')}}">
                                </div>
                            </div>
                            
                            
<br>
<br>
<br>
</div>
@include('applicants.sections.master_modal')
@include('applicants.includes.footer')






<script>
	 $(document).ready(function(){
        $("#master").modal('show');
    });
    
   



</script>

<script>
$ (document).ready(function() {   
      if ($ .cookie("popup_1_2") == null) {
           $('#master').modal('show');
      $ .cookie("popup_1_2", "2");
   }
 });
</script>







<script>


  $(function()
  {
    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');
  });
</script>



<script src="//code.jivosite.com/widget/2kHHFIr0pd" async></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js" ></script>








