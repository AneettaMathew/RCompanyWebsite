<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\MeetTeamMembers;
class MeetTeamController extends Controller
{
    public function addteams()
    {
        return view('admin.Aboutus.meetteam_add');
    }
    public function addmeetteam(Request $request)
    {
        $request->validate([
            'profile_name'=> 'required',
            'profile_role'=> 'required',
            'profile_image'=>'required'
          ]);

        $meetteam = new MeetTeamMembers();
        $meetteam->profile_name=$request->input('profile_name');
        $meetteam->profile_role=$request->input('profile_role');
        if($request->hasfile('profile_image'))
        {
            $file = $request->file('profile_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('backend/upload/', $filename);
            $meetteam->profile_image = $filename;
        }
        $meetteam->save();
        return view('admin.Aboutus.meetteam_add');
    }
    public function listteams(){
        $meetteamlist = MeetTeamMembers::all();
        return view('admin.Aboutus.team_list',compact('meetteamlist'));
    }
    public function meetteamedit($id){
        $meetteamedit = MeetTeamMembers::find($id);
        return view ('admin.Aboutus.editteam',compact('meetteamedit'));
      }
      public function updateteam(Request $request,$id)
  {

    $updateteam =  MeetTeamMembers::find($id);
    $updateteam->profile_name =$request->input('profile_name');
    $updateteam->profile_role  =$request->input('profile_role');
    if($request->hasfile('profile_image'))
    {
        $file = $request->file('profile_image');
        $extenstion = $file->getClientOriginalExtension();
        $filename = time().'.'.$extenstion;
        $file->move('backend/upload/', $filename);
        $updateteam->profile_image = $filename;
    }

    $updateteam->save();
    return redirect('/admin/listteams')->with('updateteam',$updateteam);
  }

  public function meetteamdelete($id){
    $meetteamdelete = MeetTeamMembers::find($id);
    $destination = 'backend/upload/'. $meetteamdelete-> profile_image;
    if(File::exists($destination))
    {
        File::delete($destination);
    }
    $meetteamdelete->delete();
    return redirect('/admin/listteams');
  }
  
}
