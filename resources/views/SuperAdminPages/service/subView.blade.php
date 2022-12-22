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
                                    <h4 class="mb-0 font-size-18">Sub Services</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Page</a></li>
                                            <li class="breadcrumb-item active">Record</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-sm-4">
                                                <!-- <div class="search-box mr-2 mb-2 d-inline-block">
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control" placeholder="Search..." id="search_user">
                                                        <i class="bx bx-search-alt search-icon"></i>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <div class="col-sm-8">
                                 
                                            </div><!-- end col-->
                                        </div>

                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap" id="users_table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                       
                                                        <th>Service</th>
                                                       
                                                        <th>Title</th>
                                                     
                                                        <th>Action</th>
                                                        
                                                        
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                  
                                                  <tr>
                                                      <th>#</th>
                                                       
                                                        <th>Service</th>
                                                       
                                                        <th>Title</th>
                                                     
                                                        <th>Action</th>
                                                  </tr>
                                                  
                                                </tfoot>
                                                <tbody>
                                                  <?php $no = 1;?>

                                                  @foreach($sub_services as $sub)
                                                  <tr>
                                                    <td>{{$no}}</td>
                                                    <td>{{$sub->title}}</td>
                                                    <td>{{$sub->s_s_title}}</td>
                                                    <td><a href="/superadmin/service/sub/edit/{{$sub->sub_service_id}}" class="btn btn-success btn-sm">Edit</a> <button class="btn btn-danger btn-sm" data-id="{{$sub->sub_service_id}}" id="delete_slide">Delete</button></td>
                                                  </tr> 
                                                  <?php $no++;?>
                                                @endforeach
                                                </tbody>
                                            </table>

                                            {{$sub_services->links()}}
                                        </div>
                                  
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


<script type="text/javascript">
	
	$(document).ready(function(){

var _tokens = $('input[name=_token]').val();

function validateEmail(email) 
    {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }


function addCommas(nStr){

    nStr +='';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while(rgx.test(x1)){
      x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
  }



$('body').delegate('#delete_slide', 'click', function(e){

    e.preventDefault();
    var id = $(this).data('id');

  
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
    url:"{{route('superadmin.service.sub.delete')}}",
    method:"POST",
    data:{id:id,_tokens:_tokens},
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