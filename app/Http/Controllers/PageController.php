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
        $news=News::where('topic','Bệnh thường gặp')->latest()->get();
        $newss=News::where('topic','!==','Bệnh thường gặp')->latest()->get();
        return view('user.news.news')->with(['news'=>$news],['newss'=>$newss]);
    }
}
