<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $data['meta_title'] =  'Blog ';
        $blogs = Blog::all();
        return view('backend.blog.index', compact('blogs'), $data);
    }


    public function create()
    {
        $data['meta_title'] =  'Create Blog ';
        return view('backend.blog.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif',
            'content' => 'required',
        ]);
    
        if ($request->hasFile('image_path')) {
            $image = $request->file('image_path');
            if ($image->isValid()) {
                $imageName = time() . '.' . $image->extension();
                $image->move(public_path('img'), $imageName);
    
                $blog = new Blog;
                $blog->title = $request->title;
                $blog->image_path = $imageName;
                $blog->content = $request->content;
    
                if ($blog->save()) {
                    return redirect()->route('blog_index')->with('success', 'Article de blog créé avec succès.');
                } else {
                    return back()->with('error', 'Une erreur s\'est produite lors de l\'enregistrement de l\'article de blog.');
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
        $blog = Blog::findOrFail($id);
        $data['meta_title'] = 'Détails de l\'article de blog';
        return view('backend.blog.show', compact('blog'), $data);
    }
    

    public function edit($id)
    {
        $data['meta_title'] = 'Modifier l\'article de blog';

        $blog = Blog::findOrFail($id);
        return view('backend.blog.edit', compact('blog'), $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'image_path' => 'image|mimes:jpeg,png,jpg,gif', 
            'content' => 'required',
        ]);

        $blog = Blog::findOrFail($id);

        if ($request->hasFile('image_path')) {
            $image = $request->file('image_path');
            if ($image->isValid()) {
                $imageName = time() . '.' . $image->extension();
                $image->move(public_path('img'), $imageName);
                $blog->image_path = $imageName;
            }
        }

        $blog->title = $request->title;
        $blog->content = $request->content;

        if ($blog->save()) {
            return redirect()->route('blog_index')->with('success', 'L\'article de blog a été modifié avec succès.');
        } else {
            return back()->with('error', 'Une erreur s\'est produite lors de la modification de l\'article de blog.');
        }
    }



    public function destroy($id)
    {
        $blog = Blog::find($id);

        if ($blog) {
            $blog->delete();
            return redirect()->route('blog_index')->with('success', 'L\'article de blog a été supprimé avec succès.');
        }
    }
}
