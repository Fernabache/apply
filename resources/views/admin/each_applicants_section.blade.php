@include('admin.sections.header')
@include('admin.sections.sidebar')
@include('admin.sections.navbar')
<style>
        @import url(https://fonts.googleapis.com/css?family=Poppins:300,400);

.row{
  max-width: 950px;
  margin: 0 auto;
}
.btn{
  white-space: normal;
}
.button-wrap {
  position: relative;
  text-align: center;
  .btn {
    font-family: 'Roboto', sans-serif;
    box-shadow: 0 0 15px 5px rgba(0, 0, 0, 0.5);
    border-radius: 0px;
    border-color: #222;
    cursor: pointer;
    text-transform: uppercase;
    font-size: 1.1em;
    font-weight: 400;
    letter-spacing: 1px;
    small {
      font-size: 0.8rem;
      letter-spacing: normal;
      text-transform: none;
    }
  }
}


/** SPINNER CREATION **/

.loader {
  position: relative;
  text-align: center;
  margin: 15px auto 35px auto;
  z-index: 9999;
  display: block;
  width: 80px;
  height: 80px;
  border: 10px solid rgba(0, 0, 0, .3);
  border-radius: 50%;
  border-top-color:#071463;
  animation: spin 1s ease-in-out infinite;
  -webkit-animation: spin 1s ease-in-out infinite;
}

@keyframes spin {
  to {
    -webkit-transform: rotate(360deg);
  }
}

@-webkit-keyframes spin {
  to {
    -webkit-transform: rotate(360deg);
  }
}


/** MODAL STYLING **/

.modal-content {
  border-radius: 0px;
  box-shadow: 0 0 20px 8px rgba(0, 0, 0, 0.7);
}



.loader-txt {
  p {
    font-size: 13px;
    color: blue;
    small {
      font-size: 11.5px;
      color: #999;
    }
  }
}

#output {
  padding: 25px 15px;
  background: blue;
  border: 1px solid #blue;
  max-width: 350px;
  margin: 35px auto;
  font-family: 'Roboto', sans-serif !important;
  p.subtle {
    color: #555;
    font-style: italic;
    font-family: 'Roboto', sans-serif !important;
  }
  h4 {
    font-weight: 300 !important;
    font-size: 1.1em;
    font-family: 'Roboto', sans-serif !important;
  }
  p {
    font-family: 'Roboto', sans-serif !important;
    font-size: 0.9em;
    b {
      text-transform: uppercase;
      text-decoration: underline;
    }
  }
}
    </style>

<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2  d-inline-block mb-0">{{$user->email}}</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="ni ni-istanbul"></i></a></li>
                  <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{$user->email}}</li>
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
	<button class="btn btn-primary" onclick="CreatePDFfromHTML();">Save as PDF</button>
