<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <link  href="{{asset('applicant/images/skyned.png')}}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{$title}}</title>
   
            <style>

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
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{asset('applicant/css/bootstrap/bootstrap.css')}}" >
        <!-- END: CSS Assets-->
        
        <!-- Phone numbers -->
        <link rel="stylesheet" href="{{asset('applicant/dist/pagination.css')}}" />
         <link rel="stylesheet" href="{{asset('applicant/css/intlTelInput.css')}}" />
              <link rel="stylesheet" href="{{asset('applicant/css/app.css')}}" />
                    <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700|Material+Icons" />
    </head>
    
    <script src="//code.jivosite.com/widget/2kHHFIr0pd" async></script>


    <!-- END: Head -->
