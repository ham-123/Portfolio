<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompetenceModel;

class CompetenceController extends Controller
{
    public function index(Request $request)
    {
        $data['meta_title']=  ' competence ';
        $competences = CompetenceModel::all();
        return view('backend.about.competences.index', compact('competences'), $data);
    }

    public function create(Request $request)
    {
        $data['meta_title']=  ' competence ';
        return view('backend.about.competences.create', $data);
    }

    public function store(Request $request)
    {
        $data['meta_title']=  ' competence ';
        CompetenceModel::create($request->all());
        return redirect()->route('competences_index', $data)->with("success", "Enregistrement effectuer");
    }

    public function edit($id)
{
    $data['meta_title']=  ' competence ';
    $competence = CompetenceModel::findOrFail($id);
    return view('backend.about.competences.edit', compact('competence'), $data)->with("success", "Enregistrement effectuer");
}

    

    public function update(Request $request, CompetenceModel $competence)
    {
        $data['meta_title']=  ' competence ';
        $competence->update($request->all());
        return redirect()->route('competences_index', $data);
    }

    public function destroy(CompetenceModel $competence)
    {
        $data['meta_title']=  ' competence ';
        $competence->delete();
        return redirect()->route('competences_index', $data);
    }
}
