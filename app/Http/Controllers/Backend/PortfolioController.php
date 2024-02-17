<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    public function index()
    {
        $data['meta_title'] =  'Portfolio ';
        $portfolios = Portfolio::all();
        return view('backend.portfolio.index', compact('portfolios'), $data);
    }


    public function create()
    {
        $data['meta_title'] =  'Create Portfolio ';
        return view('backend.portfolio.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'project_type' => 'required',
            'client' => 'required',
            'languages' => 'required',
            'preview_link' => 'required',
        ]);
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            if ($image->isValid()) {
                $imageName = time() . '.' . $image->extension();
                $image->move(public_path('img'), $imageName);
    
                $portfolio = new Portfolio;
                $portfolio->title = $request->title;
                $portfolio->image = $imageName;
                $portfolio->project_type = $request->project_type;
                $portfolio->client = $request->client;
                $portfolio->languages = $request->languages;
                $portfolio->preview_link = $request->preview_link;
    
                if ($portfolio->save()) {
                    return redirect()->route('portfolio_index')->with('success', 'Projet créé avec succès.');
                } else {
                    return back()->with('error', 'Une erreur s\'est produite lors de l\'enregistrement du projet.');
                }
            } else {
                return back()->with('error', 'Une erreur s\'est produite lors du téléchargement de l\'image.');
            }
        } else {
            return back()->with('error', 'Aucune image n\'a été téléchargée.');
        }
    }
    

    public function show($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $meta_title = 'Détails du projet';
        return view('backend.portfolio.show', compact('portfolio', 'meta_title'));
    }
    

public function edit($id)
{
    $meta_title = 'Détails du projet';

    $portfolio = Portfolio::findOrFail($id);
    return view('backend.portfolio.edit', compact('portfolio','meta_title'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif', 
        'project_type' => 'required',
        'client' => 'required',
        'languages' => 'required',
        'preview_link' => 'required', 
    ]);

    $portfolio = Portfolio::findOrFail($id);

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        if ($image->isValid()) {
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('img'), $imageName);
            $portfolio->image = $imageName;
        }
    }

    $portfolio->title = $request->title;
    $portfolio->project_type = $request->project_type;
    $portfolio->client = $request->client;
    $portfolio->languages = $request->languages;
    $portfolio->preview_link = $request->preview_link;

    if ($portfolio->save()) {
        return redirect()->route('portfolio_index')->with('success', 'Le projet a été modifié avec succès.');
    } else {
        return back()->with('error', 'Une erreur s\'est produite lors de la modification du projet.');
    }
}



  public function destroy($id)
{
    $portfolio = Portfolio::find($id);

    if ($portfolio) {
        $portfolio->delete();
        return redirect()->route('portfolio_index')->with('success', 'Le projet a été supprimé avec succès.');
    } else {
        return back()->with('error', 'Le projet n\'a pas été trouvé.');
    }
}

}
