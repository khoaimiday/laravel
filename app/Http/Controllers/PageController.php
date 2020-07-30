<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class PageController extends Controller
{
    public function getAdminIndex()
    {
        return view('admin.index');
    }
    public function newsIndex()
    {   
        $new1s=News::where('topic','Bệnh thường gặp')->latest()->get();
        // return view('user.news.news')->with(['new1s'=>$new1s]);

        $new2s=News::where('topic','Chăm sóc sức khoẻ')->latest()->get();
        return view('user.news.news')->with(['new1s'=>$new1s,'new2s'=>$new2s]);
    }
}
