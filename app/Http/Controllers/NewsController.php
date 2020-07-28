<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\News;
use App\Http\Requests\NewsRequest;

class NewsController extends Controller
{
    public function index()
    {
        $news=News::all();
        return view('admin.news.index')->with(['news'=>$news]);
    }
    public function create()
    {
        return view('admin.news.create');
    }
    public function postCreate(NewsRequest $request)
    {
        $news=$request->all();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension=$file->getClientOriginalExtension();
            if($extension!='jpg'&& $extension!='jpeg'&& $extension!='png')
            {
                return redirect ('admin.news.create')->with('Error','File .jpg .jpeg .png');
            }
            $imageName=$file->getClientOriginalName();
            $file->move('images/news',$imageName);
        }
        else
        {
            $imageName=null;
        }
        $new=new News($news);
        $new->image=$imageName;
        $new->save();
        return redirect()->action('NewsController@index');
    }

    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        //
    }
    public function update($id)
    {
        $new=News::find($id);
        return view('admin.news.update',['new'=>$new]);
    }

    public function postUpdate(NewsRequest $request, $id)
        {
            $news=$request->all();
            if($request->hasFile('image'))
            {
                $file = $request->file('image');
                $extension=$file->getClientOriginalExtension();
                if($extension!='jpg'&& $extension!='jpeg'&& $extension!='png')
                {
                    return redirect ('admin.news.update')->with('Error','File .jpg .jpeg .png');
                }
                $imageName=$file->getClientOriginalName();
                $file->move('images/news',$imageName);
            }
            else
            {
                $new=News::find($id);
                $imageName=$new->image;
            }
            $new=News::find($id);
            $new->title=$news['title'];
            $new->content=$news['content'];
            $new->topic=$news['topic'];
            $new->image=$imageName;
            $new->save();
            return redirect()->action('NewsController@index');
        }
    public function delete($id)
    {
        $new=News::find($id);
        $new->delete();
        return redirect()->action('NewsController@index');
    }
}
