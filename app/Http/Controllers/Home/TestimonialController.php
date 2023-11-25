<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\Support\Facades\File;

class TestimonialController extends Controller
{
        public function Testimonial()
        {
            return view('admin.Testimonial.addTestimonial');
        }
    public function testimonialadd(Request $request)
    {

        $testimonialadd = new Testimonial();
        $testimonialadd->clientname=$request->input('clientname');
        $testimonialadd->companyname=$request->input('companyname');
        $testimonialadd->position=$request->input('position');
        $testimonialadd->description=$request->input('description');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion; 
            $file->move('backend/upload/', $filename);
            $testimonialadd->image = $filename;
        }
        $testimonialadd->save();
        return view('admin.Testimonial.addTestimonial');
    }
    public function testimoniallist(){
        $testimoniallist = Testimonial::all();
        return view('admin.Testimonial.listTestimonial',compact('testimoniallist'));
    }
    public function testimonialedit($id){
        $testimonialedit = Testimonial::find($id);
        return view ('admin.Testimonial.Testimonialedit',compact('testimonialedit'));
      }
      public function testimonialupdate(Request $request,$id)
      {
        $testimonialupdate =  Testimonial::find($id);
        $testimonialupdate->clientname =$request->input('clientname');
        $testimonialupdate->companyname=$request->input('companyname');
        $testimonialupdate->position=$request->input('position');
        $testimonialupdate->description  =$request->input('description');

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('backend/upload/', $filename);
            $testimonialupdate->image = $filename;  
        }

        $testimonialupdate->save();
        return redirect('/admin/testimoniallist')->with('testimonialupdate',$testimonialupdate);
    }
    public function testimonialdelete($id){
        $testimonialdelete = Testimonial::find($id);
        $destination = 'backend/upload/'. $testimonialdelete-> image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $testimonialdelete->delete();
        return redirect('/admin/testimoniallist');
      }
}
