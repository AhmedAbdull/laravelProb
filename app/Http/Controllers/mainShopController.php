<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ah_categorie;
use Illuminate\Support\Facades\DB;
class mainShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //echo ONLY 6 PRODUCTS
        $products = DB::table('ah_products')->leftJoin('ah_productstranslateinfo','ah_products.code','=','ah_productstranslateinfo.code')->where('ah_productstranslateinfo.lang','=','en')->orderBy('orderNum')->take(6)->get();
        $categories = DB::table('ah_categories')->orderBy('orderNum')->get();
        return view('mainShop.index',["products" => $products])->with('categories',$categories);
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
        $products = DB::table('ah_products')->leftJoin('ah_productstranslateinfo','ah_products.code','=','ah_productstranslateinfo.code')->where('ah_productstranslateinfo.lang','=','en')->orderBy('orderNum')->take(6)->get();
        $product =  DB::table('ah_products')->leftJoin('ah_productstranslateinfo','ah_products.code','=','ah_productstranslateinfo.code')->where('ah_productstranslateinfo.lang','=','en')->where('ah_products.code','=',$id)->first();
        ////One Query
        $imageQuery = DB::table('ah_productimages')->where('ah_productimages.code','=',$id)->selectRaw('min(ah_productimages.id) as number')->first();
        $leastNum = $imageQuery->number;
        $image = DB::table('ah_productimages')->where('ah_productimages.id','=',$leastNum)->first();
        $getPictures = DB::table('ah_productimages')->where('ah_productimages.code','=',$id)->get();
        ////One Query
            $categories = DB::table('ah_categories')->orderBy('orderNum')->get();
         return view('mainShop.product',["products" => $products])->with('product',$product)->with('image',$image)->with('getPictures',$getPictures)->with('categories',$categories);
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
