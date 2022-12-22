<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Topper;
use App\Grid;
use App\Nav;
use App\Slides;
use App\BodyTop;
use App\Service;
use App\Info;
use App\Midbody;
use App\SubService;
use App\Aboutus;
use App\Careers;

class MainController extends Controller
{
    
	public function index(){

		$topper = Topper::find(1);
		$grid = Grid::find(1);
		$nav = Nav::find(1);
		$body_top = BodyTop::find(1);
		$info = Info::find(1);
		 $mid = Midbody::find(1);
		$slides = Slides::all();
		$services = Service::take(4)->get();
		$title = $topper->company_name;
		$menus = Service::with('sub')->get();


		return view('MainPages.index')->with(['title'=>$title,'topper'=>$topper,'grid'=>$grid,'nav'=>$nav,'slides'=>$slides,'body_top'=>$body_top,'services'=>$services,'menus'=>$menus,'info'=>$info,'mid'=>$mid]);
	}


		public function aboutus(){

		$topper = Topper::find(1);
		$grid = Grid::find(1);
		$nav = Nav::find(1);
		$body_top = BodyTop::find(1);
		$slides = Slides::all();
		$services = Service::take(6)->get();
		$title = "About Us";
		$menus = Service::with('sub')->get();
		$aboutus = Aboutus::find(1);

		return view('MainPages.aboutus')->with(['title'=>$title,'topper'=>$topper,'grid'=>$grid,'nav'=>$nav,'slides'=>$slides,'body_top'=>$body_top,'services'=>$services,'menus'=>$menus,'aboutus'=>$aboutus]);
	}



		public function careers(){

		$topper = Topper::find(1);
		$grid = Grid::find(1);
		$nav = Nav::find(1);
		$body_top = BodyTop::find(1);
		$slides = Slides::all();
		$services = Service::take(6)->get();
		$title = "Careers";
		$menus = Service::with('sub')->get();
		$careers = Careers::find(1);

		return view('MainPages.careers')->with(['title'=>$title,'topper'=>$topper,'grid'=>$grid,'nav'=>$nav,'slides'=>$slides,'body_top'=>$body_top,'services'=>$services,'menus'=>$menus,'careers'=>$careers]);
	}





		public function services($name){

		$topper = Topper::find(1);
		$grid = Grid::find(1);
		$nav = Nav::find(1);
		$body_top = BodyTop::find(1);
		$slides = Slides::all();
		$services = Service::where('title',$name)->get();
		$title = $name;
		$menus = Service::with('sub')->get();

		foreach ($services as $key) {
			$id = $key->service_id;
		}

		$service = Service::find($id);


		return view('MainPages.services')->with(['title'=>$title,'topper'=>$topper,'grid'=>$grid,'nav'=>$nav,'slides'=>$slides,'body_top'=>$body_top,'service'=>$service,'menus'=>$menus]);
	}



	public function subservice($name){

		$topper = Topper::find(1);
		$grid = Grid::find(1);
		$nav = Nav::find(1);
		$body_top = BodyTop::find(1);
		$slides = Slides::all();
		$services = SubService::where('s_s_title',$name)->get();
		$title = $name;
		$menus = Service::with('sub')->get();

		foreach ($services as $key) {
			$id = $key->sub_service_id;
		}

		$service = SubService::find($id);


		return view('MainPages.subservice')->with(['title'=>$title,'topper'=>$topper,'grid'=>$grid,'nav'=>$nav,'slides'=>$slides,'body_top'=>$body_top,'service'=>$service,'menus'=>$menus]);
	}



		public function contactus(){

		$topper = Topper::find(1);
		$grid = Grid::find(1);
		$nav = Nav::find(1);
		$body_top = BodyTop::find(1);
		$slides = Slides::all();
		$services = Service::take(6)->get();
		$title = "Contact Us";
		$menus = Service::with('sub')->get();


		return view('MainPages.contactus')->with(['title'=>$title,'topper'=>$topper,'grid'=>$grid,'nav'=>$nav,'slides'=>$slides,'body_top'=>$body_top,'services'=>$services,'menus'=>$menus]);
	}











public function contact(Request $request){

		 	if ($request->ajax()) {
  		
    //  Mail::to($request->email, $request->name)->send(new ContactUsMail($request->email, $request->name,$request->phone_no, $request->msg,$request->msg_subject, 'user'));

    //  Mail::to('hello@nabtechnologies.co.uk', 'NABTECH')->send(new ContactUsMail($request->email, $request->name,$request->phone_no, $request->msg,$request->msg_subject, 'admin'));

    //  return response('success');

   }

	}














}
