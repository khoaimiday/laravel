<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\User;
use App\Product;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

class CommentController extends Controller
{
    public function Comment(Request $rq)
    {
        if(Session::has('logined')){
            $this->validate(
                $rq,
                [
                    'title'=>'bail|max:191',
                    'content'=>'bail|required|max:1000'
                ],
                [
                    'title.max'=>'Tiêu đề không quá 191 ký tự!',
                    'content.required'=>'Nội dung không được để trống!',
                    'content.max'=>'Nội dung không quá 1000 ký tự',
                ]
            );
            $idCust=Session::get('logined');
        //     user_cmt=User::where('id',$)
        // }
    }
}
