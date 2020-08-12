<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\News;
use Illuminate\Database\Query\Builder;
use Symfony\Component\HttpFoundation\Cookie;

class NewsController extends Controller
{   
    public function newsIndex()
    {
        $news=News::latest()->paginate(5);
        $ns=News::where('topic','Tin tức')->latest()->get();
        return view('user.news.news')->with(['news'=>$news,'ns'=>$ns]);
    }
    public function index()
    {
        $news=News::latest()->get();
        return view('admin.news.index')->with(['news'=>$news]);
    }

    public function newsDetail($id)
    {
        $n=News::find($id);
        return view('user.news.newsDetail')->with(['n'=>$n]);
    } 
    public function create()
    {
        return view('admin.news.create');
    }
    public function postCreate(Request $request)
    {
        $news=$request->all();
       if($this->validate(
            $request,
            [
                'id'=>'required|unique:News',
                'title'=>'required|string|min:3',
                'content'=>'required',
                'image'=>'file|image|mimes:jpeg,png,jpg|max:10240',
            ],
            [
                'id.required'=>'Id không được để trống!',
                'id.unique'=>'Id không được trùng!',
                'title.required'=>'Tiêu đề không được để trống!',
                'content.required'=>'Nội dung không được để trống!',
                'image.image'=>'Chỉ có thể upload hình ảnh!',
                'image.mimes'=>'Tập tin chỉ chứa đuôi jpg, jpeg, png!',
                'image.max'=>'Kích thước không quá 10Mb!'
            ]
            ))
            {
                if($request->hasFile('image')){
                     $file = $request->file('image');
                    $extension=$file->getClientOriginalExtension();
                    if($extension!='jpg'&& $extension!='jpeg'&& $extension!='png'){
                        return redirect ('admin.news.create')->with('Error','File .jpg .jpeg .png');
                    }
                    $imageName=$file->getClientOriginalName();
                    $file->move('images/news',$imageName);
                } else {
                     $imageName=null;
                }
            $new=new News($news);
            $new->image=$imageName;
            $new->save();
            return redirect()->action('NewsController@index')->with('flash_message','Tạo tin mới thành công!');
                } else {
            return redirect()->action('NewsController@create');
             }
    }

    public function store(Request $request)
    {
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

    public function postUpdate(Request $request, $id)
        {
            $news=$request->all();
            if($this->validate(
                $request,
                [
                    'title'=>'required|string|min:3',
                    'content'=>'required',
                    'image'=>'file|image|mimes:jpeg,png,jpg|max:10240',
                ],
                [
                    'title.required'=>'Tiêu đề không được để trống!',
                    'content.required'=>'Nội dung không được để trống!',
                    'image.image'=>'Chỉ có thể upload hình ảnh!',
                    'image.mimes'=>'Tập tin chỉ chứa đuôi jpg, jpeg, png!',
                    'image.max'=>'Kích thước không quá 10Mb!'
                ]
                ))
                {
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
            return redirect()->action('NewsController@index')->with('update_success','Cập nhật thành công!');
        } else { 
            return redirect()->action('NewsController@update');
        }
    }   

    public function delete($id)
    {
        $new=News::find($id);
        $new->delete();
        return redirect()->action('NewsController@index')->with('delete_success','Xoá thành công!');
    }
}