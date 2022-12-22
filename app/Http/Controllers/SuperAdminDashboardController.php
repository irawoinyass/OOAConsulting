<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SuperAdmin;
use App\Aboutus;
use App\Careers;
use Storage;

class SuperAdminDashboardController extends Controller
{
    	public function __construct()
    {
        $this->middleware('superadmin');
    }

    
    public function index(){

    

    	$title = "Dashboard";

       

    	return view('SuperAdminPages.index')->with(['title'=>$title]);

    }



    public function resetpassword(){

    $title = "Password Reset";

    return view('SuperAdminPages.passwordreset')->with('title',$title);

}



public function passwordreset(Request $request){

    if ($request->ajax()) {


        $update = SuperAdmin::find(auth()->guard('superadmin')->user()->id);
        $update->password = bcrypt($request->password);
        $save = $update->save();

        if ($save) {
            
            return response('success');

        }else{

            return response('Error, Please Try Again.');

        }
        
        
    }
}






public function aboutus(){

    $title = "About Us";

    $aboutus = Aboutus::all();

    return view('SuperAdminPages.aboutus')->with(['title'=>$title,'aboutus'=>$aboutus]);
}



public function aboutusEdit($id){

    $title = "aboutus Edit";

    $aboutus = Aboutus::find($id);

    return view('SuperAdminPages.aboutusEdit')->with(['title'=>$title,'aboutus'=>$aboutus]);
}







public function Aboutupdate(Request $request){

        if ($request->ajax()) {
            

            $new = Aboutus::find($request->id);
            $new->title = $request->title;
            $new->desc = $request->desc;
            if ($request->image != '') {
            // \File::delete('assets/images/aboutus/'.$new->image);
            //     $image = $request->file('image');
            //     $ext = $image->getClientOriginalExtension();
            //     $new_name = 'aboutusPageImage'.date('YmD').''.rand().'.'.$ext;

        $path = Storage::disk('s3')->put('ZAHTECH_PIC', $request->file('image'));
        $path = Storage::disk('s3')->url($path);
                $new->image = $path;
                    
                //$image->move('assets/images/aboutus', $new_name);   
            }
            $save = $new->save();

            if ($save) {
                return response()->json('success');
            }else{
                return response()->json('Error, Try Again Later.');
            }

        }
    }









public function careers(){

    $title = "Careers";

    $careers = Careers::all();

    return view('SuperAdminPages.careers')->with(['title'=>$title,'careers'=>$careers]);
}



public function careersEdit($id){

    $title = "Careers Edit";

    $car = Careers::find($id);

    return view('SuperAdminPages.careersEdit')->with(['title'=>$title,'car'=>$car]);
}







public function Careersupdate(Request $request){

        if ($request->ajax()) {
            

            $new = Careers::find($request->id);
            $new->title = $request->title;
            $new->desc = $request->desc;
            if ($request->image != '') {
            // \File::delete('assets/images/aboutus/'.$new->image);
            //     $image = $request->file('image');
            //     $ext = $image->getClientOriginalExtension();
            //     $new_name = 'CareersPagesImage'.date('YmD').''.rand().'.'.$ext;
        $path = Storage::disk('s3')->put('ZAHTECH_PIC', $request->file('image'));
        $path = Storage::disk('s3')->url($path);
                $new->image = $path;
                    
                //$image->move('assets/images/aboutus', $new_name);   
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
