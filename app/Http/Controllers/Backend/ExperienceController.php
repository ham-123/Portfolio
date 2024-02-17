<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ExperienceModel;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index(Request $request) {
        $data['meta_title']=  ' experience ';
        $experiences = ExperienceModel::all();
        return view('backend.about.experience.index', compact('experiences'), $data);
    }

    public function create(Request $request) {
        $data['meta_title']= 'experience ';
        return view('backend.about.experience.create', $data);
    }

    public function store(Request $request){
        $data['meta_title']= 'experience ';
        ExperienceModel::create($request->all());
        return redirect()->route('experiences_index', $data);
    }
    public function edit($id) {
        $data['meta_title']= 'experience ';
        $experiences = ExperienceModel::findOrFail($id);
        return view('backend.about.experience.edit', compact('experiences'), $data);
    }

    public function update(Request $request, $id) {
        $data['meta_title']= 'experience ';
        $experiences = ExperienceModel::findOrFail($id);
        $experiences->update($request->all());
        return redirect()->route('experiences_index', $data);
    }
    public function destroy(ExperienceModel $experience) {
    
        $experience->delete();
        return redirect()->route('experiences_index')->with('success', 'Éducation supprimée avec succès.');
    }

}
