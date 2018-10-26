<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $products = DB::table('ah_products')->leftJoin('ah_categories','ah_products.category','=','ah_categories.code')->leftJoin('ah_productstranslateinfo','ah_products.code','=','ah_productstranslateinfo.code')->where('ah_productstranslateinfo.lang','=','en')->where('ah_products.code','=',$id)->orderBy('ah_products.orderNum')->get();
         $categories = DB::table('ah_categories')->orderBy('orderNum')->get();
        return view('mainShop.category')->with('products',$products)->with('categories',$categories);
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
        $products = DB::table('ah_products')->leftJoin('ah_categories','ah_products.category','=','ah_categories.code')->leftJoin('ah_productstranslateinfo','ah_products.code','=','ah_productstranslateinfo.code')->where('ah_productstranslateinfo.lang','=','en')->where('ah_products.category','=',$id)->orderBy('ah_products.orderNum')->get();
         $categories = DB::table('ah_categories')->orderBy('orderNum')->get();
        return view('mainShop.category')->with('products',$products)->with('categories',$categories);
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
