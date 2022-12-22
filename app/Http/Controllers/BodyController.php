<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BodyTop;
use DB;
use File;
use  App\Info;
use App\Midbody;
use Storage;

class BodyController extends Controller
{
    
      	public function __construct()
    {
        $this->middleware('superadmin');
    }

public function top(){

	$title = "Body Top Side";

		$tops = BodyTop::all();

    	return view('SuperAdminPages.body.top')->with(['title'=>$title,'tops'=>$tops]);
}




   public function top_edit($id){

      $title = "Edit Top";
	  $top = BodyTop::find($id);

      return view('SuperAdminPages.body.top_edit')->with(['title'=>$title,'top'=>$top]);
    }



    public function top_update(Request $request){

        if ($request->ajax()) {
            

            $new = BodyTop::find($request->id);
            $new->title = $request->title;
            $new->short_one = $request->short_one;
            $new->short_two = $request->short_two;
            $new->desc = $request->desc;
            $save = $new->save();

            if ($save) {
                return response()->json('success');
            }else{
                return response()->json('Error, Try Again Later.');
            }

        }
    }




    ////////////////////////////Info//////////////////////////////////////////


    public function info(){

    $title = "Body Info Side";

        $infos = Info::all();

        return view('SuperAdminPages.body.info')->with(['title'=>$title,'infos'=>$infos]);
}



    public function info_edit($id){

    $title = "Body Info Edit";

        $info = Info::find($id);

        return view('SuperAdminPages.body.info_edit')->with(['title'=>$title,'info'=>$info]);
}



  public function info_update(Request $request){

        if ($request->ajax()) {
            

            $new = Info::find($request->id);
            $new->title = $request->title;
            $new->short_one = $request->short_one;
            $new->short_two = $request->short_two;
            $new->desc = $request->desc;
            $new->years = $request->years;
            if ($request->image != '') {
            // \File::delete('assets/images/about/'.$new->image);
            //     $image = $request->file('image');
            //     $ext = $image->getClientOriginalExtension();
            //     $new_name = 'aboutusHomeImage'.date('YmD').''.rand().'.'.$ext;
                 $path = Storage::disk('s3')->put('ZAHTECH_PIC', $request->file('image'));
        $path = Storage::disk('s3')->url($path);
                $new->image = $path;
                    
                // $image->move('assets/images/about', $new_name);   
            }
            $save = $new->save();

            if ($save) {
                return response()->json('success');
            }else{
                return response()->json('Error, Try Again Later.');
            }

        }
    }








    /////////////////////////////Midbody/////////////////////////////////////////


    public function midbody(){

    $title = "Mid body Side";

        $midbodys = Midbody::all();

        return view('SuperAdminPages.body.midbody')->with(['title'=>$title,'midbodys'=>$midbodys]);
}




    public function midbody_edit($id){

    $title = "Body Mid Edit";

        $mid = Midbody::find($id);

        return view('SuperAdminPages.body.midbody_edit')->with(['title'=>$title,'mid'=>$mid]);
}





  public function midbody_update(Request $request){

        if ($request->ajax()) {
            

            $new = Midbody::find($request->id);
            $new->title = $request->title;
            $new->desc = $request->desc;
            if ($request->image != '') {
            // \File::delete('assets/images/choose/'.$new->image);
            //     $image = $request->file('image');
            //     $ext = $image->getClientOriginalExtension();
            //     $new_name = 'aboutusHomeImage'.date('YmD').''.rand().'.'.$ext;
        $path = Storage::disk('s3')->put('ZAHTECH_PIC', $request->file('image'));
        $path = Storage::disk('s3')->url($path);
                $new->image = $path;
                    
                //$image->move('assets/images/choose', $new_name);   
            }
            $save = $new->save();

            if ($save) {
                return response()->json('success');
            }else{
                return response()->json('Error, Try Again Later.');
            }

        }
    }









}
