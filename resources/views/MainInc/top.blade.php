      <div class="full-width-header">
            <!--Header Start-->
            <header id="rs-header" class="rs-header style2 header-transparent">
                <!-- Topbar Area Start -->
                <div class="topbar-area style1" style="background: <?php echo $grid->bgcolor;?> !important;">
                    <div class="container custom">
                        <div class="row y-middle">
                            <div class="col-lg-7">
                                <div class="topbar-contact">
                                   <ul>
                                       <li>
                                           <i class="flaticon-email"> </i>
                                           <a href="mailto:{{$grid->email}}" style="color: <?php echo $grid->color;?> !important; font-size: 11px;">{{$grid->email}}</a>
                                       </li>
                                       <li>
                                           <i class="flaticon-call"></i>
                                           <a href="tel:{{$grid->phone}}" style="color: <?php echo $grid->color;?> !important; font-size: 11px;"> {{$grid->phone}}</a>
                                       </li>
                                       <li style="color: <?php echo $grid->color;?> !important; font-size: 12px;">
                                           <i class="flaticon-location"></i>
                                           {{$grid->address}}
                                       </li>
                                   </ul>
                                </div>
                            </div>
                            <div class="col-lg-5 text-right">
                                <div class="toolbar-sl-share">
                                    <ul>
                                         <li class="opening"> <em style="color: <?php echo $grid->color;?> !important; font-size: 11px;"><i class="flaticon-clock" style="color: <?php echo $grid->color;?> !important;"></i>{{$grid->open_and_close}}</em> </li>
                                        <!--  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                         <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                         <li><a href="#"><i class="fa fa-linkedin"></i></a></li> -->
                                         {!! $grid->social_icon !!}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Topbar Area End -->

                <!-- Menu Start -->
                <div class="menu-area menu-sticky" style="background: <?php echo $nav->bgcolor;?> !important;">
                    <div class="container custom">
                        <div class="row-table">
                            <div class="col-cell header-logo">                                  
                                <div class="logo-area">
                                    <a href="/">
                                        <img src="{{$nav->logo}}" alt="logo">  
                                    </a>
                                </div>
                            </div>
                            <div class="col-cell">
                                <div class="rs-menu-area" style="margin-right: 220px;">
                                    <div class="main-menu">
                                        <nav class="rs-menu hidden-md">
                                            <ul class="nav-menu">

                                                @if($title == $topper->company_name)
                                                 <li class="current-menu-item">
                                                    <a href="/" style="color: <?php echo $nav->over;?> !important;">Home</a> </li>
                                                @else
                                                <li class="">
                                                    <a href="/" style="color: <?php echo $nav->color;?> !important;">Home</a> </li>
                                                @endif


                                                
                                               
                                                <li class="menu-item-has-children">
                                                    <a href="javascript:void(0);">Services</a>                                                        
                                                    <ul class="sub-menu">

                                                        @foreach($menus as $menu)
                                                        
                                                        <li class="last-item menu-item-has-children">
                                                            <a href="/services/{{$menu->title}}">{{$menu->title}}</a>
                                                            @if(count($menu->sub) > 0)
                                                            <ul class="sub-menu">
                                                                @foreach($menu->sub as $sub)
                                                                <li><a href="/subservice/{{$sub->s_s_title}}">{{$sub->s_s_title}}</a> </li>
                                                               @endforeach
                                                            </ul>
                                                            @endif
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                             
                                             @if($title == 'About Us')
                                                 <li class="current-menu-item">
                                                    <a href="/aboutus" style="color: <?php echo $nav->over;?> !important;">About Us</a> </li>
                                                @else
                                                <li class="">
                                                    <a href="/aboutus" style="color: <?php echo $nav->color;?> !important;">About Us</a> </li>
                                                @endif


                                                 @if($title == 'Careers')
                                                 <li class="current-menu-item">
                                                    <a href="/careers" style="color: <?php echo $nav->over;?> !important;">Careers</a> </li>
                                                @else
                                                <li class="">
                                                    <a href="/careers" style="color: <?php echo $nav->color;?> !important;">Careers</a> </li>
                                                @endif
                                         
                                              @if($title == 'Contact Us')
                                                 <li class="current-menu-item">
                                                    <a href="/contactus" style="color: <?php echo $nav->over;?> !important;">Contact Us</a> </li>
                                                @else
                                                <li class="">
                                                    <a href="/contactus" style="color: <?php echo $nav->color;?> !important;">Contact Us</a> </li>
                                                @endif


                                            </ul> <!-- //.nav-menu -->
                                        </nav>
                                    </div> <!-- //.main-menu -->
                                </div>
                            </div>

                            <div class="col-cell">
                                <div class="expand-btn-inner">
                                    <ul>
                                        <!-- <li class="search-parent">
                                            <a class="hidden-xs rs-search" data-bs-toggle="modal" data-bs-target="#searchModal" href="#">
                                                <i class="flaticon-search"></i>
                                            </a>
                                        </li> -->
                                        <li class="humburger">
                                            <a id="nav-expander" class="nav-expander bar d-block d-md-none" href="#" >
                                                <div class="bar">
                                                    <span class="dot1" style="background: <?php echo $grid->bgcolor;?> !important;"></span>
                                                    <span class="dot2" style="background: <?php echo $grid->bgcolor;?> !important;"></span>
                                                    <span class="dot3" style="background: <?php echo $grid->bgcolor;?> !important;"></span>
                                                    <span class="dot4" style="background: <?php echo $grid->bgcolor;?> !important;"></span>
                                                    <span class="dot5" style="background: <?php echo $grid->bgcolor;?> !important;"></span>
                                                    <span class="dot6" style="background: <?php echo $grid->bgcolor;?> !important;"></span>
                                                    <span class="dot7" style="background: <?php echo $grid->bgcolor;?> !important;"></span>
                                                    <span class="dot8" style="background: <?php echo $grid->bgcolor;?> !important;"></span>
                                                    <span class="dot9" style="background: <?php echo $grid->bgcolor;?> !important;"></span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Menu End -->
                <!-- Canvas Menu start -->
                <!-- <nav class="right_menu_togle hidden-md">
                    <div class="close-btn">
                        <a id="nav-close" class="nav-close">
                            <div class="line">
                                <span class="line1"></span>
                                <span class="line2"></span>
                            </div>
                        </a>
                    </div>
                    <div class="canvas-logo">
                        <a href="index.html"><img src="assets/images/logo.png" alt="logo"></a>
                    </div>
                    <div class="offcanvas-text">
                        <p>We denounce with righteous indig nation in and dislike men who are so beguiled and to demo realized, that they data forest see best business consulting wordpress theme 2021.</p>
                    </div>
                    <div class="media-img">
                        <img src="assets/images/off2.jpg" alt="Images">
                    </div>
                    <div class="canvas-contact">
                        <div class="address-area">
                            <div class="address-list">
                                <div class="info-icon">
                                    <i class="flaticon-location"></i>
                                </div>
                                <div class="info-content">
                                    <h4 class="title">Address</h4>
                                    <em>05 kandi BR. New York</em>
                                </div>
                            </div>
                            <div class="address-list">
                                <div class="info-icon">
                                    <i class="flaticon-email"></i>
                                </div>
                                <div class="info-content">
                                    <h4 class="title">Email</h4>
                                    <em><a href="mailto:support@rstheme.com">support@rstheme.com</a></em>
                                </div>
                             </div>
                            <div class="address-list">
                                <div class="info-icon">
                                  <i class="flaticon-call"></i>
                                </div>
                                <div class="info-content">
                                  <h4 class="title">Phone</h4>
                                  <em>+019988772</em>
                                </div>
                            </div>
                        </div>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </nav> -->
                <!-- Canvas Menu end -->

                <!-- Canvas Mobile Menu start -->
                <nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
                    <div class="close-btn">
                        <a id="nav-close2" class="nav-close">
                            <div class="line">
                                <span class="line1"></span>
                                <span class="line2"></span>
                            </div>
                        </a>
                    </div>
                    <ul class="nav-menu">
                       


                      <li class="current-menu-item">
                    <a href="/" style="color: #fff !important;">Home</a> </li>
                    <li class="menu-item-has-children">
                                                    <a href="javascript:void(0);">Services</a>                                                        
                                                    <ul class="sub-menu">

                                                        @foreach($menus as $menu)
                                                        
                                                        <li class="last-item menu-item-has-children">
                                                            <a href="/services/{{$menu->title}}">{{$menu->title}}</a>
                                                            @if(count($menu->sub) > 0)
                                                            <ul class="sub-menu">
                                                                @foreach($menu->sub as $sub)
                                                                <li><a href="/subservice/{{$sub->s_s_title}}">{{$sub->s_s_title}}</a> </li>
                                                               @endforeach
                                                            </ul>
                                                            @endif
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                             
                                           
                                                 <li class="current-menu-item">
                                                    <a href="/aboutus" style="color: #fff !important;">About Us</a> </li>

                                                    <li class="current-menu-item">
                                                    <a href="/careers" style="color: #fff !important;">Careers</a> </li>
                                               
                                         
                                              
                                                 <li class="current-menu-item">
                                                    <a href="/contactus" style="color: #fff !important;">Contact Us</a> </li>


                     
                    </ul> <!-- //.nav-menu -->
                    <div class="canvas-contact">
                          <div class="address-area">
                              <div class="address-list">
                                  <div class="info-icon">
                                      <i class="flaticon-location"></i>
                                  </div>
                                  <div class="info-content">
                                      <h4 class="title">Address</h4>
                                      <em>{{$grid->address}}</em>
                                  </div>
                              </div>
                              <div class="address-list">
                                  <div class="info-icon">
                                      <i class="flaticon-email"></i>
                                  </div>
                                  <div class="info-content">
                                      <h4 class="title">Email</h4>
                                      <em><a href="mailto:{{$grid->email}}">{{$grid->email}}</a></em>
                                  </div>
                              </div>
                              <div class="address-list">
                                  <div class="info-icon">
                                      <a href="#" style="color: <?php echo $grid->bgcolor;?> !important;"><i class="flaticon-call"></i></a>
                                  </div>
                                  <div class="info-content">
                                      <h4 class="title">Phone</h4>
                                      <em>{{$grid->phone}}</em>
                                  </div>
                              </div>
                          </div>
                    </div>
                </nav>
                <!-- Canvas Menu end -->
            </header>
            <!--Header End-->
        </div>
        <!--Full width header End-->