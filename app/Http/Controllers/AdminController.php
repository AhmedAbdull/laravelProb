<?php

namespace App\Http\Controllers;
//use App\Http\Controllers\Controller;
use App\Article;
use App\Allnew;
use App\Secretword;
 use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request)
    {

           function check($txt){
     // $theseWords = array('kiss','smoke','gay');
             $theseWords = DB::table('secretwords')->select('word')->get();
             $theseWordsWeTake = json_decode(json_encode($theseWords),true) ;
      $newString = $txt;
      foreach ($theseWordsWeTake as $i => $value) {
          $newString = str_replace($theseWordsWeTake[$i]['word'],'<del>'.$theseWordsWeTake[$i]['word'].'</del>',$newString);
      }
      return $newString;
    }
  
        print_r($request->all());
        $Articles = Article::all();
         $article = new Article();
         $new = new Allnew();
         $secretWord = new Secretword();

         $categories = $request->code;
         $news = $request->code1;
         $words = $request->word;
$theseWordsss = DB::table('secretwords')->select('word')->get();
$dd=(json_decode(json_encode($theseWordsss),true));

foreach ($dd as $key=>$value) {
    echo $dd[$key]['word'];
}

          if($news!=""){
                $ahmed = check($request->text1);    

                $new->code = $request->code1;
                $new->category = $request->category;
                $new->header = $request->header1;
                $new->text = $ahmed;
                $new->hot = $request->hot;
                $new->save();
          }
         if($categories!=""){
                $ahmed1=check($request->text);

                $article->code = $request->code;
                $article->header = $request->header;
                $article->text = $ahmed1;
                $article->img = $request->img;
                $article->save();
            }
            if($words!=""){
                $secretWord->word = $request->word;
                $secretWord->save();
            }
    ////////////////////
   
    ///////////////
        return view('admin', ["news" => $Articles]);
        $name = $request->input('fname');
        echo $name;

          
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
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
