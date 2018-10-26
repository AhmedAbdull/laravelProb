<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ShopRequestForm;
use App\Contact;
use App\Shop;
 use Illuminate\Support\Facades\DB;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id=null)
    {

        $contacts = Contact::all();
        $shops = Shop::all();
        
        if($id!=null){
            $ad=DB::table('shops')->leftJoin('users','shops.id','=','users.id')->where('users.product_name','=','Ahmed')->get();
        $some = DB::table('shops')->where('id', $id)->first();
        $some1= $some;
    
        return view("Contact.index", ["shops" => $shops],["contacts" => $contacts])->with('words',$ad);
    }else{
        return view("Contact.index", ["shops" => $shops],["contacts" => $contacts]);
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
        $contact = new Contact();
        $contact->client_name = $request->client_name;
        $contact->client_email = $request->client_email;
        $contact->client_subject = $request->client_subject;
        $contact->client_comment = $request->client_comment;
        $contact->save();

        return redirect()->back();
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
