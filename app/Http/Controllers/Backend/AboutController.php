<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AboutModel;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function dashboard_about(Request $request){
        $data['meta_title']=  ' About ';
        return view('backend.about.list', $data);
    }

    public function index(Request $request){
        $info['getpersonnel']= AboutModel::all();
        $data['meta_title']= 'About ';
        return view('backend.about.personel.index', $data, $info);
    }
    public function personnel_post(Request $request){
        
        //dd($request->all());
        if($request->add_to_update == "Add"){
            $inserttPersonnel = request()->validate([
                'nom' => 'required'
            ]);
            $inserttPersonnel = new AboutModel;

        }else{
            $inserttPersonnel = AboutModel::find($request->id);
        }

      

        $inserttPersonnel->nom = trim($request->nom);
        $inserttPersonnel->prenom = trim($request->prenom);
        $inserttPersonnel->age = trim($request->age);
        $inserttPersonnel->nationalite = trim($request->nationalite);
        $inserttPersonnel->freelance = trim($request->freelance);
        $inserttPersonnel->adresse = trim($request->adresse);
        $inserttPersonnel->telephone = trim($request->telephone);
        $inserttPersonnel->email = trim($request->email);
        $inserttPersonnel->linkedin = trim($request->linkedin);
        $inserttPersonnel->skype = trim($request->skype);
        $inserttPersonnel->languages = trim($request->languages);
        $inserttPersonnel->annee_experience = trim($request->annee_experience);
        $inserttPersonnel->complet_project = trim($request->complet_project);
        $inserttPersonnel->prix_remporte = trim($request->prix_remporte);

        $inserttPersonnel->save();

        return redirect()->route('personnel_about')->with("success", "Enregistrement effectuer");

    }

  
}
