<!-- post graduate -->
<head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js" ></script>

    </head>
<div  class="modal fade" id="master">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 align="center" class="modal-title font-weight-bold">Eligibility Requirement</h4>

                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                    <div class="">  
                        <div class="">
                    <form action="{{url('applicants/submit_primary_info')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="@if(isset($primary_informations->id)){{$primary_informations->id}}@endif">
                    <div class="row">

                    <div class="col-xl-6">
                    <label> Previous Educational History</label>
                    <textarea  type="text" name="prev_edu_history" required=""  class="form-control">@if(isset($primary_informations->prev_edu_history)){{$primary_informations->prev_edu_history}}@endif</textarea>
                    <br> 
                    </div>

                    <div class="col-xl-6">
                      <label>What did you study in school?</label>
                      <textarea  type="text" name="course_studied" required="" class="form-control" >@if(isset($primary_informations->course_studied)){{$primary_informations->course_studied}}@endif</textarea>
                    <br>
                    </div>

                    <div class="col-xl-4">
                      <label>Date Of Birth</label>
                      <input placeholder="YYYY-MM-DD" type="text" name="d_o_b" class="form-control" required value="@if(isset($primary_informations->d_o_b)){{date('Y-m-d',strtotime($primary_informations->d_o_b))}}@endif" pattern="(?:19|20)(?:(?:[13579][26]|[02468][048])-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))|(?:[0-9]{2}-(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-8])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:29|30))|(?:(?:0[13578]|1[02])-31)))"  ><br>
                    </div>

                    <div class="col-xl-4">
                      <label>Are you currently working or enrolled in any program?</label>
                      <input type="text" name="enrolled_question" class="form-control" required="" placeholder="Enter the program you are enrolled in."  value="@if(isset($primary_informations->enrolled_question)){{$primary_informations->enrolled_question}}@endif"><br>
                    </div>

                    <div class="col-xl-4">
                      <label><b>What is your budget for fees?</b></label>
                      <input type="number" placeholder="Enter budget Fees in USD" name="budget_fees" class="form-control"  value="@if(isset($primary_informations->budget_fees)){{$primary_informations->budget_fees}}@endif" required="" min="11000"  oninvalid="this.setCustomValidity('Budget Must Not Be less than 11000 USD')"
    oninput="this.setCustomValidity('')" ><br>
                    </div>

                    <div class="col-xl-4">
                      <label>Do you have a sponsor?</label>
                      <select class="form-control" name="sponsor" required="">
                        @if(isset($primary_informations->sponsor))
                        <option value="{{$primary_informations->sponsor}}">{{$primary_informations->sponsor}}</option>
                        @endif
                        <option value="Family">Family</option>
                        <option value="Myself">Myself</option>
                        <option value="Other">Other</option>
                      </select><br>
                    </div>

                    <div class="col-xl-4">
                      <label>What's your preferred destination?</label>
                      <select class="form-control" name="destination" required="">
                        @if(isset($primary_informations->destination))
                        <option value="{{$primary_informations->destination}}">{{$primary_informations->destination}}</option>
                        @endif
                        <option value="Canada">Canada</option>
                        <option value="UK">UK</option>
                        <option value="Australia">Australia</option>
                        <option value="USA">USA</option>
                      </select><br>
                    </div>

                    <div class="col-xl-4">
                      <label>Do you have any program of choice?</label>
                      <input placeholder="Enter Program of choice" type="text" name="program" class="form-control" required="" value="@if(isset($primary_informations->program)){{$primary_informations->program}}@endif"><br>
                    </div>

                    <div class="col-xl-4">
                      <label>Do you have a Canada, USA or UK visit or study visa?</label>
                      <select name="visa" class="form-control">
                         @if(isset($primary_informations->visa))
                         <option selected value="Canada">{{$primary_informations->visa}}</option>
                         @endif
                        <option value="Canada">Canada</option>
                        <option value="USA">USA</option>
                        <option value="UK">UK</option>
                      </select>
                      <br>
                    </div>

                    <div class="col-xl-4">
                      <label>How many years of study gap do you have?</label>
                      <input placeholder="Enter years of study gap" type="text" name="study_gap" value="@if(isset($primary_informations->study_gap)){{$primary_informations->study_gap}}@endif" class="form-control"><br>
                    </div>

                    <div class="col-xl-4">
                      <label>When did you graduate from High school/University</label>
                      <input placeholder="YYYY-MM-DD" type="text" name="graduated_on" class="form-control" required value="@if(isset($primary_informations->graduated_on)){{date('Y-m-d',strtotime($primary_informations->graduated_on))}}@endif" pattern="(?:19|20)(?:(?:[13579][26]|[02468][048])-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))|(?:[0-9]{2}-(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-8])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:29|30))|(?:(?:0[13578]|1[02])-31)))"  ><br>
                    </div>

                



      </div>                          
                                <button  class="btn btn-primary btn-block btn-color" type="submit">
                                    Submit
                                </button>       
                            </form>
               </div>
        </div>
      </div>
    </div>
</div>
</div>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js" ></script>
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











