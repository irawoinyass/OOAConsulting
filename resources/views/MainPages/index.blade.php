@extends('MainLayouts.app')
@section('content')

<!-- Slider Start -->
            <div id="rs-slider" class="rs-slider slider3">
                <div class="bend niceties">
                    <div id="nivoSlider" class="slides">
                        <?php $no = 1;?>
                        @foreach($slides as $slide)
                        <img src="{{$slide->image}}" alt="" title="#slide-{{$no}}" />
                        <?php $no++;?>
                        @endforeach
                    </div>
                    
                    <?php $nos = 1;?>
                     @foreach($slides as $slide)

                    <div id="slide-{{$nos}}" class="slider-direction">
                        <div class="content-part">
                            <div class="container">

                                @if($slide->bgcolor == '')
                                <div class="slider-des">
                                    <!-- <div class="sl-subtitle">Sustainable Finance</div> -->
                                    <h3 class="sl-title" style="font-size: 30px; color: <?php echo $slide->title_color;?> !important;">{{$slide->title}}</h3>
                                </div>
                                <div class="desc" style="color: <?php echo $slide->desc_color;?> !important;">{{$slide->desc}}</div>
                                @else
                                <div style="background: <?php echo $slide->bgcolor;?>; opacity:0.6;">
                                <div class="slider-des"> 
                                    <!-- <div class="sl-subtitle">Sustainable Finance</div> -->
                                    <h3 class="sl-title" style="font-size: 30px; color: <?php echo $slide->title_color;?> !important;">{{$slide->title}}</h3>
                                </div>
                                <div class="desc" style="color: <?php echo $slide->desc_color;?> !important;">{{$slide->desc}}</div>
                            </div>
                            @endif

@if($slide->button_url != '')

 <a class="readon consultant slider" href="{{$slide->button_url}}" style="background: <?php echo $grid->bgcolor;?> !important; color: <?php echo $grid->color;?> !important; border: 1px solid <?php echo $grid->bgcolor;?> !important;">{{$slide->button_name}}</a>
</div>
@endif
                              
                            </div>
                        </div>
                    </div>
                
                     <?php $nos++;?>
                        @endforeach



                </div>
            </div>
            <!-- Slider End -->






<!-- Premium Services Section Start -->
            <div id="rs-services" class="rs-services style2 gray-bg pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="sec-title2 d-flex align-items-center mb-60 md-mb-40">
                        <div class="first-half">
                            <div class="sub-text" style="color: <?php echo $grid->bgcolor;?> !important;">{{$body_top->title}}</div>
                            <h2 class="title mb-0 md-pb-20" style="font-size: 20px !important;">{{$body_top->short_one}} <span style="color: <?php echo $grid->bgcolor;?> !important;">{{$body_top->short_two}}</span></h2>
                        </div>
                        <div class="last-half">
                            <p class="desc mb-0 pl-20 md-pl-15">{{$body_top->desc}}</p>
                        </div>
                    </div>
                    <div class="rs-carousel owl-carousel" 
                        data-loop="true" 
                        data-items="3" 
                        data-margin="30" 
                        data-autoplay="true" 
                        data-hoverpause="true" 
                        data-autoplay-timeout="5000" 
                        data-smart-speed="800" 
                        data-dots="true" 
                        data-nav="false" 
                        data-nav-speed="false" 

                        data-md-device="3" 
                        data-md-device-nav="false" 
                        data-md-device-dots="true" 
                        data-center-mode="false"

                        data-ipad-device2="2" 
                        data-ipad-device-nav2="false" 
                        data-ipad-device-dots2="true"

                        data-ipad-device="2" 
                        data-ipad-device-nav="false" 
                        data-ipad-device-dots="true" 

                        data-mobile-device="1" 
                        data-mobile-device-nav="false" 
                        data-mobile-device-dots="true"> 

                        @foreach($services as $service) 
                        <div class="service-wrap">
                            <div class="image-part">
                                <img src="{{$service->image}}" alt="">
                            </div>
                            <div class="content-part">
                                <h3 class="title"><a href="/services/{{$service->title}}">{{$service->title}}</a></h3>
                                <div class="desc">{{$service->short_desc}}<a href="/services/{{$service->title}}"> read more</a></div>
                            </div>
                        </div>
                       
                        @endforeach
                   


                    </div>
                </div>
            </div>
            <!-- Premium Services Section End -->













