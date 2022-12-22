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
                                    <h4 class="mb-0 font-size-18">Custom</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Body</a></li>
                                            <li class="breadcrumb-item active">Top</li>
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
                                                        <th>Action</th>
                                                        <th>Title</th>
                                                        <th>Short One</th>
                                                        <th>Short Two</th>
                                                        <th>Desc</th>
                                                        
                                                        
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                  
                                                  <tr>
                                                      <th>#</th>
                                                        <th>Action</th>
                                                        <th>Title</th>
                                                        <th>Short One</th>
                                                        <th>Short Two</th>
                                                        <th>Desc</th>
                                                  </tr>
                                                  
                                                </tfoot>
                                                <tbody>
                                                  <?php $no = 1;?>

                                                  @foreach($tops as $top)
                                                  <tr>
                                                    <td>{{$no}}</td>
                                                    <td><a href="/superadmin/body/top/edit/{{$top->body_top_id}}" class="btn btn-warning btn-sm btn-icon"><i class="fa fa-pen"></i></a></td>
                                                    <td>{{$top->title}}</td>
                                                    <td>{{$top->short_one}}</td>
                                                    <td>{{$top->short_two}}</td>
                                                    <td>{{$top->desc}}</td>
                                                  </tr>
                                                  <?php $no++;?>
                                                @endforeach
                                                </tbody>
                                            </table>
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









	});
</script>            


@endsection