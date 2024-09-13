<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\jobsController;
use App\Http\Controllers\newsController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\contactsController;
use App\Http\Controllers\projectsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\dashboardController;

Route::get('/createemail', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('/check', [LoginController::class, 'check'])->name('check');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/getdata', [dashboardController::class, 'getdata'])->name('getdata')->middleware('auth');

//news
Route::get('/news', [newsController::class, 'index'])->name('index');
Route::match(['get', 'post'],'/searchNews', [newsController::class, 'search'])->name('searchNews');
Route::match(['get', 'post'],'/store', [newsController::class, 'store'])->name('store');
Route::get('/create', [newsController::class, 'create']);
Route::get('/news/{new}', [newsController::class, 'openNew'])->name('new');
Route::get('/news/{new}/edit', [newsController::class, 'showEdit'])->name('showEdit');
Route::post('/new/{new}/update', [newsController::class, 'update'])->name('update');


//jobs
Route::match(['get', 'post'],'/searchJobs', [JobsController::class, 'search'])->name('searchJobs');

Route::get('/jobs', [jobsController::class, 'index'])->name('jobIndex');
Route::post('/jobStore', [jobsController::class, 'store'])->name('jobStore');
Route::get('/jobCreate', [jobsController::class, 'create'])->name('jobCreate');
Route::get('/jobs/{job}', [jobsController::class, 'openJob'])->name('job');
Route::get('/jobs/{job}/edit', [jobsController::class, 'jobedit'])->name('jobEdit');
Route::post('/jobs/{job}/update', [jobsController::class, 'update'])->name('jobUpdate');


//projects
Route::get('/projects', [projectsController::class, 'index'])->name('projectIndex');
Route::match(['get', 'post'],'/searchProjects', [projectsController::class, 'search'])->name('searchProjects');

Route::post('/projectStore', [projectsController::class, 'store'])->name('projectStore');
Route::get('/projectCreate', [projectsController::class, 'create'])->name('projectCreate');
Route::get('/projects/{project}', [projectsController::class, 'openProject'])->name('project');
Route::get('/projects/{project}/edit', [projectsController::class, 'ProjectEdit'])->name('projectEdit');
Route::post('/projects/{project}/update', [projectsController::class, 'update'])->name('projectUpdate');

//contacts
Route::get('/contacts', [contactsController::class, 'index'])->name('contactIndex');
Route::post('/contactStore', [contactsController::class, 'store'])->name('contactStore');
Route::get('/contactCreate', [contactsController::class, 'create'])->name('contactCreate');
Route::get('/contacts/{contact}', [contactsController::class, 'opencontact'])->name('contact');
Route::get('/contacts/{contact}/edit', [contactsController::class, 'contactEdit'])->name('contactEdit');
Route::post('/contacts/{contact}/update', [contactsController::class, 'update'])->name('contactUpdate');




//about us
Route::get('/aboutUs', [aboutController::class, 'index'])->name('aboutIndex');
Route::get('/about/{about}/edit', [aboutController::class, 'aboutEdit'])->name('aboutEdit');
Route::post('/about/{about}/update', [aboutController::class, 'update'])->name('aboutUpdate');
