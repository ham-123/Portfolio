<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\CompetenceController;
use App\Http\Controllers\Backend\EducationController;
use App\Http\Controllers\Backend\ExperienceController;
use App\Http\Controllers\Backend\PortfolioController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('about', [HomeController::class, 'about'])->name('about');

Route::get('portfolio', [HomeController::class, 'portfolio'])->name('portfolio');

Route::get('contact', [HomeController::class, 'contact'])->name('contact');
    Route::post('/contact/store', [MessageController::class, 'store'])->name('message_send');

Route::get('blog', [HomeController::class, 'blog'])->name('blog');
 
Route::get('blog_post/{id}', [HomeController::class, 'blog_post'])->name('blog_post');



//Admin 
Route::group(['middleware' => 'admin'], function()
{
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::get('admin/home', [DashboardController::class, 'dashboard_home'])->name('dashboard_home');

        Route::post('admin/home/post', [DashboardController::class, 'admin_home_post'])->name('admin_home_post');
 
    Route::get('admin/about', [AboutController::class, 'dashboard_about'])->name('dashboard_about');

        Route::get('admin/personnel', [AboutController::class, 'index'])->name('personnel_about');
        Route::post('admin/personnel/post', [AboutController::class, 'personnel_post'])->name('personnel_post');

        Route::get('/competences', [CompetenceController::class, 'index'])->name('competences_index');
        Route::get('/competences/create', [CompetenceController::class, 'create'])->name('competences_create');
        Route::post('/competences/store', [CompetenceController::class, 'store'])->name('competences_store');
        Route::get('/competences/{competence}/edit', [CompetenceController::class, 'edit'])->name('competences_edit');
        Route::put('/competences/{competence}', [CompetenceController::class, 'update'])->name('competences_update');
        Route::delete('/competences/{competence}', [CompetenceController::class, 'destroy'])->name('competences_destroy');

        Route::get('/education', [EducationController::class, 'index'])->name('education_index');
        Route::get('/education/create', [EducationController::class, 'create'])->name('education_create');
        Route::post('/education/store', [EducationController::class, 'store'])->name('education_store');
        Route::get('/education/{education}/edit', [EducationController::class,  'edit'])->name('education_edit');
        Route::put('/education/{education}', [EducationController::class, 'update'])->name('education_update');
        Route::delete('/education/{education}/destroy',[EducationController::class,'destroy'])->name('education_destroy');

        
        Route::get('/experiences', [ExperienceController::class, 'index'])->name('experiences_index');
        Route::get('/experiences/create', [ExperienceController::class, 'create'])->name('experiences_create');
        Route::post('/experiences/store', [ExperienceController::class, 'store'])->name('experiences_store');
        Route::get('/experiences/{experience}/edit', [ExperienceController::class, 'edit'])->name('experiences_edit');
        Route::put('/experiences/{experience}', [ExperienceController::class, 'update'])->name('experiences_update');
        Route::delete('/experiences/{experience}', [ExperienceController::class, 'destroy'])->name('experiences_destroy');



    Route::get('admin/portfolio', [DashboardController::class, 'dashboard_portfolio'])->name('dashboard_portfolio');
    
    Route::get('admin/portfolio', [PortfolioController::class, 'index'])->name('portfolio_index');
    Route::get('admin/portfolio/create', [PortfolioController::class, 'create'])->name('portfolio_create');
    Route::post('admin/portfolio', [PortfolioController::class, 'store'])->name('portfolio_store');
    Route::get('admin/portfolio/{id}', [PortfolioController::class, 'show'])->name('portfolio_show');
    Route::get('admin/portfolio/{id}/edit', [PortfolioController::class, 'edit'])->name('portfolio_edit');
    Route::put('admin/portfolio/{id}', [PortfolioController::class, 'update'])->name('portfolio_update');
    Route::delete('admin/portfolio/{id}', [PortfolioController::class, 'destroy'])->name('portfolio_destroy');
    

    Route::get('admin/contact', [DashboardController::class, 'dashboard_contact'])->name('dashboard_contact');

    Route::get('admin/blog', [DashboardController::class, 'dashboard_blog'])->name('dashboard_blog');

        Route::get('admin/blog', [BlogController::class, 'index'])->name('blog_index');
        Route::get('admin/blog/create', [BlogController::class, 'create'])->name('blog_create');
        Route::post('admin/blog', [BlogController::class, 'store'])->name('blog_store');
        Route::get('admin/blog/{id}', [BlogController::class, 'show'])->name('blog_show');
        Route::get('admin/blog/{id}/edit', [BlogController::class, 'edit'])->name('blog_edit');
        Route::put('admin/blog/{id}', [BlogController::class, 'update'])->name('blog_update');
        Route::delete('admin/blog/{id}', [BlogController::class, 'destroy'])->name('blog_destroy');
    

    
});




Route::get('login', [AuthController::class, 'login'])->name('login');

Route::post('login_admin', [AuthController::class, 'login_admin'])->name('login_admin');

Route::get('forgot', [AuthController::class, 'forgot'])->name('forgot');

Route::post('forgot_admin', [AuthController::class, 'forgot_admin'])->name('forgot_admin');


Route::get('logout', [AuthController::class, 'logout'])->name('logout');