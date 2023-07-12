<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Article extends Model

{
    // protected $fillable = ['image','name','price','stock','company'];

    public function getList() {
        // articlesテーブルからデータを取得
        $articles = DB::table('articles')->get();

        return $articles;
    }
    
    public function registArticle($data) {
        // 登録処理
        DB::table('articles')->insert([
            'image' => $data->image,
            'name' => $data->name,
            'price' => $data->price,
            'stock' => $data->stock,
            'company' => $data->company,
            'comment' => $data->comment
        ]);
    }
}