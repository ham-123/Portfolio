<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EducationModel;

class EducationController extends Controller
{
    public function index()
    {
        $data['meta_title']=  ' education ';
        $educations = EducationModel::all();
        return view('backend.about.education.index', compact('educations'), $data);
    }

    public function create()
    {
        $data['meta_title']=  ' education ';
        return view('backend.about.education.create', $data);
    }

    public function store(Request $request){

    
        $request->validate([
            'formation' => 'required',
            'ecole' => 'required',
            'diplome' => 'required',
            'annee_debut' => 'required|integer|min:1900|max:' . (date('Y')),
            'annee_fin' => 'nullable|integer|min:1900|max:' . (date('Y'))
        ]);

        EducationModel::create($request->all());

        return redirect()->route('education_index')->with('success', 'Éducation ajoutée avec succès.');
    }

    public function edit(EducationModel $education)
    {
        $data['meta_title']=  ' competence ';
        return view('backend.about.education.edit', compact('education'), $data);
    }

    public function update(Request $request, EducationModel $education)
    {
        $request->validate([
            'formation' => 'required',
            'ecole' => 'required',
            'diplome' => 'required',
            'annee_debut' => 'required|integer|min:1900|max:' . (date('Y')),
            'annee_fin' => 'nullable|integer|min:1900|max:' . (date('Y'))
        ]);

        $education->update($request->all());

        return redirect()->route('education_index')->with('success', 'Éducation mise à jour avec succès.');
    }

    public function destroy(EducationModel $education)
    {
        $education->delete();

        return redirect()->route('education_index')->with('success', 'Éducation supprimée avec succès.');
    }
}
