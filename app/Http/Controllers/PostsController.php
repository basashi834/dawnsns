<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PostsController extends Controller
{

    //認可メソッド
    //public function __construct()
    //{
    //    $this->middleware('auth');
    //}

    //トップ画面
    public function index(){
        $posts = DB::table('posts')->get();
        return view('posts.index',['posts'=>$posts]);
    }

    //プロフィール
    public function myProfile(){
        //
    }

    //相手のプロフィール
    public function userProfile(){
        //
    }

    //ユーザ検索
    public function search(){
        //
    }

    //検索結果
    public function result(){
        //
    }

    //フォローリスト
    public function followList(){
        //
    }

    //フォロワーリスト
    public function followerList(){
        //
    }



}
