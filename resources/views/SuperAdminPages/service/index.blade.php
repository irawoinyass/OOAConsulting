@extends('SuperAdminLayouts.app')
@section('content')

   	 	

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Services</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Page</a></li>
                                            <li class="breadcrumb-item active">Record & Creation</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->








<div class="row" id="slide_form" style="display: none;">
  <div class="col-lg-12">
      <div class="card shadow">
          <div class="card-body" style="background: #FFBD59;">
<div class="alert" id="message" style="display: none;"></div>

            <form id="upload_image_form" method="POST" enctype="multipart/form-data">
 
 {{ csrf_field() }}

  <div class="form-group">
     <label for="control-label" style="font-weight: 500; color: #fff;">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Enter Ttile" >
<small style="color: #fff; font-weight: 500;">Required</small>
</div>
 <div class="form-group">
     <label for="control-label" style="font-weight: 500; color: #fff;">Image</label>
            <input type="file" name="image" id="image" accept="image/jpeg,image/jpg,image/png," class="form-control">
<small style="color: #fff; font-weight: 500;">Required</small>
</div>

 <div class="form-group">
     <label for="control-label" style="font-weight: 500; color: #fff;">Short Desc</label>
            <input type="text" name="short_desc" id="short_desc" class="form-control" placeholder="Short Desc" >
<!-- <small style="color: #fff; font-weight: 500;">Optional</small> -->
</div>
 <div class="form-group">
     <label for="control-label" style="font-weight: 500; color: #fff;">Description</label>
  
            <textarea class="form-control" name="desc" id="desc" rows="20" cols="20"></textarea>
<small style="color: #fff; font-weight: 500;">Required</small>
</div>




    <div class="loader"></div>
      <button class="btn btn-success" type="submit" value="Service">
              <i class="fa fa-plus-circle fa-lg"></i> Service
              </button>
              <a class="btn btn-danger" style="color: #fff; cursor: pointer;" id="close_slide_form">
              <i class="fa fa-minus-circle fa-lg"></i> close
              </a>

</div>  
          
       

    


      </form>
    
              
              
              </div>
               <!-- end card -->
                            </div>
                        </div>
                        <!-- end row -->
                      </div>

































                        <div class="row" id="slide_show">
                            <div class="col-12">
                                <div class="card"  style="background: #FFBD59;">
                                    <div class="card-body">
                                         <div class="row mb-2">
                                            <div class="col-sm-4">
                                      
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="text-sm-right">
                                                 
                                               
                                                  <a href="javascript:void(0);" id="open_slide_form" class="btn btn-primary shadow" style="color: #fff;">Add Service<i class="mdi mdi-arrow-right ml-1"></i></a>
                                              
                                                </div>
                                            </div><!-- end col-->
                                        </div>

                                       
@if(count($services) > 0)


<div class="row">
  @foreach($services as $service)
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <img class="img-fluid" src="{{$service->image}}">
        <h6 >{{$service->title}}</h6>
        <h5 class="text-center">{{$service->short_desc}}</h5>
       
      </div>
      <div class="card-footer">
        <a href="/superadmin/service/edit/{{$service->service_id}}" class="btn btn-primary btn-sm float-right">Edit</a>
        <button class="btn btn-danger btn-sm float-left" data-id="{{$service->service_id}}" id="delete_slide">Delete</button>
      </div>
    </div>
  </div>




@endforeach
</div>

@else

<center><h5 style="color: #fff;">NO RECORD FOUND</h5></center>
@endif




                                  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
             
            </div>
            <!-- end main content-->




<script src="{{asset('js/app.js')}}"></script>
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
   CKEDITOR.replace('desc', {
        filebrowserUploadUrl: "{{route('superadmin.ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });

   
</script>

<script type="text/javascript">
	
	$(document).ready(function(){

var _tokens = $('input[name=_token]').val();

$('#open_slide_form').click(function(event){

event.preventDefault();

$('#slide_form').show();
$('#slide_show').hide();




});



$('#close_slide_form').click(function(event){

event.preventDefault();

$('#slide_form').hide();
$('#slide_show').show();




});




$('#upload_image_form').on('submit', function(event){

     for (instance in CKEDITOR.instances) 
{
    CKEDITOR.instances[instance].updateElement();
}
  event.preventDefault();

  var image = $('#image').val();
  var title = $('#title').val();
  var desc = $('#desc').val();
  var short_desc = $('#short_desc').val();



  if (title == '') {

$('#message').css('display', 'block');
$('#message').html('Title is required');
$('#message').addClass('alert-danger');


  }else if (desc == '') {

$('#message').css('display', 'block');
$('#message').html('Description is required');
$('#message').addClass('alert-danger');


  }else if (image == '') {

$('#message').css('display', 'block');
$('#message').html('Selet a picture first');
$('#message').addClass('alert-danger');


  }else if (short_desc == '') {

$('#message').css('display', 'block');
$('#message').html('Short Desc is required');
$('#message').addClass('alert-danger');


  }else{

    //  swal({
    //   title: "Are you sure?",
    //   text:"",
    //   icon: "warning",
    //   buttons: [
    //     'No, cancel it!',
    //     'Yes, I am sure!'
    //   ],
    //   dangerMode: true,
    // }).then(function(isConfirm) {
    //   if (isConfirm) {
$('.overlays').show();
$.ajax({
    url:"{{ route('superadmin.service.upload') }}",
    method:"POST",
    data:new FormData(this),
    dataType:'JSON',
    contentType:false,
    cache:false,
    processData:false,
    success:function(data){

   console.log(data);   

if (data.message == 'Service Added Successfully') {

  // console.log(data);
  $('#message').css('display', 'block');
      $('#message').html(data.message);
      $('#message').addClass(data.class_name);
     window.location.reload();
     $('.overlays').hide();
}else{

  $('#message').css('display', 'block');
      $('#message').html(data.message);
      $('#message').addClass(data.class_name);
   $('.overlays').hide();
}
     

    }


  });


  // } else {
  //       swal("Cancelled", "No data was sent to database" ,"info");
  //     }
  //   })


  }


});





$('body').delegate('#delete_slide', 'click', function(e){

    e.preventDefault();
    var service_id = $(this).data('id');

  
//     var slide_grant = $('#slide_grant').val();

//     if (slide_grant == 0) {

// swal("Permission Denied!", "You are not authorized to perform this action", "error");

//     }else{

swal({
      title: "Are you sure?",
      text:"",
      icon: "warning",
      buttons: [
        'No, cancel it!',
        'Yes, I am sure!'
      ],
      dangerMode: true,
    }).then(function(isConfirm) {
      if (isConfirm) {

       
        $.ajax({

    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},    
    url:"{{route('superadmin.service.delete')}}",
    method:"POST",
    data:{service_id:service_id,_tokens:_tokens},
    success:function(data){

    //console.log(data)
    

    if (data == 'success') {
    swal({
    title: "Success!",
    text: "deleted successfully",
    icon: "success",
    timer: 3000,
    showConfirmButton: false

  })
     $('.overlays').hide();
     window.location.reload();
    }else{
          swal({
    title: "Opps!",
    text: data,
    icon: "error",
    timer: 3000,
    showConfirmButton: false

  })
 $('.overlays').hide();
    }
    
    
       
    }

})       



      
      } else {
        swal("Cancelled", "No data was sent to database" ,"info");
      }
    })


    //}

});












	});
</script>            

















@endsection