<!-- About Section Start -->
            <div class="rs-about style1 pt-100 pb-100 md-pt-70 md-pb-70" >
                <div class="container">
                    <div class="row y-middle">
                        <div class="col-lg-6 pr-70 md-pr-15 md-mb-50">
                           <div class="sec-title2 mb-30">
                                <div class="sub-text" style="color: <?php echo $grid->bgcolor;?> !important;">{{$info->title}}</div>
                                <h2 class="title mb-23" style="font-size: 25px !important;">{{$info->short_one}} <span style="color: <?php echo $grid->bgcolor;?> !important;">{{$info->short_two}} </span></h2>
                                <p class="desc mb-0">{!! $info->desc !!}</p>
                           </div>
                            <!-- Skillbar Section Start -->
                            <div class="rs-skillbar style1">
                              
                                <div class="col-lg-12 mt-45">
                                    <div class="btn-part">
                                        <a class="readon consultant discover" href="/aboutus" style="background: <?php echo $grid->bgcolor;?> !important; color: <?php echo $grid->color;?> !important; border: 1px solid <?php echo $grid->bgcolor;?> !important;">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Skillbar Section End -->
                        </div>
                        <div class="col-lg-6">
                            <div class="about-img">
                                <img src="{{$info->image}}" alt="images">
                                <div class="working-experiance" style="background: <?php echo $grid->bgcolor;?> !important;">
                                    <div class="experience-year">
                                        <div class="count-year plus"><span class="sub-text" style="color: <?php echo $grid->color;?> !important;">{{$info->years}}</span></div>
                                        <h4 class="title mb-0" style="color: <?php echo $grid->color;?> !important;">Years Experience</h4>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>












 <!-- Why Choose Section Start -->
            <div class="rs-choose bg5 pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row y-middle">
                        <div class="col-lg-6 pr-70 md-pr-15 md-mb-50">
                            <div class="sec-title mb-35">
                                <h2 class="title pb-30">
                                    {{$mid->title}}
                                </h2>
                                <p class="margin-0">{!! $mid->desc !!}</p>
                            </div>
                           
                        </div>
                        <div class="col-lg-6">
                            <div class="rs-videos choose-video">
                                <div class="images-video">
                                    <img src="{{$mid->image}}" alt="images">
                                </div>
                                <!-- <div class="animate-border">
                                    <a class="popup-border" href="https://www.youtube.com/watch?v=FMvA5fyZ338">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>













                <!-- Testimonial Section Start -->
          <!--   <div class="rs-testimonial style2 bg10 pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="sec-title2 text-center md-left mb-30">
                        <div class="sub-text">Testimonials</div>
                        <h2 class="title mb-0 white-color">Whats our customers saying<br> about us</h2>
                    </div>
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true"> -->


                     <!--    <div class="testi-wrap">
                            <div class="item-content">
                                <span> --><!-- <img src="assets/images/testimonial/quote.png" alt="Testimonial"> --><!--  <i class="fa fa-solid fa-quote-left" style="color: <php <?php //echo $grid->bgcolor; ?> !important; font-size: 30px;"></i></span> -->
                          <!--       <p>Customer support is excellent and documentation good – novice can easily understand. Although I had a problem with the performance, thanks to the customer support, we have solved this problem as well.</p>
                            </div>
                            <div class="testi-content"> -->
                              <!--   <div class="image-wrap">
                                    <img src="assets/images/testimonial/avatar/1.jpg" alt="Testimonial">
                                </div> -->
           <!--                      <center><div class="testi-information">
                                    <div class="testi-name">David Warner</div>
                                    <span class="testi-title">Envato User</span>
                                    <div class="ratting-img">
                                        <img src="assets/images/testimonial/ratting.png" alt="Testimonial">
                                    </div>
                                </div></center>

                            </div>
                        </div>
                        
                        
                        
                       


                    </div>
                </div>
            </div> -->
            <!-- Testimonial Section End -->
            

            <!-- Contact Section Start -->
<!--             <div class="rs-contact contact-style2 bg11 pt-95 pb-100 md-pt-65 md-pb-70">
                <div class="container">
                    <div class="sec-title2 mb-55 md-mb-35 text-center text-lg-start">
                        <div class="sub-text">Contact</div>
                        <h2 class="title mb-0">Let us help your business <br> to move <span>forward.</span></h2>
                    </div>
                    <div class="row y-middle">
                        <div class="col-lg-6 md-mb-50">
                            <div class="contact-img">
                                <img src="assets/images/contact/computer.jpg" alt="Contact">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-wrap">
                                <div id="form-messages"></div>
                                <form id="contact-form" method="post" action="https://reactheme.com/products/html/bizup/mailer.php">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                            </div> 
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail" required="">
                                            </div>   
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone Number" required="">
                                            </div>   
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <input class="from-control" type="text" id="Website" name="subject" placeholder="Your Website" required="">
                                            </div>
                                      
                                            <div class="col-lg-12 mb-30">
                                                <textarea class="from-control" id="message" name="message" placeholder="Your message Here" required=""></textarea>
                                            </div>
                                        </div>
                                        <div class="btn-part">                                            
                                            <div class="form-group mb-0">
                                                <input class="readon submit" type="submit" value="Submit Now">
                                            </div>
                                        </div> 
                                    </fieldset>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Contact Section End -->
            
        </div> 
        <!-- Main content End -->






















@endsection