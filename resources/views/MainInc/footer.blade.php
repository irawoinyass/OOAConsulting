        <!-- Footer Start -->
        <footer id="rs-footer" class="rs-footer style1">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12 md-mb-10">
                            <div class="footer-logo mb-40">
                                <a href="/"><img src="{{$nav->logo}}" alt=""></a>
                            </div>
                              <div class="textwidget white-color pb-40"><p>{{$topper->company_desc}}</p>
                              </div>
                              <ul class="footer-social md-mb-30">  
                                   {!! $grid->social_icon !!}
                                                                           
                              </ul>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 md-mb-10 pl-55 md-pl-15">
                            <h3 class="footer-title">Our Services</h3>
                            <ul class="site-map">
                                   @foreach($menus as $menu)
                                <li><a href="/services/{{$menu->title}}">{{$menu->title}}</a></li>
                             @endforeach
             
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 md-mb-10">
                            <h3 class="footer-title">Contact Info</h3>
                            <ul class="address-widget">
                                <li>
                                    <i class="flaticon-location"></i>
                                    <div class="desc">{{$grid->address}}</div>
                                </li>
                                <li>
                                    <i class="flaticon-call"></i>
                                    <div class="desc">
                                       <a href="tel:{{$grid->phone}}">{{$grid->phone}}</a>
                                    </div>
                                </li>
                                <li>
                                    <i class="flaticon-email"></i>
                                    <div class="desc">
                                        <a href="mailto:{{$grid->email}}">{{$grid->email}}</a>
                                    </div>
                                </li>
                                <li>
                                    <i class="flaticon-clock-1"></i>
                                    <div class="desc">
                                       {{$grid->open_and_close}} 
                                    </div>
                                </li>
                            </ul>
                        </div>
                    <!--     <div class="col-lg-3 col-md-12 col-sm-12">
                            <h3 class="footer-title">Newsletter</h3>
                            <p class="widget-desc white-color">Stay up to update with our latest news and products.</p>
                            <p>
                                <input type="email" name="EMAIL" placeholder="Your email address" required="">
                                <input type="submit" value="Subscribe Now">
                            </p>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">                    
                    <div class="row y-middle">
                        <div class="col-lg-6 md-mb-10 text-lg-end text-center order-last">
                          <!--   <ul class="copy-right-menu">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="faqs.html">Faqs</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul> -->
                        </div>
                        <div class="col-lg-6">
                            <div class="copyright text-lg-start text-center">
                                <p>© 2012 - {{date('Y')}} {{$topper->company_name}}. All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp" class="">
            <i class="fa fa-angle-up" style="background: <?php echo $grid->bgcolor;?> !important; color: <?php echo $grid->color;?> !important; border: 1px solid <?php echo $grid->bgcolor;?> !important;"></i>
        </div>
        <!-- End scrollUp  -->


    