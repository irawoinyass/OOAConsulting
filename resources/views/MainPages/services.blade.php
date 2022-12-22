@extends('MainLayouts.app')
@section('content')



            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs img3">
                <div class="container">
                    <div class="breadcrumbs-inner">
                        <h1 class="page-title">
                           {{$service->title}}
                            <span class="watermark">Services</span>
                        </h1>
                        <!-- <span class="sub-text">Excepteur sint occaecat cupidatat non proident, sunt in coulpa qui official modeserunt mollit anim id est laborum 20 years experience.</span> -->
                    </div>
                </div>
            </div>
            <!-- Breadcrumbs End -->









            <!-- About Section Start -->
            <div class="rs-about style2 pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">

                         <div class="sec-title mb-35">
                             
                                <p class="">{!! $service->desc !!}</p>
                            </div>

                        

                </div>
                <!-- <div class="rs-animation">
                    <div class="animate-style">
                        <img class="scale" src="/assets/images/about/tri-circle-1.png" alt="About">
                    </div>
                </div> -->
            </div>
            <!-- About Section End -->









@endsection