<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topper;
use DB;
use File;
use App\Grid;
use App\Nav;
use App\BodyTop;
use Storage;

class HeaderController extends Controller
{
      	public function __construct()
    {
        $this->middleware('superadmin');
    }



    public function topper(){

    	$title = "Topper";

    	$toppers = Topper::all();

    	return view('SuperAdminPages.header.topper')->with(['title'=>$title,'toppers'=>$toppers]);
    }


    public function topper_edit($id){

      $title = "Edit Topper";

      $topper = Topper::find($id);

      return view('SuperAdminPages.header.topper_edit')->with(['title'=>$title,'topper'=>$topper]);
    }


    public function topper_update(Request $request){

    	if ($request->ajax()) {
    		

    		$new = Topper::find($request->id);
			$new->company_name = $request->company_name;
	
			$new->company_desc = $request->company_desc;
			if ($request->icon != '') {
			// \File::delete('assets/images/'.$new->icon);
			// 	$image = $request->file('icon');
			// 	$ext = $image->getClientOriginalExtension();
			// 	$new_name = 'favicon'.date('YmD').''.rand().'.'.$ext;
                 $path = Storage::disk('s3')->put('ZAHTECH_PIC', $request->file('icon'));
        $path = Storage::disk('s3')->url($path);
				$new->icon = $path;
        			
				//$image->move('assets/images', $new_name);	
			}

			
			
			$save = $new->save();

			if ($save) {
				return response()->json('success');
			}else{
				return response()->json('Error, Try Again Later.');
			}

    	}
    }





    /////////////////////////////////GRID/////////////////////////////////////////////

    public function grid(){

        $title = "Grid";

        $grids = Grid::all();

        return view('SuperAdminPages.header.grid')->with(['title'=>$title,'grids'=>$grids]);

    }


    public function grid_edit($id){

      $title = "Edit Grid";

      $grid = Grid::find($id);

      return view('SuperAdminPages.header.grid_edit')->with(['title'=>$title,'grid'=>$grid]);
    }


        public function grid_update(Request $request){

        if ($request->ajax()) {
            

            $new = Grid::find($request->id);
            $new->email = $request->email;
            $new->phone = $request->phone;
            $new->address = $request->address;
            $new->open_and_close = $request->open_and_close;
            $new->bgcolor = $request->bgcolor;
            $new->color = $request->color;
            $new->social_icon = $request->social_icon;
            $save = $new->save();

            if ($save) {
                return response()->json('success');
            }else{
                return response()->json('Error, Try Again Later.');
            }

        }
    }





///////////////////////////NAV////////////////////////////////////


 public function nav(){

        $title = "Nav";

        $navs = Nav::all();

        return view('SuperAdminPages.header.nav')->with(['title'=>$title,'navs'=>$navs]);

    }



public function nav_edit($id){

      $title = "Edit Nav";

      $nav = Nav::find($id);

      return view('SuperAdminPages.header.nav_edit')->with(['title'=>$title,'nav'=>$nav]);
    }


    public function nav_update(Request $request){

        if ($request->ajax()) {
            

            $new = Nav::find($request->id);
            $new->bgcolor = $request->bgcolor;
            $new->color = $request->color;
            $new->over = $request->over;
            $new->out = $request->out;
            if ($request->logo != '') {
            // \File::delete('assets/images/'.$new->logo);
            //     $image = $request->file('logo');
            //     $ext = $image->getClientOriginalExtension();
            //     $new_name = 'favicon'.date('YmD').''.rand().'.'.$ext;
                 $path = Storage::disk('s3')->put('ZAHTECH_PIC', $request->file('logo'));
        $path = Storage::disk('s3')->url($path);
                $new->logo = $path;
               // $image->move('assets/images', $new_name);   
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