</div>
</div>
</div>
<div class="html-content">
			<h3 class="font-weight-bold" align="center">Personal Informations</h3><hr>
      <div style="margin-left: 1em;" class="row">
        <div class="col-xl-12">
          <div class="row">
              <div class="col-xl-3">
                <p>FIRST NAME: {{strtoupper($user->first_name)}}</p>
              </div>
              <div class="col-xl-3">
                <p>MIDDLE NAME: {{strtoupper($user->middle_name)}}</p>
              </div>
              <div class="col-xl-3">
                <p>LAST NAME: {{strtoupper($user->last_name)}}</p>
              </div>
              <div class="col-xl-3">
                <p>DATE of BIRTH: {{date('Y-m-d',strtotime($user->d_o_b))}}</p>
              </div>
              <div class="col-xl-3">
                <p>FIRST LANGUAGE: {{strtoupper($user->first_language)}}</p>
              </div>
              <div class="col-xl-3">
                <p>COUNTRY OF CITIZENSHIP: {{strtoupper($user->country_of_citizenship)}}</p>
              </div>
              <div class="col-xl-3">
                <p>PASSPOSRT NUMBER: {{$user->passport_number}}</p>
              </div>
              <div class="col-xl-3">
                <p>GENDER: {{strtoupper($user->gender)}}</p>
              </div>
              <div class="col-xl-3">
                <p>MARITAL STATUS: {{strtoupper($user->marital_status)}}</p>
              </div>
              <div class="col-xl-3">
                <p>ADDRESS: {{strtoupper($user->address)}}</p>
              </div>
              <div class="col-xl-3">
                <p>CITY/TOWN: {{strtoupper($user->city)}}</p>
              </div>
              <div class="col-xl-3">
                <p>COUNTRY: {{strtoupper($user->country_of_citizenship)}}</p>
              </div>
              <div class="col-xl-3">
                <p>PROVINCE/STATE: {{strtoupper($user->state)}}</p>
              </div>
              <div class="col-xl-3">
                <p>POSTAL/ZIP CODE: {{$user->postal_code}}</p>
              </div>
              <div class="col-xl-3">
                <p>EMAIL: {{$user->email}}</p>
              </div>
              <div class="col-xl-3">
                <p>PONE NUMBER: +{{$user->phone}}</p>
              </div>
          </div>
        
      </div><hr>

      <div class="col-xl-12">
        <h3 class="font-weight-bold" align="center">Primary Informations</h3><hr>
        @if(isset($primary_informations->prev_edu_history))
        <div style="margin-left: 1em;" class="row">
          <div class="col-xl-3" >
            <label>PREVIOUS EDUCATION HISTORY</label>
            {!! $primary_informations->prev_edu_history !!}
          </div>
          <br>
          <div class="col-xl-3" style="margin-left: 1em;">
            <label>COURSE STUDIED</label>
            {!! $primary_informations->course_studied !!}
          </div>
          <div class="col-xl-3">
            <p>DATE OF BIRTH:</p> <b> {{date('Y-m-d',strtotime($primary_informations->d_o_b))}}</b>
          </div>
          <div class="col-xl-3">
            <p>ENROLLED PROGRAM: {{strtoupper($primary_informations->enrolled_question)}}</p>
          </div>
          <div class="col-xl-3">
            <p>BUDGET FOR FEES: ${{number_format($primary_informations->budget_fees, 2)}}</p>
          </div>
         
          <div class="col-xl-3">
            <p>SPONSOR: {{strtoupper($primary_informations->sponsor)}}</p>
          </div>
          <div class="col-xl-3">
            <p>PREFERRED DESTINATION: {{strtoupper($primary_informations->destination)}}</p>
          </div>
          <div class="col-xl-3">
            <p>PROGRAM OF CHOICE: {{strtoupper($primary_informations->program)}}</p>
          </div>
          <div class="col-xl-3">
            <p>VISIT OR STUDY VISA: {{strtoupper($primary_informations->visa)}}</p>
          </div>
          <div class="col-xl-3">
            <p>STUDY GAP: {{strtoupper($primary_informations->study_gap)}}Years </p>
          </div>
          <div class="col-xl-8">
            <p>DATE OF GRADUATING FROM HIGH SCHOOL: {{date('Y-m-d',strtotime($primary_informations->graduated_on))}}</p>
          </div>
          </div>
          @endif
           <div>
        </div>
      </div>

      <div class="col-xl-12">
         <h3 class="font-weight-bold" align="center">Attended Schools</h3><hr>
          <div style="margin-left: 1em;" class="row">
             @if(isset($attended_school_post->id))
            <div class="col-xl-6">
              <h3 class="font-weight-bold" align="center">POST GRADUATE</h3>
              <div class="row">
                <div class="col-xl-4">
                  <label>Level of Education: {{strtoupper($attended_school_post->level_of_education)}}</label>
                </div>
                <div class="col-xl-4">
                  <label>COUNTRY OF INSTITUTION: {{strtoupper($attended_school_post->country)}}</label>
                </div>
                <div class="col-xl-4">
                  <label>NAME OF INSTITUION: {{strtoupper($attended_school_post->institution)}}</label>
                </div>
                <div class="col-xl-4">
                  <label>PRIMARY LANGUAGE OF INSTRUCTION: {{strtoupper($attended_school_post->language)}}</label>
                </div>
                <div class="col-xl-4">
                  <label>ATTENDED INSTITUION FROM: {{date('Y-m-d',strtotime($attended_school_post->from))}}</label>
                </div>
                <div class="col-xl-4">
                  <label>ATTENDED INSTITUION TO: {{date('Y-m-d',strtotime($attended_school_post->to))}}</label>
                </div>
                <div class="col-xl-4">
                  <label>DEGREE AWARDED: {{strtoupper($attended_school_post->degree_awarded)}}</label>
                </div>
                <div class="col-xl-4">
                  <label>DEGREE AWARDED ON: {{date('Y-m-d',strtotime($attended_school_post->degree_awarded_on))}}</label>
                </div>
                <div class="col-xl-12">
                  <label></label>
                </div>
              
              </div>
            </div>

            <div class="col-xl-6">
              <h3 class="font-weight-bold" align="center">SCHOOL ADRESS</h3>
              <div class="col-xl-12">
                <div class="row">
                  <div class="col-xl-4">
                    <label>ADDRESS: {{strtoupper($attended_school_post->school_address)}}</label>
                  </div>
                  <div class="col-xl-4">
                    <label>CITY/TOWN: {{strtoupper($attended_school_post->city)}}</label>
                  </div>
                  <div class="col-xl-4">
                    <label>PROVINCE: {{strtoupper($attended_school_post->province)}}</label>
                  </div>
                  <div class="col-xl-4">
                    <label>POSTAL/ZIP CODE: {{strtoupper($attended_school_post->postal_code)}}</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endif


          @if(isset($attended_school_bachelor->id))
          <div style="margin-left: 1em;" class="row">
            <div class="col-xl-6">
              <h3 class="font-weight-bold" align="center">BACHELOR'S DEGREE</h3>
              <div class="row">
                <div class="col-xl-4">
                  <label>Level of Education: {{strtoupper($attended_school_bachelor->level_of_education)}}</label>
                </div>
                <div class="col-xl-4">
                  <label>COUNTRY OF INSTITUTION: {{strtoupper($attended_school_bachelor->country)}}</label>
                </div>
                <div class="col-xl-4">
                  <label>NAME OF INSTITUION: {{strtoupper($attended_school_bachelor->institution)}}</label>
                </div>
                <div class="col-xl-4">
                  <label>PRIMARY LANGUAGE OF INSTRUCTION: {{strtoupper($attended_school_bachelor->language)}}</label>
                </div>
                <div class="col-xl-4">
                  <label>ATTENDED INSTITUION FROM: {{date('Y-m-d',strtotime($attended_school_bachelor->from))}}</label>
                </div>
                <div class="col-xl-4">
                  <label>ATTENDED INSTITUION TO: {{date('Y-m-d',strtotime($attended_school_bachelor->to))}}</label>
                </div>
                <div class="col-xl-4">
                  <label>DEGREE AWARDED: {{strtoupper($attended_school_bachelor->degree_awarded)}}</label>
                </div>
                <div class="col-xl-4">
                  <label>DEGREE AWARDED ON: {{date('Y-m-d',strtotime($attended_school_bachelor->degree_awarded_on))}}</label>
                </div>
                <div class="col-xl-12">
                  <label></label>
                </div>
              
              </div>
            </div>

            <div class="col-xl-6">
              <h3 class="font-weight-bold" align="center">SCHOOL ADRESS</h3>
              <div class="col-xl-12">
                <div class="row">
                  <div class="col-xl-4">
                    <label>ADDRESS: {{strtoupper($attended_school_bachelor->school_address)}}</label>
                  </div>
                  <div class="col-xl-4">
                    <label>CITY/TOWN: {{strtoupper($attended_school_bachelor->city)}}</label>
                  </div>
                  <div class="col-xl-4">
                    <label>PROVINCE: {{strtoupper($attended_school_bachelor->province)}}</label>
                  </div>
                  <div class="col-xl-4">
                    <label>POSTAL/ZIP CODE: {{strtoupper($attended_school_bachelor->postal_code)}}</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          @endif


          @if(isset($attended_school_grade->id))
          <div style="margin-left: 1em;" class="row">
            <div class="col-xl-6">
              <h3 class="font-weight-bold" align="center">GRADE</h3>
              <div class="row">
                <div class="col-xl-4">
                  <label>Level of Education: {{strtoupper($attended_school_grade->level_of_education)}}</label>
                </div>
                <div class="col-xl-4">
                  <label>COUNTRY OF INSTITUTION: {{strtoupper($attended_school_grade->country)}}</label>
                </div>
                <div class="col-xl-4">
                  <label>NAME OF INSTITUION: {{strtoupper($attended_school_grade->institution)}}</label>
                </div>
                <div class="col-xl-4">
                  <label>PRIMARY LANGUAGE OF INSTRUCTION: {{strtoupper($attended_school_grade->language)}}</label>
                </div>
                <div class="col-xl-4">
                  <label>ATTENDED INSTITUION FROM: {{date('Y-m-d',strtotime($attended_school_grade->from))}}</label>
                </div>
                <div class="col-xl-4">
                  <label>ATTENDED INSTITUION TO: {{date('Y-m-d',strtotime($attended_school_grade->to))}}</label>
                </div>
                <div class="col-xl-4">
                  <label>DEGREE AWARDED: {{strtoupper($attended_school_grade->degree_awarded)}}</label>
                </div>
                <div class="col-xl-4">
                  <label>DEGREE AWARDED ON: {{date('Y-m-d',strtotime($attended_school_grade->degree_awarded_on))}}</label>
                </div>
                <div class="col-xl-12">
                  <label></label>
                </div>
              
              </div>
            </div>

            <div class="col-xl-6">
              <h3 class="font-weight-bold" align="center">SCHOOL ADRESS</h3>
              <div class="col-xl-12">
                <div class="row">
                  <div class="col-xl-4">
                    <label>ADDRESS: {{strtoupper($attended_school_grade->school_address)}}</label>
                  </div>
                  <div class="col-xl-4">
                    <label>CITY/TOWN: {{strtoupper($attended_school_grade->city)}}</label>
                  </div>
                  <div class="col-xl-4">
                    <label>PROVINCE: {{strtoupper($attended_school_grade->province)}}</label>
                  </div>
                  <div class="col-xl-4">
                    <label>POSTAL/ZIP CODE: {{strtoupper($attended_school_grade->postal_code)}}</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          @endif


          <div class="col-xl-12">
            <h3 class="font-weight-bold" align="center">APPLICATIONS</h3><hr>
            <div style="margin-left: 1em;" class="row">
              @foreach($applications as $application )
                <div class="col-xl-8">
                  <?php  
                      $image = Storage::url($application->school_image);
                  ?>
                  <img style="border-radius: 3em; "  height="60px" width="60px" src="{{ asset('/public'.$image) }}"><h4 style="font-size: 1.3em; display: inline;">{{$application->school_name}}</h4><h4 class="font-weight-bold">{{strip_tags($application->program_name)}}</h4><br>
                  <h4 class="font-weight-bold">Application Fee: ${{number_format($application->application_fee)}}</h4>
              </div>

              <div class="col-xl-4" style="margin-top: 2em;">
              <h4 class="font-weight-bold">Payment: {{$application->payment}}</h4><br>
              <h4 class="font-weight-bold">Admission status: {{$application->admission_status}}</h4>
              <a href="#" id="admission" data-id = "{{$application->application_id}}" class="btn btn-success btn-block">Change Admission Status</a>
            </div>
           @endforeach


            </div>
          </div>


          <div class="col-xl-12">
            <h3 class="font-weight-bold" align="center">EDUCATION SUMMARIES</h3><hr>
            @if(isset($education_summary->country))
            <div style="margin-left: 1em;" class="row">
              <div class="col-xl-4">
                <label>COUNTRY OF EDUCATION: {{strtoupper($education_summary->country)}}</label>
              </div>
              <div class="col-xl-4">
                <label>HIGHEST LEVEL OF EDUCATION: {{strtoupper($education_summary->highest_level_of_education)}}</label>
              </div>
              <div class="col-xl-4">
                <label>GRADING SCHEME: {{strtoupper($education_summary->grading_scheme)}}</label>
              </div>
              <div class="col-xl-4">
                <label>GRADE SCALE: {{strtoupper($education_summary->grade_scale)}}</label>
              </div>
              <div class="col-xl-4">
                <label>GRADING AVERAGE: {{strtoupper($education_summary->grade_average)}}</label>
              </div>
              
            </div>
            @endif
          </div>

          <div class="col-xl-12">
            <h3 class="font-weight-bold" align="center">TEST SCORES</h3><hr>
            <div style="margin-left: 1em;" class="row">
              @foreach($exam_details as $exam_detail)
              <div class="col-xl-4">
                <label>EXAM TYPE: {{strtoupper($exam_detail->exam_type)}}</label>
              </div>
              <div class="col-xl-4">
                <label>DATE OF EXAM: {{date('Y-m-d',strtotime($exam_detail->date_of_exam))}}</label>
              </div>
              <div class="col-xl-4">
                <label>READING SCORES: {{strtoupper($exam_detail->reading_score)}}</label>
              </div>
              <div class="col-xl-4">
                <label>LISTENING SCORES: {{strtoupper($exam_detail->listening_score)}}</label>
              </div>
              <div class="col-xl-4">
                <label>SPEAKING SCORES: {{strtoupper($exam_detail->speaking_score)}}</label>
              </div>
              <div class="col-xl-4">
                <label>WRITING SCORES: {{strtoupper($exam_detail->writing_score)}}</label>
              </div>
              <div class="col-xl-4">
                <label>OVERALL SCORES: {{strtoupper($exam_detail->overall_scores)}}</label>
              </div>
              <div class="col-xl-4">
                <label>VERBAL SCORE: {{strtoupper($exam_detail->verbal_score)}}</label>
              </div>
              <div class="col-xl-4">
                <label>QUANTITATIVE SCORES: {{strtoupper($exam_detail->quantitiative_score)}} </label>
              </div>
              <div class="col-xl-4">
                <label>VERBAL RANK: {{strtoupper($exam_detail->verbal_rank)}}</label>
              </div>
              <div class="col-xl-4">
                <label>QUANTITATIVE RANK: {{strtoupper($exam_detail->quantitiative_rank)}}</label>
              </div>
              <div class="col-xl-4">
                <label>WRITING RANK: {{strtoupper($exam_detail->writing_rank)}}</label>
              </div>
              <hr>
              @endforeach
            </div>
          </div>
          
          
        <div class="col-xl-12">
    {{-- Uploaded documents--}}	
