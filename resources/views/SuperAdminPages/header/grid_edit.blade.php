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
                                    <h4 class="mb-0 font-size-18">Header</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                      
                              <li class="breadcrumb-item active"><a href="{{route('superadmin.header.grid')}}">Grid</a></li>
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
          
            <form id="update_grid" method="POST" enctype="multipart/form-data">
 
 {{ csrf_field() }}

    <div class="form-group">
          <label style="">Email</label>
           <input type="text" class="form-control" id="email" name="email" value="{{$grid->email}}">
         <small style=" font-weight: 700;"></small>
        </div>

        <div class="form-group">
          <label style="">Phone</label>
           <input type="text" class="form-control" id="phone" name="phone" value="{{$grid->phone}}">
         <small style=" font-weight: 700;"></small>
        </div>

<div class="form-group">
          <label style="">Address</label>
           <input type="text" class="form-control" id="address" name="address" value="{{$grid->address}}">
         <small style=" font-weight: 700;"></small>
        </div>
    
<div class="form-group">
          <label style="">Open - Close</label>
           <input type="text" class="form-control" id="open_and_close" name="open_and_close" value="{{$grid->open_and_close}}">
         <small style=" font-weight: 700;"></small>
        </div>
       
<div class="form-group">
          <label style="">BGcolor</label>
           <input type="text" class="form-control" id="bgcolor" name="bgcolor" value="{{$grid->bgcolor}}">
         <small style=" font-weight: 700;"></small>
        </div>

        <div class="form-group">
          <label style="">Color</label>
           <input type="text" class="form-control" id="color" name="color" value="{{$grid->color}}">
         <small style=" font-weight: 700;"></small>
        </div>
     
    <input type="hidden" name="id" id="id" value="{{$grid->grid_id}}">

       <div class="form-group">
          <label style="">Social Icon</label>
           <textarea class="form-control" id="social_icon" name="social_icon" rows="8" cols="">{{$grid->social_icon}}</textarea>
         <small style=" font-weight: 700;"></small>
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


    

<script type="text/javascript">
	
	$(document).ready(function(){

var _tokens = $('input[name=_token]').val();


function validateEmail(email) 
    {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }






    $('#update_grid').on('submit', function(e){



e.preventDefault();
 var data = $(this).serialize();
      var url = $(this).attr('action');
      var post = $(this).attr('method');

      var email = $('#email').val();
      var phone = $('#phone').val();
      var address = $('#address').val();
      var open_and_close = $('#open_and_close').val();
      var bgcolor = $('#bgcolor').val();
      var color = $('#color').val();
      var social_icon = $('#social_icon').val();
      

      if (email == '') {
swal("Email!", "Field is Required", "error");
      }else if (phone == '') {
swal("Phone!", "Field is Required", "error");
      }else if (address == '') {
swal("Address!", "Field is Required", "error");
      }else if (open_and_close == '') {
swal("Open - Close!", "Field is Required", "error");
      }else if (bgcolor == '') {
swal("BGcolor!", "Field is Required", "error");
      }else if (color == '') {
swal("Color!", "Field is Required", "error");
      }else if (social_icon == '') {
swal("Social Icon!", "Field is Required", "error");
      }else{



      if (confirm("Are you sure")) {


$('.overlays').show();


       $.ajax({
    url:"{{route('superadmin.header.grid.update')}}",
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