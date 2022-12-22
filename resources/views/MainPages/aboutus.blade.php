@extends('MainLayouts.app')
@section('content')



            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs img1">
                <div class="container">
                    <div class="breadcrumbs-inner">
                        <h1 class="page-title">
                           About Us
                            <span class="watermark">About</span>
                        </h1>
                        
                    </div>
                </div>
            </div>
            <!-- Breadcrumbs End -->









            <!-- About Section Start -->
            <div class="rs-about style2 pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">
                       
                        <div class="col-lg-6 ">
                            <div class="sec-title">
                                <h5 class="title pb-22" style="font-size: 28px;">
                                    {{$aboutus->title}}
                                </h5>
                                <span class="sub-text big">{!! $aboutus->desc !!}</span>

                                
                                <div class="btn-part mt-45 md-mt-30">
                                    <a class="readon consultant discover" href="/contactus" style="background: <?php echo $grid->bgcolor;?> !important; color: <?php echo $grid->color;?> !important; border: 1px solid <?php echo $grid->bgcolor;?> !important;">Contact Us</a>
                                </div>
                            </div>
                        </div>

 <div class="col-lg-6 pr-33 md-pr-15 md-mb-50">
                            <div class="images-part">
                                <img src="{{$aboutus->image}}" alt="Images">
                            </div>
                        </div>

                    </div>
                </div>
              
            </div>
            <!-- About Section End -->









@endsection