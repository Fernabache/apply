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

<a href="/chatify" class="chat-toggle back-to-top" ><i class="material-icons">chat</i></a>

  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ asset('admin/assets/vendor/jquery/dist/jquery.min.js') }} "></script>
  <script src=" {{ asset('admin/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }} "></script>
  <script src="{{ asset('admin/assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src=" {{ asset('admin/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }} "></script>
  <!-- Optional JS -->
  <script src=" {{ asset('admin/assets/vendor/chart.js/dist/Chart.min.js') }} "></script>
  <script src=" {{ asset('admin/assets/vendor/chart.js/dist/Chart.extension.js') }} "></script>
  <!-- Argon JS -->
  <script src=" {{ asset('admin/assets/js/argon.js?v=1.2.0') }} "></script>
  <!-- State JS -->
  <script src=" {{ asset('admin/assets/js/state.js') }} "></script>

   <!-- Bar Chart JS -->
   <!-- <script src=" {{ asset('admin/assets/js/chart-bar-demo.js') }} "></script> -->
  <!-- Data Tables JS -->
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" type="text/javascript"></script>
  <!-- ck editor -->
  <script src=" {{ asset('admin/assets/ckeditor/ckeditor.js') }} " ></script>
  <!-- Excel JS -->
 
  <script src="{{asset('admin/assets/js/jquery.tableToExcel.js')}}"></script>
</body>

</html>


<script>
		function myTimer() {
if(!sessionStorage.getItem('firstVisitTime')) {
   var myDate = Date.now();
   if(!localStorage.getItem('timeOnSite')) {
   sessionStorage.setItem('firstVisitTime',myDate);
   } else {
   if(localStorage.getItem('tabsCount') && parseInt(localStorage.getItem('tabsCount'))>1){
   sessionStorage.setItem('firstVisitTime',myDate-parseInt(localStorage.getItem('timeOnSite'))); 
   } else {
   sessionStorage.setItem('firstVisitTime',myDate);
   } 
}
}
var myInterval = setInterval(function(){  
   var time = Date.now()-parseInt(sessionStorage.getItem('firstVisitTime'));
   localStorage.setItem('timeOnSite',time); 

}, 1000);
return myInterval;
}    
window.onbeforeunload=function() {
console.log('Document onbeforeunload state.');
clearInterval(timer);
};
window.onunload=function() {
var time = Date.now();
localStorage.setItem('timeLeftSite',time);
localStorage.setItem("tabsCount",parseInt(localStorage.getItem("tabsCount"))-1);
console.log('Document onunload state.');
};
if (document.readyState == "complete") {
if(localStorage.getItem("tabsCount")){
localStorage.setItem("tabsCount",parseInt(localStorage.getItem("tabsCount"))+1);
var timer = myTimer();

} else {
localStorage.setItem("tabsCount",1);
}
   console.log("Document complete state.");
}
var timer = myTimer();
Updatetime();
function Updatetime()
{
     var userId = "{{Auth::user()->id}}";
		      $.ajax({ 
		        type: 'GET',
		        url: '{{url("time_update")}}',
		        data: {'TotalTimeSpent': timer, 'UserId' : userId}
		      });

} 

		 
		     
		   

</script>


<!-- initializing data tables -->
<script >
  $(function()
  {
    $('#example1').DataTable({
      responsive: true
    });
    $('#example2').DataTable({
      responsive: true
    });
  });
</script>
<!-- initializing ck editor -->

<script>
  $(function()
  {
    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');
    CKEDITOR.replace('editor3');
    CKEDITOR.replace('editor4');
     CKEDITOR.config.height="90px"
  })
</script>





<!-- configuration of excel js  -->
  <script>

    
    //... or
    
    $('#excel').click(function () {
        $('table').tblToExcel();
    });
    
</script>



<script>
    $(document).ready(function(){
        $("#myModal").modal('show');
    });

</script>











