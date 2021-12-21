<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <link  href="{{asset('applicant/images/skyned.png')}}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <title>Verify</title>
        <!-- BEGIN: CSS Assets-->

        <link rel="stylesheet" href="{{asset('applicant/css/app.css')}}" />
        <!-- END: CSS Assets-->
    </head>
     <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700|Material+Icons" />
    
    <!-- END: Head -->
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
                          <p>One more click to</p> 
                            <br>
                            <p>verify your account.</p>
                        </div>
                        
                    </div>
                </div>
                <!-- END: Login Info -->
                <!-- BEGIN: Login Form -->
                <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                    <div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                        <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                            Verify Email Address
                        </h2>
                        @if (session('resent'))
                        <div style="color: green;" class="alert alert-success" role="alert">
                            <p>{{ __('A fresh verification link has been sent to your email address.') }}</p>
                        </div><br>
                        @endif


                <p>{{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},</p>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="button button--lg w-full xl:w-32 text-gray-700 border border-gray-300 dark:border-dark-5 dark:text-gray-300 mt-3 xl:mt-0 align-top btn-block"><span>{{ __('click here to request another') }}</span></button>.
                    </form>
                        
                    </div>
                </div>
                <!-- END: Login Form -->
            </div>
        </div>
@include('applicants.includes.footer')

