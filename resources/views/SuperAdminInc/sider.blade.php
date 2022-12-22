<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{route('superadmin.dashboard')}}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span>Dashboard</span>
                    </a>
                    
                </li>

                
                 <li>
                    <a href="{{route('superadmin.slide')}}" class="waves-effect">
                        <i class="bx bx-slideshow"></i>
                        <span>Slides</span>
                    </a>
                
                </li>

                <li>
                    <a href="{{route('superadmin.service.index')}}" class="waves-effect">
                        <i class="bx bx-slideshow"></i>
                        <span>Services</span>
                    </a>
                
                </li>

                <li>
                    <a href="{{route('superadmin.service.sub.view')}}" class="waves-effect">
                        <i class="bx bx-slideshow"></i>
                        <span>Sub Services</span>
                    </a>
                
                </li>


                   <li>
                    <a href="{{route('superadmin.aboutus')}}" class="waves-effect">
                        <i class="bx bx-slideshow"></i>
                        <span>Aboutus</span>
                    </a>
                
                </li>

                 <li>
                    <a href="{{route('superadmin.careers')}}" class="waves-effect">
                        <i class="bx bx-slideshow"></i>
                        <span>Careers</span>
                    </a>
                
                </li>


                <li>
                    <a href="{{route('superadmin.testimony')}}" class="waves-effect">
                        <i class="bx bx-comment-dots"></i>
                        <span>Testimony</span>
                    </a>
                
                </li>
             

                
                @if(auth()->guard('superadmin')->user()->user_type == 'developer')
              <li class="menu-title">Custom</li>
              <li class="menu-title">Land Page</li>

              <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-columns"></i>
                        <span>Top</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('superadmin.header.topper')}}">Topper</a></li>
                        <li><a href="{{route('superadmin.header.grid')}}">Grid</a></li>
                        <li><a href="{{route('superadmin.header.nav')}}">Nav</a></li>
                       
                
                    </ul>
                </li>


                  <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-columns"></i>
                        <span>Body</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('superadmin.body.top')}}">Top</a></li>
                        <li><a href="{{route('superadmin.body.info')}}">Info</a></li>
                        <li><a href="{{route('superadmin.body.midbody')}}">Mid</a></li>
                       
                
                    </ul>
                </li>



                @else


                @endif

                
              

                
             

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->









