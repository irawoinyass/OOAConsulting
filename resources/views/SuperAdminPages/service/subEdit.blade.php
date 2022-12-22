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
                                    <h4 class="mb-0 font-size-18">Sub Service</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Page</a></li>
                                            <li class="breadcrumb-item active">Edit</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->








<div class="row" id="slide_form">
  <div class="col-lg-12">
      <div class="card shadow">
          <div class="card-body" style="background: #FFBD59;">
<div class="alert" id="message" style="display: none;"></div>

            <form id="upload_image_form" method="POST" enctype="multipart/form-data">
 
 {{ csrf_field() }}

  <div class="form-group">
     <label for="control-label" style="font-weight: 500; color: #fff;">Service</label>
     <select name="s_s_id" id="s_s_id" class="form-control">
       <option value="">Select</option>
       @foreach($services as $service)
<option value="{{$service->service_id}}">{{$service->title}}</option>
       @endforeach
     </select>
     <input type="hidden" name="old_s_s_id" id="old_s_s_id" value="{{$sub->s_s_id}}">
     <input type="hidden" name="id" id="id" value="{{$sub->sub_service_id}}">
</div>

  <div class="form-group">
     <label for="control-label" style="font-weight: 500; color: #fff;">Title</label>
            <input type="text" name="s_s_title" id="s_s_title" class="form-control" value="{{$sub->s_s_title}}">
<small style="color: #fff; font-weight: 500;">Required</small>
</div>




  <div class="form-group">
     <label for="control-label" style="font-weight: 500; color: #fff;">Description</label>
  
            <textarea class="form-control" name="s_s_desc" id="s_s_desc" rows="20" cols="20">{!! $sub->s_s_desc !!}</textarea>
<small style="color: #fff; font-weight: 500;">Required</small>
</div>


            <div>
    <div class="loader"></div>
      <button class="btn btn-success" type="submit" value="Create">
              <i class="fa fa-plus-circle fa-lg"></i> Create
              </button>
              

</div>  
          
       

    


      </form>
    
              
              
              </div>
               <!-- end card -->
                            </div>
                        </div>
                        <!-- end row -->
                      </div>







                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
             
            </div>
            <!-- end main content-->




<script src="{{asset('js/app.js')}}"></script>
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
   CKEDITOR.replace('s_s_desc', {
        filebrowserUploadUrl: "{{route('superadmin.ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>

<script type="text/javascript">
	
	$(document).ready(function(){

var _tokens = $('input[name=_token]').val();
var old_s_s_id = $('#old_s_s_id').val();
$('#s_s_id').val(old_s_s_id);


$('#upload_image_form').on('submit', function(event){

 
        for (instance in CKEDITOR.instances) 
{
    CKEDITOR.instances[instance].updateElement();
}
  event.preventDefault();

  var s_s_id = $('#s_s_id').val();
  var s_s_title = $('#s_s_title').val();
  var s_s_desc = $('#s_s_desc').val();
 



if (s_s_id == '') {

$('#message').css('display', 'block');
$('#message').html('Service is required');
$('#message').addClass('alert-danger');


  }else if (s_s_title == '') {

$('#message').css('display', 'block');
$('#message').html('Title is required');
$('#message').addClass('alert-danger');


  }else if (s_s_desc == '') {

$('#message').css('display', 'block');
$('#message').html('Description is required');
$('#message').addClass('alert-danger');


  }else{

$.ajax({
    url:"{{ route('superadmin.service.sub.update') }}",
    method:"POST",
    data:new FormData(this),
    dataType:'JSON',
    contentType:false,
    cache:false,
    processData:false,
    success:function(data){

   //console.log(data);   

if (data == 'success') {


    swal({
    title: "Success!",
    text: "Updated successfully",
    icon: "success",
    timer: 3000,
    showConfirmButton: false
  })

window.location.reload();
  
}else{


    swal({
    title: "Oppss!",
    text: data,
    icon: "error",
    timer: 3000,
    showConfirmButton: false
  })


  $('.overlays').hide();
}

     

    }


  });

  }


});











	});
</script>            

















@endsection