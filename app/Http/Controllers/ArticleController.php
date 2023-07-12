<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\DB;


class ArticleController extends Controller
{
    public function showList() {
        // インスタンス生成
        $model = new Article();
        $articles = $model->getList();

        return view('list', ['articles' => $articles]);
    }
    //登録画面
    public function showRegistForm() {
        return view('regist');
    }
    //登録
    public function registSubmit(ArticleRequest $request) {

        // トランザクション開始
        DB::beginTransaction();
    
        try {
            // 登録処理呼び出し
            $model = new Article();
            $model->registArticle($request);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return back();
        }
    
        // 処理が完了したらregistにリダイレクト
        return redirect(route('list'));
    }

    //削除
    public function exeDelete($id){
        $article = Article::find($id);
        $article->delete($id);
        return redirect()->route('list');
    }

    //詳細
    public function showDetail($id){
        $article = Article::find($id);
        return view('show', compact('article'));
    }

    //編集
    public function showEdit($id){
        $article = Article::find($id);
        return view('edit', ['article' => $article]);
    }

    //更新
    public function exeUpdate(Request $request)  
    {  
        $article = Article::find($id);  
        $article = $request->validate([ 
            "image" => $request->image,  
            "name" => $request->name,
            "price" => $request->price,
            "stock" => $request->stock,
            "company" => $request->company,
            "comment" => $request->comment,
        ]); 
        $id->update('$date');
    
        return redirect("list");  
    }
    
    //検索
//     public function showSearch(Request $request)
//     {
//         $article = Article::paginate(20);
//         $search = $request->input('keyword');
//         if ($search) {
//         $spaceConversion = mb_convert_kana($search, 's');
//     }
//     return view('list')
//     ->with([
//         'search' => $search,
//     ]);

// }

}