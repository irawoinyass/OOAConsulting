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
                                      
                              <li class="breadcrumb-item active"><a href="{{route('superadmin.body.top')}}">Top</a></li>
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
          
            <form id="update_top" method="POST" enctype="multipart/form-data">
 
 {{ csrf_field() }}

    <div class="form-group">
          <label style="">Title</label>
           <input type="text" class="form-control" id="title" name="title" value="{{$top->title}}">
         <small style=" font-weight: 700;"></small>
        </div>

        <div class="form-group">
          <label style="">Short One</label>
           <input type="text" class="form-control" id="short_one" name="short_one" value="{{$top->short_one}}">
         <small style=" font-weight: 700;"></small>
        </div>

<div class="form-group">
          <label style="">Short Two</label>
           <input type="text" class="form-control" id="short_two" name="short_two" value="{{$top->short_two}}">
         <small style=" font-weight: 700;"></small>
        </div>
    

     
    <input type="hidden" name="id" id="id" value="{{$top->body_top_id}}">

       <div class="form-group">
          <label style="">Desc</label>
           <textarea class="form-control" id="desc" name="desc" rows="5" cols="">{{$top->desc}}</textarea>
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






    $('#update_top').on('submit', function(e){



e.preventDefault();
 var data = $(this).serialize();
      var url = $(this).attr('action');
      var post = $(this).attr('method');

      var title = $('#title').val();
      var short_one = $('#short_one').val();
      var short_two = $('#short_two').val();
      var desc = $('#desc').val();
    

      if (title == '') {
swal("Title!", "Field is Required", "error");
      }else if (short_one == '') {
swal("Short One!", "Field is Required", "error");
      }else if (short_two == '') {
swal("Short Two!", "Field is Required", "error");
      }else if (desc == '') {
swal("Desc!", "Field is Required", "error");
      }else{



      if (confirm("Are you sure")) {


$('.overlays').show();


       $.ajax({
    url:"{{route('superadmin.body.top.update')}}",
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