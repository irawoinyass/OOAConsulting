<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use DB;
use App\Slides;
use Storage;

class SlideController extends Controller
{
     	public function __construct()
    {
        $this->middleware('superadmin');
    }



public function index(){

	$title = "Slide";
	$slides = Slides::all();
	return view('SuperAdminPages.slide')->with(['title'=>$title,'slides'=>$slides]);

}





public function upload(Request $request){

    	if ($request->ajax()) {



//     	$image = $request->file('image');
// 		$ext = $image->getClientOriginalExtension();
		
// 		if($request->file('image')->getSize() > 2097152){

// return response()->json(['message' => 'Picture must not be greater than 2MB', 'class_name' => 'alert-danger']);

// 		}else{

		// $new_name = date('YmD').'Slide'.date('YmD').'photo'.rand().'.'.$ext;
		// $image->move('assets/images/slider', $new_name);

    		 $path = Storage::disk('s3')->put('ZAHTECH_PIC', $request->file('image'));
        $path = Storage::disk('s3')->url($path);

		$photo = new Slides;
		
		if ($request->title == '') {
			$photo->title = '';
		}else{
			$photo->title = $request->title;
		}
		
		if ($request->description == '') {
			$photo->desc = '';
		}else{
			$photo->desc = $request->description;
		}

		if ($request->link == '') {
			$photo->button_url = '';
		}else{
			$photo->button_url = $request->link;
		}

		if ($request->link_name == '') {
			$photo->button_name = '';
		}else{
			$photo->button_name = $request->link_name;
		}

			if ($request->bgcolor == '') {
			$photo->bgcolor = '';
		}else{
			$photo->bgcolor = $request->bgcolor;
		}
		

		
		$photo->image = $path;
		$photo->title_color = $request->title_color;
		$photo->desc_color = $request->desc_color;
		
		$save = $photo->save();

		if ($save) {
	return response()->json(['message' => 'Slide Added Successfully', 'class_name' => 'alert-success']);
		}else{
return response()->json(['message' => 'Error, Please Try Again', 'class_name' => 'alert-danger']);

		}

		//}	

    	
    	}
    }





    public function delete(Request $request){
	if ($request->ajax()) {

$photo = Slides::find($request->slide_id);
	//\File::delete('assets/images/slider/'.$photo->image);
$delete = $photo->delete();

if ($delete) {
	return response('success');
}else{
		return response('Error, Please Try Again.');
}



	}
}




public function edit($id){

	$title = "Edit Slide";

	$slide = Slides::find($id);

	return view('SuperAdminPages.editslide')->with('title', $title)->with('slide', $slide);
}








public function update(Request $request){

	if ($request->ajax()) {
		




		if ($request->file('image') == '') {
			

		$photo = Slides::find($request->slide_id);

		if ($request->title == '') {
			$photo->title = '';
		}else{
			$photo->title = $request->title;
		}
		
		if ($request->description == '') {
			$photo->desc = '';
		}else{
			$photo->desc = $request->description;
		}

		if ($request->link == '') {
			$photo->button_url = '';
		}else{
			$photo->button_url = $request->link;
		}

		if ($request->link_name == '') {
			$photo->button_name = '';
		}else{
			$photo->button_name = $request->link_name;
		}

			if ($request->bgcolor == '') {
			$photo->bgcolor = '';
		}else{
			$photo->bgcolor = $request->bgcolor;
		}

		
		$photo->title_color = $request->title_color;
		$photo->desc_color = $request->desc_color;
		$save = $photo->save();

		if ($save) {
	return response()->json(['message' => 'Slide Updated Successfully', 'class_name' => 'alert-success']);
		}else{
return response()->json(['message' => 'Error, Please Try Again', 'class_name' => 'alert-danger']);

		}
	


		}else{





// 		$image = $request->file('image');
// 		$ext = $image->getClientOriginalExtension();
		
// 		if($request->file('image')->getSize() > 2097152){

// return response()->json(['message' => 'Picture must not be greater than 2MB', 'class_name' => 'alert-danger']);

// 		}else{

// 		$new_name = date('YmD').'Slide'.date('YmD').'photo'.rand().'.'.$ext;
// 		$image->move('assets/images/slider', $new_name);


			 $path = Storage::disk('s3')->put('ZAHTECH_PIC', $request->file('image'));
        $path = Storage::disk('s3')->url($path);

			$photo = Slides::find($request->slide_id);
	
		if ($request->title == '') {
			$photo->title = '';
		}else{
			$photo->title = $request->title;
		}
		
		if ($request->description == '') {
			$photo->desc = '';
		}else{
			$photo->desc = $request->description;
		}

		if ($request->link == '') {
			$photo->button_url = '';
		}else{
			$photo->button_url = $request->link;
		}

		if ($request->link_name == '') {
			$photo->button_name = '';
		}else{
			$photo->button_name = $request->link_name;
		}

			if ($request->bgcolor == '') {
			$photo->bgcolor = '';
		}else{
			$photo->bgcolor = $request->bgcolor;
		}

		
	//\File::delete('assets/images/slider/'.$photo->image);
		
		$photo->image = $path;
		$photo->title_color = $request->title_color;
		$photo->desc_color = $request->desc_color;
		$save = $photo->save();

		if ($save) {
	return response()->json(['message' => 'Slide Updated Successfully', 'class_name' => 'alert-success']);
		}else{
return response()->json(['message' => 'Error, Please Try Again', 'class_name' => 'alert-danger']);

		}

		//}	











		}











	}
}















}
