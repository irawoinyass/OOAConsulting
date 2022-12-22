@extends('MainLayouts.app')
@section('content')



            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs img8">
                <div class="container">
                    <div class="breadcrumbs-inner">
                        <h1 class="page-title">
                           Contact Us
                            <span class="watermark">Contact</span>
                        </h1>
                        <!-- <span class="sub-text">Excepteur sint occaecat cupidatat non proident, sunt in coulpa qui official modeserunt mollit anim id est laborum 20 years experience.</span> -->
                    </div>
                </div>
            </div>
            <!-- Breadcrumbs End -->







            <!-- Contact Section Start -->
            <div class="rs-contact main-home office-modify1 responsive pb-100 md-pb-70">
                <!-- <div class="row margin-0">
                    <div class="col-lg-2 padding-0">
                        
                    </div>
                    <div class="col-lg-8 padding-0">
                        <div class="contact-section">
                            <div class="sec-title mb-60">
                                <h2 class="title">
                                   Get in touch
                                </h2>
                            </div>
                            <div class="contact-wrap">
                                    <div class="alert alert-success" id="alert_success" style="display: none;"></div>
              <div class="alert alert-danger" id="alert_danger" style="display: none;"></div>
                                <form>
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                            </div> 
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <input class="from-control" type="email" id="email" name="email" placeholder="E-Mail" required="">
                                            </div>   
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <input class="from-control" type="text" id="phone_no" name="phone_no" placeholder="Phone Number" required="">
                                            </div>   
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <input class="from-control" type="text" id="msg_subject" name="msg_subject" placeholder="Subject" required="">
                                            </div>
                                      
                                            <div class="col-lg-12 mb-35">
                                                <textarea class="from-control" id="msg" name="msg" placeholder="Your message Here" required=""></textarea>
                                            </div>
                                        </div>
                                        <div class="btn-part">                                            
                                            <div class="form-group mb-0">
                                                <input class="readon submit" type="submit" value="Submit Now" id="submit_btn">
                                            </div>
                                        </div> 
                                    </fieldset>
                                </form> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                </div> -->
                <!-- Contact Icons Section End -->
                <div class="rs-contact pt-100 md-pt-70">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 md-mb-30">
                               <div class="contact-box">
                                   <div class="contact-icon">
                                       <img src="assets/images/contact/icons/office.png" alt="images">
                                   </div>
                                   <div class="content-text">
                                       <h2 class="title"><a href="#">Office address</a></h2>
                                       <p class="services-txt"> {{$grid->address}}</p>
                                   </div>
                               </div>
                            </div>
                            <div class="col-lg-4 col-md-6 sm-mb-30">
                               <div class="contact-box">
                                   <div class="contact-icon">
                                       <img src="assets/images/contact/icons/email.png" alt="images">
                                   </div>
                                   <div class="content-text">
                                       <h2 class="title"><a href="#">Email us</a></h2>
                                       <a href="mailto:{{$grid->email}}">{{$grid->email}}</a><br>
                                       <p></p>
                                       
                                   </div>
                               </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                               <div class="contact-box">
                                   <div class="contact-icon">
                                       <img src="assets/images/contact/icons/call.png" alt="images">
                                   </div>
                                   <div class="content-text">
                                       <h2 class="title"><a href="#">Call us</a></h2>
                                       <a href="tel:{{$grid->phone}}">{{$grid->phone}}</a><br>
                                       <p></p>
                                       
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Contact Icons Section End -->
            </div>
            <!-- Contact Section End -->




<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){

        var _tokens = $('input[name=_token]').val();


function validateEmail(email) 
    {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }


$('#submit_btn').click(function(event){

  event.preventDefault();


  var name = $('#name').val();
  var email = $('#email').val();
  var phone_no = $('#phone_no').val();
  var msg = $('#msg').val();
  var msg_subject = $('#msg_subject').val();



  if (name == '') {
    $('#alert_danger').show();
$('#alert_danger').html('Please, Kindly Enter Your Name.');
//alert('oka');
  }else if (email == '') {

$('#alert_danger').show();
$('#alert_danger').html('Please, Kindly Enter Your Email Address.');

  }else if (validateEmail(email) == false) {

$('#alert_danger').show();
$('#alert_danger').html('Please, Kindly Enter Valid Email Address.');


        }else if (phone_no == '') {

       $('#alert_danger').show();
$('#alert_danger').html('Please, Kindly Enter Your Phone Number.');

  }else if (msg_subject == '') {

       $('#alert_danger').show();
$('#alert_danger').html('Please, Kindly Enter Mail Subject.');

  }else if (msg == '') {

   $('#alert_danger').show();
$('#alert_danger').html('Please, Kindly Leave Your Comment.');
  }else{
$('#alert_danger').hide();
$('#alert_success').show();
$('#alert_success').html('<i>Processing......</i>');



    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},        
        url:"{{route('main.contact')}}",
        method:"POST",
        data:{msg_subject:msg_subject,name:name,phone_no:phone_no,email:email,msg:msg,_tokens:_tokens},
        success:function(data){

    //console.log(data);

  if (data == 'success') {

    $('#alert_success').show();
$('#alert_success').html('<i>Sent, You will get a relpy from us ASAP.</i>');
  $('#name').val('');
  $('#phone_no').val('');
$('#email').val('');
  $('#msg').val('');
  $('#msg_subject').val('');
  

    }else{

  $('#alert_danger').show();
$('#alert_danger').html(data);

    }


          }
        
         })



  }










});
    });
</script>













@endsection