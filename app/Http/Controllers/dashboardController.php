<?php

namespace App\Http\Controllers;

use App\Models\jobs;
use App\Models\news;
use App\Models\contacts;
use App\Models\projects;
use App\Models\dashboard;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
  public function getdata(){
$news_count=news::query()->count('id');
$jobs_count=jobs::query()->count('id');
$projects_count=projects::query()->count('id');
$contacts_count=contacts::query()->count('id');
// dd($news_count);

    return view('sections.dashboard',[
        'news_count'=>$news_count,
'jobs_count'=>$jobs_count,
        'projects_count'=>$projects_count,
'contacts_count'=>$contacts_count,
]);
  }
}