<?php if(isset($uploaded_documents_un->user_id)):?>
	    <div style="margin-top: 1em;" class="col-xl-12">
	    	<div class="card">
        <h3 style="font-size: 1.5em;" align="center" class="font-weight-bold" >Uploaded Documents(Undergraduate)</h3><br>
        <div class="row">

      	<div style="margin-top: 1em;" class="col-xl-3">
      		<h4 align="center">Resume</h4>
      		<img style="margin-top: 1em;" onerror="this.style.display='none'" src="{{asset('public/storage/docs/'.$uploaded_documents_un->resume)}}" class="img-fluid">
      	</div>

      	<div style="margin-top: 1em;" class="col-xl-3">
      		<h4 align="center">International Passport</h4>
      		<img style="margin-top: 1em;" onerror="this.style.display='none'" src="{{asset('public/storage/docs/'.$uploaded_documents_un->passport)}}" class="img-fluid">
      	</div>

      	<div style="margin-top: 1em;" class="col-xl-3">
      		<h4 align="center">WAEC Result</h4>
      		<img style="margin-top: 1em;" src="{{asset('public/storage/docs/'.$uploaded_documents_un->waec_result)}}" onerror="this.style.display='none'" class="img-fluid">
      	</div>
         
      	<div style="margin-top: 1em;" class="col-xl-3">
      		<h4 align="center">WAEC Scratch Card</h4>
      		<img style="margin-top: 1em;" src="{{asset('public/storage/docs/'.$uploaded_documents_un->waec_scratch_card)}}" onerror="this.style.display='none'" class="img-fluid">
      	</div>

      	<div style="margin-top: 1em;" class="col-xl-6">
      		<h4 align="center">High School  Transcripts(Optional)</h4>
      		<?php $transcripts = json_decode($uploaded_documents_un->references,true); ?>
      <?php if(isset($transcripts)): ?>
      		<div class="row">
      			<?php for($i =0; $i<count($transcripts) ;++$i ): ?>
      			<div style="margin-top: 1em;" class="col-xl-4">
      				<img onerror="this.style.display='none'" src="{{asset('public/storage/docs/'.$transcripts[$i])}}" class="img-fluid">	
      			</div>
      			<?php endfor; ?>
      		</div>
      	<?php endif; ?>
      	</div>
          
        </div>
    </div>
       
    </div>
