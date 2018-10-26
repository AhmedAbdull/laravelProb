<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Allnew;
 use Illuminate\Support\Facades\DB;
class MainnewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index($id=null)
    {
         $articles = Article::all();
         $allnews = Allnew::all();
         $NewsQuery = DB::table('articles')->leftJoin('allnews','articles.code','=','allnews.category')->get();
           $HotNewsQuery = DB::table('articles')->leftJoin('allnews','articles.code','=','allnews.category')->where('allnews.hot','>','0')->get();
        if($id==null){
       
        return view("news",["articles" => $allnews])->with('news',$NewsQuery)->with('hotnews',$HotNewsQuery);
    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(auth()->check()) 
        {
            
              $articles = Article::all();
           
           $HotNewsQuery = DB::table('articles')->leftJoin('allnews','articles.code','=','allnews.category')->where('allnews.hot','>','0')->get();
            if(is_numeric($id)){
        $counter = Allnew::find($id);
              $counter->increment('counter');

        /*$ayni_kategori_haberleri = Allnew::where('category', $news->category)->where('id', '<>', $id)->first();
        echo $news->header;
        echo $ayni_kategori_haberleri->header;*/
        //echo $ayni_kategori_haberleri->header;
        //return $ayni_kategori_haberleri;
            
         $NewsQuery = DB::table('articles')->leftJoin('allnews','articles.code','=','allnews.category')->get();
        $SOME = DB::table('allnews')->where('id','=',$id)->first();
        echo $dadaja = $SOME->category;
         $allnews = DB::table('allnews')->where('allnews.category','=',$dadaja)->get();
        
        return view("allnews", ["articles" => $articles],["allnews" => $allnews])->with('news',$NewsQuery)->with('hotnews',$HotNewsQuery)->with('counter',$counter);
    }else{
        $NewsQuery = DB::table('articles')->leftJoin('allnews','articles.code','=','allnews.category')->get();
         $allnews = DB::table('articles')->leftJoin('allnews','articles.code','=','allnews.category')->where('allnews.category','=',$id)->get();
        return view("allnews", ["articles" => $articles],["allnews" => $allnews])->with('news',$NewsQuery)->with('hotnews',$HotNewsQuery);
    }
        //return $article;
       /* $HotNewsQuery = DB::table('articles')->leftJoin('allnews','articles.code','=','allnews.category')->where('allnews.hot','>','0')->get();
        
         return view("allnews",["articles" => $articles])->with('news',$NewsQuery)->with('hotnews',$HotNewsQuery);*/
        }else{
               return redirect()->route('login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
