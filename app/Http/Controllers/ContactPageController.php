<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$id=false)
    {
        var_dump($request->all());
        //var_dump($request->path());
        //var_dump($request->fullUrl());
       /* if($request->is('contactus/*')){
            echo 'zabl';
        }*/
        echo $id;
        if($request->isMethod('get')){
                $request->flash(); //session

             echo $request->method();
        }
        //var_dump($request->only('client_name'));
      //  var_dump($request->except('client_name'));
         /*if($request->has('client_name')){
             echo '<h1>'.$request->input('client_name').'</h1>';
         }*/
        return view("default.contactus",['title'=>'Contacts']);
 
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
        /*$contact = new Contact();
        $contact->client_name = $request->client_name;
        $contact->client_email = $request->client_email;
        $contact->client_subject = $request->client_subject;
        $contact->client_comment = $request->client_comment;
        $contact->save();*/
   return redirect('/contactus'); 
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
