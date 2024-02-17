<?php

namespace App\Http\Controllers;

use App\Models\HomeModel;
use App\Models\AboutModel;
use Illuminate\Http\Request;
use App\Models\CompetenceModel;
use App\Models\EducationModel;
use App\Models\ExperienceModel;
use App\Models\Portfolio;
use App\Models\Blog;
class HomeController extends Controller
{
    public function index(){
        $info['getrecord']= HomeModel::all();
        $data['meta_title']=  'Home | CV. Hamid A.TCHEMOKO ';
        $data['className']='home';
      return view('index', $data, $info);
    }

    public function about(){
        $abouts = AboutModel::all();
        $data['meta_title'] = 'A propos | CV. Hamid A.TCHEMOKO';
        $data['className'] = 'about';
        $data['abouts'] = $abouts;
        $competences = CompetenceModel::all();
        $educations = EducationModel ::all();
        $experiences = ExperienceModel::all();
    
        return view('about', $data,  compact('competences', 'educations', 'experiences'));
    }
    

    public function portfolio(){
        $portfolios = Portfolio::all();
        $data['meta_title']=  'Portfolio | CV. Hamid A.TCHEMOKO ';
        $data['className']='portfolio';
        return view('portfolio', $data, compact('portfolios')); 
    }

    public function contact(){
        $abouts = AboutModel::all();
        $data['meta_title']=  'Contact | CV. Hamid A.TCHEMOKO ';
        $data['className']='contact';
        return view('contact', $data, compact('abouts'));
    }

    public function blog(){
        $blogs = Blog::all();
        $data['meta_title']=  'Blog | CV. Hamid A.TCHEMOKO ';
        $data['className']='blog';
    return view('blog', $data, compact('blogs') );
}

public function blog_post($id, ){
    $blog = Blog::findOrFail($id);
    $data['meta_title'] = 'Blog | CV. Hamid A.TCHEMOKO ';
    $data['className'] = 'blog_post';
    $data['blog'] = $blog; // Ajoutez le blog à $data
    return view('blog_post', $data);
}


}
