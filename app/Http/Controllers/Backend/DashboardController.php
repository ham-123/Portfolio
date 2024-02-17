<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeModel;
use App\Models\Message;

use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function dashboard(Request $request) {
        $data['meta_title']=  ' Dashboard ';
        return view('backend.dashboard.list', $data);
    }

    public function dashboard_home(Request $request){
        $info['getrecord']= HomeModel::all();
        $data['meta_title']=  ' Home ';
        return view('backend.home.list', $data, $info);
    }
    public function admin_home_post(Request $request){
        //dd($request->all());
        if($request->add_to_update == "Add"){
            $insertRecord = request()->validate([ 
                'profile' => ['required'],
            ]);
            $insertRecord = new HomeModel;

        }else{
            $insertRecord = HomeModel::find($request->id);
   
        }
      
        $insertRecord->your_name = $request->your_name;
        $insertRecord->work_experience = $request->work_experience;
        $insertRecord->description = $request->description;
        if(!empty($request->file('profile'))){
            if(!empty($insertRecord->profile) && file_exists('public/img/')){
                unlink('public/img/'.$insertRecord->profile);
            }

            $file = $request->file('profile');
            $ramdomStr = Str::random(30); 
            $filename = $ramdomStr.'.'. $file->getClientOriginalExtension();
            $file->move('public/img/', $filename);
            $insertRecord->profile = $filename; 
        }

        $insertRecord->save();
        
        return redirect()->route('dashboard_home')->with("success", "Enregistrement effectuer");

    }

   

    public function dashboard_portfolio(Request $request){
        $data['meta_title']=  ' Porfolio ';
        return view('backend.portfolio.list', $data);
    }

    public function dashboard_contact(Request $request){
        $messages = Message::all();
        $data['meta_title']=  ' Contact ';
        return view('backend.contact.list', $data, compact('messages'));
    }
    public function dashboard_blog(Request $request){
        $data['meta_title']=  ' Blog ';
        return view('backend.blog.list', $data);
    }
}
