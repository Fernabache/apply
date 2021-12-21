        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="" class=" mr-auto">
                    <img width="50px" height="50px" style="background: #fff; border-radius: 2em;"  src="{{asset('applicant/images/skyned.jpg')}}">&nbsp;<h3 style="font-size:0.8em; color:#fff; display:inline;" class="font-weight-bold">Skyned Educational Consults</h3>
                </a>
                <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            </div>
            <ul class="border-t border-theme-24 py-5 hidden">
                <li>
                    <a href="{{route('applicants')}}" class="menu menu--active">
                        <div class="menu__icon"> <i data-feather="home"></i></div>
                        <div class="menu__title"> Dashboard </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('eligibility')}}" class="menu">
                        <div class="menu__icon"> <i data-feather="box"></i> </div>
                        <div class="menu__title">Eligibility </div>
                    </a>
                </li>
                
                <li>
                    <a href="{{route('programs')}}" class="menu">
                        <div class="menu__icon"> <i data-feather="credit-card"></i> </div>
                        <div class="menu__title">Programs</div>
                    </a>
                </li>
                
                <li>
                    <a  href="{{url('applicants/applications')}}" class="menu">
                        <div class="menu__icon"> <i data-feather="hard-drive"></i> </div>
                        <div class="menu__title"> My Applications </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('applicants_payment')}}" class="menu">
                        <div class="menu__icon"> <i data-feather="credit-card"></i> </div>
                        <div class="menu__title">Payments</div>
                    </a>
                </li>
                <!--------
                 <li>
                     
                     
                    <a href="/chatify" class="menu">
                        <div class="menu__icon"> <i data-feather="credit-card"></i> </div>
                        <div class="menu__title">Chat with Student Support</div>
                    </a>
                </li>
                
                
                ------>
            </ul>
        </div>
    
    <!-- END: Mobile Menu -->

    <div class="flex">
            <!-- BEGIN: Side Menu -->
            <nav class="side-nav">
                <a href="" class="intro-x flex items-center pl-5 pt-4">
                    <img width="50px" height="50px" style="background: #fff; border-radius: 2em;" class="" src="{{ asset('applicant/images/skyned.jpg')}}">
                    <span class="hidden xl:block text-white text-lg ml-3"><span class="font-medium"></span> </span>
                </a>
                <div class="side-nav__devider my-6"></div>
                <ul>
               
                    
                    
                        <a href="{{route('applicants')}}" class="side-menu @if(request()->route()->getName() === 'applicants') side-menu--active @endif">
                            <div class="side-menu__icon"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> </div>
                            <div class="side-menu__title">
                                Dashboard 
                            </div>
               </a>
                        
                        
                        
                        
                        
                        <a href="{{route('eligibility')}}" class="side-menu  @if(request()->route()->getName() === 'eligibility') side-menu--active @endif">
                            <div class="side-menu__icon"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg> </div>
                            <div class="side-menu__title">
                                Personal Information 
                            </div>
                </a>
                   
                   
                        <a href="{{route('programs')}}" class="side-menu  @if(request()->route()->getName() === 'programs') side-menu--active @endif">
                            <div class="side-menu__icon"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search block mx-auto"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></div>
                            <div class="side-menu__title">
                             Programs & Schools 
                            </div>
               </a>
                      
                      
                           
                        <a href="{{url('applicants/applications')}}" class="side-menu @if(request()->route()->getName() === 'applications') side-menu--active @endif">
                            <div class="side-menu__icon"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg> </div>
                            <div class="side-menu__title"> Applications </div>
             </a>
                        
              
                  
                        
                   
                        <a href="{{route('applicants_payment')}}" class="side-menu @if(request()->route()->getName() === 'applicants_payment') side-menu--active @endif">
                            <div class="side-menu__icon"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign block mx-auto"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg></div>
                            <div class="side-menu__title">
                                Payments
                            </div>
                </a>
                        
                        
                        
                   
                  
                  
                    
                   
                  
                    <!-------
                    <li>
                        <a href="/chatify" class="side-menu @if(request()->route()->getName() === 'chatify') side-menu--active @endif">
                            <div class="side-menu__icon"><img width="15px"   src="{{asset('applicant/images/programming.png')}}"><span style="display:inline;">Chat with Student Support</span></div>
                           
                        </a>
                    </li>
                    -------->
                </ul>
     </nav>
     
     
            <!-- END: Side Menu -->                