<?php elseif(isset($uploaded_documents_pos->user_id)):?>
	    <div style="margin-top: 1em;" class="col-xl-12">
	    <div class="card">
        <h3 style="font-size: 1.5em;" align="center" class="font-weight-bold" >Uploaded Documents(Postgraduate)</h3><br>
        <div class="row">
      	<div style="margin-top: 1em;" class="col-xl-3">
      		<h4 align="center">Resume</h4>
      		<img style="margin-top: 1em;" onerror="this.style.display='none'" src="{{asset('public/storage/docs/'.$uploaded_documents_pos->resume)}}" class="img-fluid">
      	</div>

      	<div style="margin-top: 1em;" class="col-xl-3">
      		<h4 align="center">WAEC Result</h4>
      		<img style="margin-top: 1em;" src="{{asset('public/storage/docs/'.$uploaded_documents_pos->waec_result)}}" onerror="this.style.display='none'" class="img-fluid">
      	</div>
          
         <div style="margin-top: 1em;" class="col-xl-3">
      		<h4 align="center">Bachelor's certificate</h4>
      		<img style="margin-top: 1em;" onerror="this.style.display='none'" src="{{asset('public/storage/docs/'.$uploaded_documents_pos->bsc_certificate)}}" class="img-fluid">
      	</div>

      	<div style="margin-top: 1em;" class="col-xl-3">
      		<h4 align="center">International Passport</h4>
      		<img style="margin-top: 1em;" onerror="this.style.display='none'" src="{{asset('public/storage/docs/'.$uploaded_documents_pos->passport)}}" class="img-fluid">
      	</div>
        
        <div style="margin-top: 1em;" class="col-xl-3">
      		<h4 align="center">Emergency Contact</h4>
      		<input style="margin-top: 1em;" type="text" disabled="" class="form-control" value="{{$uploaded_documents_pos->emergency_contact}}">
      	</div>

      	<div style="margin-top: 1em;" class="col-xl-6">
      		<h4 align="center">Bachelor's transcripts</h4>
      		<?php $bsc_transcripts = json_decode($uploaded_documents_pos->bsc_transcripts,true); ?>
      
      		<div class="row">
      			<?php for($i =0; $i<count($bsc_transcripts) ;++$i ): ?>
      			<div style="margin-top: 1em;" class="col-xl-4">
      				<img onerror="this.style.display='none'" src="{{asset('public/storage/docs/'.$bsc_transcripts[$i])}}" class="img-fluid">	
      			</div>
      			<?php endfor; ?>
      		</div>
      		
      	</div>

      	<div style="margin-top: 1em;" class="col-xl-6">
      		<h4 align="center">References</h4>
      		<?php $references = json_decode($uploaded_documents_pos->references,true); ?>
      
      		<div class="row">
      			<?php for($i =0; $i<count($references) ;++$i ): ?>
      			<div style="margin-top: 1em;" class="col-xl-4">
      				<img onerror="this.style.display='none'" src="{{asset('public/storage/docs/'.$references[$i])}}" class="img-fluid">	
      			</div>
      			<?php endfor; ?>
      		</div>
      	</div>

      <!--	<div style="margin-top: 1em;" class="col-xl-6">
      		<h4 align="center">SS1-SS3 Transcripts(Optional)</h4>-->
      		<?php $transcripts = json_decode($uploaded_documents_pos->transcriptts,true); ?>
      <?php if(isset($transcripts)): ?>
      		<div class="row">
      			<?php for($i =0; $i<count($transcripts) ;++$i ): ?>
      			<div style="margin-top: 1em;" class="col-xl-4">
      				<img onerror="this.style.display='none'" src="{{asset('public/storage/docs/'.$transcripts[$i])}}" class="img-fluid">	
      			</div>
      			<?php endfor; ?>
      		</div>
      	<?php endif; ?>
      	</div>

      	
        </div>
       
    </div>
    </div>
