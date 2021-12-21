  <style>
      /*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/
.back-to-top {
  position: fixed;
  /*display: none;*/
  right: 15px;
  bottom: 15px;
  /*z-index: 99999;*/
  transition: 0.5s;
}

.back-to-top i {
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 18px;
  width: 40px;
  height: 40px;
  border-radius: 50px;
  background: #e43c5c;
  color: #fff;
  transition: all 0.4s;
}

.back-to-top:hover {
  bottom: 19px;
}
  </style>
    <!----
  @if(isset(Auth::user()->email))

  <a href="//code.jivosite.com/widget/MrVLprn7BI" class="chat-toggle back-to-top"><i class="material-icons">chat</i></a>
  

  @endif
    ---->
  <script src="{{asset('applicant/js/jquery.min.js')}}"></script>
  <script src="{{asset('applicant/js/popper.min.js')}}"></script>
  <script src="{{asset('applicant/js/bootstrap-material-design.min.js')}}"></script>
        <script src="{{asset('applicant/js/app.js')}}"></script> 
        <!-- END: JS Assets-->
        <!-- phone numbers -->
        <script src="{{asset('applicant/js/intlTelInput.min.js')}}"></script>
        <script src="{{asset('applicant/js/intlTelInput-jquery.min.js')}}"></script>
        <script src="{{asset('applicant/js/grading.js')}}"></script>
        <!-- Pagination -->
        <script src="{{asset('applicant/dist/pagination.js')}}"></script>
          <!-- ck editor -->
  <script src=" {{ asset('admin/assets/ckeditor/ckeditor.js') }} " ></script>
  
  
  
  
  

    </body>
</html>

<script>


 

// jQuery

$("#telephone3").intlTelInput({

  // options here

  nationalMode:false,

});



$("#telephone2").intlTelInput({

  // options here

  nationalMode:false,

});

</script>
<script>
    $(document).ready(function(){
        $("#myModal").modal('show');
    });

</script>





















