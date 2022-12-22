<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use FIlE;
use App\Service;
use App\SubService;
use Storage;

class ServiceController extends Controller
{
        	public function __construct()
    {
        $this->middleware('superadmin');
    }



    public function index(){

    	$title = "Services";

    	$services = Service::all();

    	return view('SuperAdminPages.service.index')->with(['title'=>$title,'services'=>$services]);

    }



    public function upload(Request $request){

    	if ($request->ajax()) {
    		
//     		$image = $request->file('image');
// 		$ext = $image->getClientOriginalExtension();
		
// 		if($request->file('image')->getSize() > 2097152){

// return response()->json(['message' => 'Picture must not be greater than 2MB', 'class_name' => 'alert-danger']);

// 		}else{

		// $new_name = date('YmD').'Services'.date('YmD').'photo'.rand().'.'.$ext;
		// $image->move('assets/images/services', $new_name);

			$path = Storage::disk('s3')->put('ZAHTECH_PIC', $request->file('image'));
        $path = Storage::disk('s3')->url($path);

		$service = new Service;
		$service->title = $request->title;
		$service->short_desc = $request->short_desc;
		$service->desc = $request->desc;
		$service->image = $path;
		$save = $service->save();

		if ($save) {
	return response()->json(['message' => 'Service Added Successfully', 'class_name' => 'alert-success']);
		}else{
return response()->json(['message' => 'Error, Please Try Again', 'class_name' => 'alert-danger']);

		}

		//}	

    	}
    }






      public function edit($id){

    	$title = "Edit Service";

    	$service = Service::find($id);

    	return view('SuperAdminPages.service.edit')->with(['title'=>$title,'service'=>$service]);

    }







 public function update(Request $request){

    	if ($request->ajax()) {
    		



		$service = Service::find($request->service_id);
		$service->title = $request->title;
		$service->short_desc = $request->short_desc;
		$service->desc = $request->desc;
		if ($request->file('image') != '') {

// 				if($request->file('image')->getSize() > 2097152){

// return response()->json(['message' => 'Picture must not be greater than 2MB', 'class_name' => 'alert-danger']);

// 		}else{

// 		\File::delete('assets/images/services/'.$service->image);
		

// 		$image = $request->file('image');
// 		$ext = $image->getClientOriginalExtension();
		
// 		$new_name = date('YmD').'ServicesUpdate'.date('YmD').'photo'.rand().'.'.$ext;
// 		$image->move('assets/images/services', $new_name);
			$path = Storage::disk('s3')->put('ZAHTECH_PIC', $request->file('image'));
        $path = Storage::disk('s3')->url($path);
		$service->image = $path;

		//}
				
		}
	
		$save = $service->save();

		if ($save) {
	return response()->json(['message' => 'Service Updated Successfully', 'class_name' => 'alert-success']);
		}else{
return response()->json(['message' => 'Error, Please Try Again', 'class_name' => 'alert-danger']);

		}

		







    	}
    }







    public function delete(Request $request){
	if ($request->ajax()) {

$service = Service::find($request->service_id);
	\File::delete('assets/images/services/'.$service->image);
$delete = $service->delete();

if ($delete) {
	return response('success');
}else{
		return response('Error, Please Try Again.');
}



	}
}


///////////////////////////////////////////////////////


public function subCreate(){

	$title = "Create Sub Services";
	
	$services = Service::all();

	return view('SuperAdminPages.service.subCreate')->with(['title'=>$title,'services'=>$services]);
}




public function subUpload(Request $request){

	if ($request->ajax()) {
		
		$new = new SubService;
		$new->s_s_id = $request->s_s_id;
		$new->s_s_title = $request->s_s_title;
		$new->s_s_desc = $request->s_s_desc;

		if ($new->save()) {
			return response()->json('success');
		}else{

			return response()->json('Error, Try Again.');
		}

	}
}


public function subView(){

	$title = "View Sub Services";
	
	$sub_services = SubService::join('service','service_id','s_s_id')->paginate(10);

	return view('SuperAdminPages.service.subView')->with(['title'=>$title,'sub_services'=>$sub_services]);
}


public function subEdit($id){

	$title = "Edit Sub Services";
	
	$sub = SubService::find($id);
	$services = Service::all();

	return view('SuperAdminPages.service.subEdit')->with(['title'=>$title,'sub'=>$sub, 'services'=>$services]);
}





public function subUpdate(Request $request){

	if ($request->ajax()) {
		
		$new = SubService::find($request->id);
		$new->s_s_id = $request->s_s_id;
		$new->s_s_title = $request->s_s_title;
		$new->s_s_desc = $request->s_s_desc;

		if ($new->save()) {
			return response()->json('success');
		}else{

			return response()->json('Error, Try Again.');
		}

	}
}




   public function subDelete(Request $request){
	if ($request->ajax()) {

$sub = SubService::find($request->id);
$delete = $sub->delete();

if ($delete) {
	return response('success');
}else{
		return response('Error, Please Try Again.');
}



	}
}






}