<?php endif; ?>
       
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



<!-- modal page -->
<?php if(Session::get('success')!==null): ?>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 align="center" class="modal-title">Admission Status</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h3 align="center">UPDATED TO: {{Session::get('success')}}&nbsp;<img src="{{ asset('admin/assets/img/icons/common/checked.png') }}" width="40px"></h3><hr>  
            </div>
        </div>
    </div>
</div>

<?php endif; ?>

<!-- admission modal -->
<div id="status" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 align="center" class="modal-title name">Admission Status</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-4">
                  <form action="{{url('admin/admission_status')}}" method="POST">
                   @csrf
                   <input type="hidden" name="email" value="{{$user->email}}">
                   <input type="hidden" name="first_name" value="{{$user->first_name}}">
                   <input type="hidden" name="last_name" value="{{$user->last_name}}">
                   <input type="hidden" name="application_id" class="application_id">
                   <input type="hidden" name="admission_status" value="PROCESSING...">
                   <button class="btn btn-primary">PROCESSING...</button>
                 </form>
                </div>

                <div class="col-4">
                  <form action="{{url('admin/admission_status')}}" method="POST">
                   @csrf
                   <input type="hidden" name="first_name" value="{{$user->first_name}}">
                   <input type="hidden" name="last_name" value="{{$user->last_name}}">
                   <input type="hidden" name="email" value="{{$user->email}}">
                   <input type="hidden" name="application_id" class="application_id">
                   <input type="hidden" name="admission_status" value="SUBMITTED">
                   <button class="btn btn-success">SUBMITTED</button>
                 </form>
                </div>

                <div class="col-4">
                  <form action="{{url('admin/admission_status')}}" method="POST">
                   @csrf
                   <input type="hidden" name="first_name" value="{{$user->first_name}}">
                   <input type="hidden" name="last_name" value="{{$user->last_name}}">
                   <input type="hidden" name="email" value="{{$user->email}}">
                   <input type="hidden" name="application_id" class="application_id">
                   <input type="hidden" name="admission_status" value="VISA">
                   <button class="btn btn-info">VISA</button>
                 </form>
                </div>
                
                <div class="col-4" style="margin-top: 0.6em;">
                  <form action="{{url('admin/admission_status')}}" method="POST">
                   @csrf
                   <input type="hidden" name="first_name" value="{{$user->first_name}}">
                   <input type="hidden" name="last_name" value="{{$user->last_name}}">
                   <input type="hidden" name="email" value="{{$user->email}}">
                   <input type="hidden" name="application_id" class="application_id">
                   <input type="hidden" name="admission_status" value="ADMITTED">
                   <button class="btn btn-secondary">ADMITTED</button>
                 </form>
                </div>

                <div class="col-4" style="margin-top: 0.5em;">
                  <form action="{{url('admin/admission_status')}}" method="POST">
                   @csrf
                   <input type="hidden" name="first_name" value="{{$user->first_name}}">
                   <input type="hidden" name="last_name" value="{{$user->last_name}}">
                   <input type="hidden" name="email" value="{{$user->email}}">
                   <input type="hidden" name="application_id" class="application_id">
                   <input type="hidden" name="admission_status" value="CANCELLED">
                   <button class="btn btn-warning">CANCELLED</button>
                 </form>
                </div>
              </div>
                 
                 
                 
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
@include('admin.sections.footer')






