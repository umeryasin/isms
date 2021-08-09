      <div class="page-main-header">
        <div class="main-header-right">
          <div class="main-header-left text-center">
            <div class="logo-wrapper"><a href="index.html"><img src="{{ asset('assets/images/logo/1821-768x591.png') }}" class="img-fluid" style="max-width: 150px;" alt=""></a></div>
          </div>
          <div class="mobile-sidebar">
            <div class="media-body text-right switch-sm">
              <label class="switch ml-3"><i class="font-primary" id="sidebar-toggle" data-feather="align-center"></i></label>
            </div>
          </div>
          <div class="vertical-mobile-sidebar"><i class="fa fa-bars sidebar-bar">               </i></div>
          <div class="nav-right col pull-right right-menu">
            <ul class="nav-menus">
              <li></li>
              <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              
              <!-- <li><a class="right_side_toggle" href="#"><img class="img-fluid img-shadow-success" src="{{ asset('assets/images/dashboard/chat.png') }}" alt=""></a></li> -->
              <li class="onhover-dropdown"> <span class="media user-header"><img class="img-fluid" src="{{ asset('assets/images/dashboard/user.png') }}" alt=""></span>
                <ul class="onhover-show-div profile-dropdown">
                  <li class="gradient-primary">
                    <h5 class="f-w-600 mb-0">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h5>
                  </li>
                  <li><i data-feather="user"> </i>Profile</li>
                  <li><i data-feather="message-square"> </i>Inbox</li>
                  <li><i data-feather="file-text"> </i>Taskboard</li>
                  <li><i data-feather="log-out"> </i>
                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                    </form>
                  </li>
                </ul>
              </li>
            </ul>
            <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
          </div>
        </div>
      </div>