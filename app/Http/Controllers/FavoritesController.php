<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * お気に入りに追加するアクション
     * 
     * @param   $id お気に入りに追加する投稿id
     * @return  \Illuminate\Http\Response
     */
    public function store($id)
    {
        // 認証済みユーザ（閲覧者）が、idの投稿をお気に入りに追加する
        \Auth::user()->favorite($id);
        // 前のURLへリダイレクトする
        return back();
    }
    
    /**
     * お気に入りから外すアクション
     * 
     * @param   $id お気に入りから外す投稿id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 認証済みユーザ（閲覧者）が、idの投稿をお気に入りから外す
        \Auth::user()->unfavorite($id);
        // 前のURLへリダイレクトする
        return back();
    }
}
