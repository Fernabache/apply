<script src="{{ asset('js/app.js') }}"></script>
<script src='https://unpkg.com/nprogress@0.2.0/nprogress.js'></script>
<script src="https://js.pusher.com/5.0/pusher.min.js"></script>
<script>
  // Enable pusher logging - don't include this in production
  Pusher.logToConsole = true;
  var pusher = new Pusher("{{ config('chatify.pusher.key') }}", {
    encrypted: true,
    cluster: "{{ config('chatify.pusher.options.cluster') }}",
    authEndpoint: '{{route("pusher.auth")}}',
    auth: {
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    }
  });
</script>
<script src="{{ asset('js/chatify/code.js') }}"></script>
<script>
  // Messenger global variable - 0 by default
  messenger = "{{ @$id }}";
</script>

<script>
		function myTimer() {
if(!sessionStorage.getItem('firstVisitTime')) {
   var myDate = Date.now();
   if(!localStorage.getItem('timeOnSite')) {
   sessionStorage.setItem('firstVisitTime',myDate);
   } else {
   if(localStorage.getItem('tabsCount') && parseInt(localStorage.getItem('tabsCount'))>1){
   sessionStorage.setItem('firstVisitTime',myDate-parseInt(localStorage.getItem('timeOnSite'))); 