<script>

// addmission_status modal
 $(document).on('click', '#admission', function(e){
    e.preventDefault();
    $("#loadMe").modal('show');
    var id = $(this).data('id');
    updateStatus(id);
  });



function updateStatus(id){
  $.ajax({
    type: 'GET',
    url: '{{ url("get_admission_details") }}',
    data: {id:id},
    dataType: 'json',
    success: function(response){
        $("#loadMe").modal('hide');
        $('.modal-backdrop').remove();
      $('.name').html(response.program_name);
      $('.application_id').val(response.application_id);
      $('.program_id').val(response.program_id);
      $('.user_id').val(response.user_id);
      $('.payment').val(response.payment);
      $('.program_name').val(response.program_name);
      $('.admission_status').val(response.admission_status);
       $('#status').modal('show');

    
    }
  });
}



</script>


<script>
  //Create PDf from HTML...
function CreatePDFfromHTML() {
    var HTML_Width = $(".html-content").width();
    var HTML_Height = $(".html-content").height();
    var top_left_margin = 15;
    var PDF_Width = HTML_Width + (top_left_margin * 2);
    var PDF_Height = (PDF_Width * 1.5) + (top_left_margin * 2);
    var canvas_image_width = HTML_Width;
    var canvas_image_height = HTML_Height;

    var totalPDFPages = Math.ceil(HTML_Height / PDF_Height) - 1;

    html2canvas($(".html-content")[0]).then(function (canvas) {
        var imgData = canvas.toDataURL("image/jpeg", 1.0);
        var pdf = new jsPDF('p', 'pt', [PDF_Width, PDF_Height]);
        pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin, canvas_image_width, canvas_image_height);
        for (var i = 1; i <= totalPDFPages; i++) { 
            pdf.addPage(PDF_Width, PDF_Height);
            pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height*i)+(top_left_margin*4),canvas_image_width,canvas_image_height);
        }
        pdf.save("Applicant.pdf");    <p>FIRST NAME: {{strtoupper($user->first_name)}}</p>
        
    });
}
</script>