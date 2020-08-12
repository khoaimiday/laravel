<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Product;
use App\User;
use Auth;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    // public function checkLogin(){
    //     if (Auth::check()){
    //         $userId=Auth::user()->id;
    //         $userCmt = User::where('id',$userId)->first();
    //         return view('user.page.detail',compact('userCmt'));
    //     } else {
    //         return view('auth.login');
    //     }
    // }
    public function Comment(Request $rq, $proId)
    {
        $this->validate(
            $rq,
            [
                'title' => 'bail|max:191',
                'content' => 'bail|required|max:1000',
            ],
            [
                'title.max' => 'Tiêu đề không quá 191 ký tự!',
                'content.required' => 'Nội dung bình luận không được để trống!',
                'content.max' => 'Nội dung không quá 1000 ký tự',
            ]
        );
        $userId = Auth::user()->id;
        $user_cmt = User::where('id', $userId)->first();
        $userCmt_name = Auth::user()->name;
        $prod_cmt = Product::where('id', $proId)->first();
        $prodCmt_name = $prod_cmt->product_name;

        $newCmt = new Comment;
        $newCmt->title = $rq->title;
        $newCmt->content = $rq->content;
        $newCmt->user_id = $userId;
        $newCmt->status = 0;
        $newCmt->product_id = $proId;
        $newCmt->save();

        return back()->with('comment_success', 'Cảm ơn quý khách đã bình luận về sản phẩm này!');
    }

    //ADMIN
    function list() {
        $cmts = Comment::where('status', 0)->latest()->get();
        return view('admin.comment.list', compact('cmts'));
    }
    public function deleted()
    {
        $cmts = Comment::where('status', 1)->latest()->get();
        return view('admin.comment.deleted', compact('cmts'));
    }

    public function reply($id)
    {
        $cmt = Comment::where('id', $id)->first();
        return view('admin.comment.reply', compact('cmt'));
    }
    public function postReply(Request $rq)
    {
        $this->validate(
            $res,
            [
                'reply' => 'bail|max:500',
            ],
            [
                'reply.max' => 'Nội dung không được dài quá 500 kí tự!',
            ]
        );
        Comment::where('id', $rq->id)->update([
            'reply' => $rq->reply,
        ]);
        return back()->with('reply_success', 'Đã trả lời bình luận !');
    }
    public function tempDel($id)
    {
        Comment::where('id', $id)->update([
            'status' => 1,
        ]);
        return back()->with('tempDel_success', 'Đã xóa bình luận!');
    }
    public function undo($id)
    {
        Comment::where('id', $id)->update([
            'status' => 0,
        ]);
        return back()->with('undo_success', 'Đã hoàn tác bình luận!');
    }

    public function delete($id)
    {
        Comment::where('id', $id)->delete();
        return back()->with('delete_success', 'Đã xóa bình luận!');
    }
}
