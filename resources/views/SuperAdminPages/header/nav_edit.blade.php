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
                                      
                              <li class="breadcrumb-item active"><a href="{{route('superadmin.header.nav')}}">Nav</a></li>
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
          
            <form id="update_nav" method="POST" enctype="multipart/form-data">
 
 {{ csrf_field() }}

<div class="form-group">
          <label style="">Logo</label>
           <input type="file" class="form-control" id="logo" name="logo">
           <img src="{{$nav->logo}}" width="100px;">
         <small style=" font-weight: 700;"></small>
        </div>

 

<div class="form-group">
          <label style="">BgColor</label>
           <input type="text" class="form-control" id="bgcolor" name="bgcolor" value="{{$nav->bgcolor}}">
         <small style=" font-weight: 700;"></small>
        </div>


    <div class="form-group">
          <label style=""> Color</label>
        
           <textarea class="form-control" id="color" name="color">{{$nav->color}}</textarea>
         <small style=" font-weight: 700;"></small>
        </div>



        <div class="form-group">
          <label style="">Over</label>
           <input type="text" class="form-control" id="over" name="over" value="{{$nav->over}}">
         <small style=" font-weight: 700;"></small>
        </div>


  <div class="form-group">
          <label style="">Out</label>
           <input type="text" class="form-control" id="out" name="out" value="{{$nav->out}}">
         <small style=" font-weight: 700;"></small>
        </div>
       

     
    <input type="hidden" name="id" id="id" value="{{$nav->nav_id}}">


         
    

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






    $('#update_nav').on('submit', function(e){



e.preventDefault();
 var data = $(this).serialize();
      var url = $(this).attr('action');
      var post = $(this).attr('method');

      var bgcolor = $('#bgcolor').val();
      var color = $('#color').val();
      var logo = $('#logo').val();
      var over = $('#over').val();
      var out = $('#out').val();
      

      if (bgcolor == '') {
swal("BgColor!", "Field is Required", "error");
      }else if (color == '') {
swal("Color!", "Field is Required", "error");
      }else if (over == '') {
swal("Over!", "Field is Required", "error");
      }else if (out == '') {
swal("Out!", "Field is Required", "error");
      }else{



      if (confirm("Are you sure")) {


$('.overlays').show();


       $.ajax({
    url:"{{route('superadmin.header.nav.update')}}",
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