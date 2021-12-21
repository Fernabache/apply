<!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-dark bg-dark" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
         <h2 style="color: #000;" align="center"> <img src="{{asset('applicant/images/skyned.png')}} " class="navbar-brand-img" alt="...">&nbsp;Skynned</h2>
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link @if(request()->route()->getName() === 'dashboard') active @endif " href="{{ url('admin/home') }}">
                <img src="{{ asset('admin/assets/img/icons/common/home.png') }}" width="20px">&nbsp;
                <span style="color: #000;" class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if(request()->route()->getName() === 'schools') active @endif  " href="{{ url('admin/schools') }}">
            <img src="{{ asset('admin/assets/img/icons/common/dollar.png') }}" width="20px">&nbsp;
                <span style="color: #000;" class="nav-link-text">Schools</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link  @if(request()->route()->getName() === 'programs') active @endif " href="{{ url('admin/programs') }}">
                <img src="{{ asset('admin/assets/img/icons/common/wallet.png') }}" width="20px">&nbsp;
                <span style="color: #000;" class="nav-link-text">Programs</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if(request()->route()->getName() === 'payments') active @endif " href="{{ url('admin/payments')}}">
                <img src="{{ asset('admin/assets/img/icons/common/coins.png') }}" width="20px">&nbsp;
                <span style="color: #000;" class="nav-link-text">Payments</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if(request()->route()->getName() === 'applicants') active @endif " href="{{ url('admin/applicants') }}">
                <img src="{{ asset('admin/assets/img/icons/common/group.png') }}" width="20px">&nbsp;
                <span style="color: #000;" class="nav-link-text">Applicants</span>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link @if(request()->route()->getName() === 'applicantions') active @endif " href="{{ url('admin/applications') }}">
                <img src="{{ asset('admin/assets/img/icons/common/app.png') }}" width="20px">&nbsp;
                <span style="color: #000;" class="nav-link-text">Applications</span>
              </a>
            </li>



          @if(Auth::user()->role === "superadmin")
            <li class="nav-item">
              <a class="nav-link  @if(request()->route()->getName() === 'admins') active @endif " href="{{url('admin/admins')}}">
               <img src="{{ asset('admin/assets/img/icons/common/bussiness-man.png') }}" width="20px">&nbsp;
                <span style="color: #000;" class="nav-link-text">Admins</span>
              </a>
            </li>
            @endif

             
            
          </ul>
        </div>
      </div>
    </div>
  </nav>
