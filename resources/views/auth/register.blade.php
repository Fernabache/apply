

<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <link  href="{{asset('applicant/images/skyned.png')}}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <title>Register</title>
        <!-- BEGIN: CSS Assets-->

        <link rel="stylesheet" href="{{asset('applicant/css/app.css')}}" />
        <!-- END: CSS Assets-->
          <style>
            * > .intro-x:nth-child(1) {
                font-family: Poppins;
            }
            
              * > .intro-x:nth-child(3) {
                font-family: Poppins;
            }
            
              * > .intro-x:nth-child(5) {
                font-family: Poppins;
            }
            
              * > .intro-x:nth-child(7) {
                font-family: Poppins;
            }
        </style>
    </head>
    <!-- END: Head -->
 <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700|Material+Icons" />
    
<body class="login">
        <div class="container sm:px-10">
            <div class="block xl:grid grid-cols-2 gap-4">
                <!-- BEGIN: Login Info -->
                <div class="hidden xl:flex flex-col min-h-screen">
                    <a href="" class="-intro-x flex items-center pt-5">
                        <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="{{asset('applicant/images/skyned.png')}}">
                        <span class="text-white text-lg ml-3">Skyned Educational Consults<span class="font-medium"></span> </span>
                    </a>
                    <div class="my-auto">
                        <img alt="Midone Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="{{asset('applicant/images/illustration.svg')}}">
                        <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                          <p>A few more clicks to</p> 
                            <br>
                            <p>sign up your account.</p>
                        </div>
                        
                    </div>
                </div>
                <!-- END: Login Info -->
                <!-- BEGIN: Login Form -->
                <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                    <div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                        <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                            Register<img width="30px" src="{{asset('applicant/images/skyned.png')}}">
                        </h2>
                            
                             <h3 align="center" class="font-bold"> Or sign up with  </h3>
                        <div  class="col-12">
                           <div class="contenta">
                                <a  href="{{ url('/login/facebook') }}" class="btn btn-primary btn-block" style="border-radius:5em;"><img style="border-radius: 5em;"  src="{{asset('applicant/images/facebook.png')}}" width="25px"/><span> Facebook</span></a> 
                            </div><br>
                        </div>
                        <div class="col-12">
                            <div class="contenta" >
                                <a href="{{ url('/login/google') }}" class="btn btn-warning btn-block" style="background-color: #054671; color: #fff; border-radius:5em;"><img style="border-radius: 5em;"  src="{{asset('applicant/images/google.png')}}" width="25px"/><span> Google</span></a>
                            </div>
                        </div>
                        <br>

                        <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="intro-x mt-8">
                            <!-- Name -->
                            <input id="name" placeholder="Name" type="text" class="intro-x login__input input input--lg border border-gray-300 block @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span style="color: red;" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror<br>

                            <!-- Email -->
                             <input id="email" placeholder="Email" type="email" class="intro-x login__input input input--lg border border-gray-300 block @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span style="color: red; font-size: 9px;" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror<br>
                                <!-- Password -->
                            <input placeholder="Password" id="password" type="password" class="intro-x login__input input input--lg border border-gray-300 block  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span style="color: red; font-size: 9px;" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror<br>

                             <input placeholder="Confirm Password" id="password" type="password" class="intro-x login__input input input--lg border border-gray-300 block  @error('password') is-invalid @enderror"name="password_confirmation" required autocomplete="current-password">

                  
                        </div>
                        <div class="intro-x flex text-gray-700 dark:text-gray-600 text-xs sm:text-sm mt-4">
                            <div class="flex items-center mr-auto">
                                <input type="checkbox" class="input border mr-2" id="remember-me">
                                <label class="cursor-pointer select-none" for="remember-me" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>Remember me</label>
                            </div>
                            @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        <span>{{ __('Forgot Your Password?') }}</span>
                                    </a>
                                @endif
                        </div>
                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <button class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3 align-top btn-block"><span>Register</span></button>
                           
                        </div><br>
                    </form>
                    <a href="/login"><button class="button button--lg w-full xl:w-32 text-gray-700 border border-gray-300 dark:border-dark-5 dark:text-gray-300 mt-3 xl:mt-0 align-top btn-block"><span>Sign in</span></button></a>
                        <div class="intro-x mt-10 xl:mt-24 text-gray-700 dark:text-gray-600 text-center xl:text-left">
                             <span>By signin up, you agree to our </span> 
                            <br>
                            <a class="text-theme-1 dark:text-theme-10" href="/terms_and_conditions"><span>Terms and Conditions</span> </a> & <a class="text-theme-1 dark:text-theme-10" href=""><span>Privacy Policy</span></a> 
                        </div>
                    </div>
                </div>
                <!-- END: Login Form -->
            </div>
        </div>
@include('applicants.includes.footer')

