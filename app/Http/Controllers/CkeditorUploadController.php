<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class CkeditorUploadController extends Controller
{
    
      	public function __construct()
    {
        $this->middleware('superadmin');
    }


    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            // $originName = $request->file('upload')->getClientOriginalName();
            // $fileName = pathinfo($originName, PATHINFO_FILENAME);
            // $extension = $request->file('upload')->getClientOriginalExtension();
            // $fileName = $fileName.'_'.time().'.'.$extension;
        
            // $request->file('upload')->move(public_path('assets/images/ckeditor'), $fileName);
            $path = Storage::disk('s3')->put('ZAHTECH_PIC', $request->file('upload'));
        $path = Storage::disk('s3')->url($path);
   
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            //$url = asset('assets/images/ckeditor/'.$fileName); 
            $msg = 'Image uploaded successfully'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$path', '$msg')</script>";
               
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
        }
    }



}
