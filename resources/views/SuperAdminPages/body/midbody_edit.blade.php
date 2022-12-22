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
                                    <h4 class="mb-0 font-size-18">Body</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                      
                              <li class="breadcrumb-item active"><a href="{{route('superadmin.body.info')}}">Mid</a></li>
                              <li class="breadcrumb-item active">Edit</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->







  <div class="row">
  <div class="col-lg-12">
      <div class="card shadow">
          <div class="card-body">
          
            <form id="update_info" method="POST" enctype="multipart/form-data">
 
 {{ csrf_field() }}

    <div class="form-group">
          <label style="">Title</label>
           <input type="text" class="form-control" id="title" name="title" value="{{$mid->title}}">
         <small style=" font-weight: 700;"></small>
        </div>

       
    <input type="hidden" name="id" id="id" value="{{$mid->mid_body_id}}">

       <div class="form-group">
          <label style="">Desc</label>
           <textarea class="form-control" id="desc" name="desc" rows="5" cols="">{!! $mid->desc !!}</textarea>
         <small style=" font-weight: 700;"></small>
        </div>


         <div class="form-group">
     <label for="control-label" style="font-weight: 500; color: #fff;">Image</label>
            <input type="file" name="image" id="image" accept="image/jpeg,image/jpg,image/png," class="form-control">
<small style="color: #fff; font-weight: 500;">Optional</small>
<div>
    <img class="img-fluid" src="{{$mid->image}}" width="200">
</div>
</div>
         
    

   <div class="loader"></div>
 <button class="btn btn-warning" type="submit">Update</button>




      </form>
    
              
              
              </div>
               <!-- end card -->
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
   CKEDITOR.replace('desc');
</script>
    

<script type="text/javascript">
	
	$(document).ready(function(){

var _tokens = $('input[name=_token]').val();


function validateEmail(email) 
    {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }






    $('#update_info').on('submit', function(e){

for (instance in CKEDITOR.instances) 
{
    CKEDITOR.instances[instance].updateElement();
}


e.preventDefault();
 var data = $(this).serialize();
      var url = $(this).attr('action');
      var post = $(this).attr('method');

      var title = $('#title').val();

      var desc = $('#desc').val();

      var image = $('#image').val();
    

      if (title == '') {
swal("Title!", "Field is Required", "error");
      }else if (desc == '') {
swal("Desc!", "Field is Required", "error");
      }else{



      if (confirm("Are you sure")) {


$('.overlays').show();


       $.ajax({
    url:"{{route('superadmin.body.midbody.update')}}",
    method:"POST",
    data:new FormData(this),
    dataType:'JSON',
    contentType:false,
    cache:false,
    processData:false,
    success:function(data){


console.log(data);

if (data == 'success') {


    swal({
    title: "Success!",
    text: "updated successfully",
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

      
   


      }




  });









	});
</script>            







@endsection 