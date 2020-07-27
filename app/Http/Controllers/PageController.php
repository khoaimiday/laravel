<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class PageController extends Controller
{
    public function getAdminIndex(){
        return view('admin.index');
    }
    public function newsIndex(){
        $news=News::all();
        return view('news.news')->with(['news'=>$news]);
    }
}
