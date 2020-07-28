<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use DB;
use App\files;
use App\contact;
use App\contactpersonal;
use App\setting;

class sitecontroller extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        return view('website.index')->with('post',Post::first())
        ->with('files',files::first())
        ->with('categorys',Post::where('category_id',1)->take(1)->get())
        ->with('categories',Post::where('category_id',1)->get())
        ->with('category',Category::all())
        ->with('category2',Post::where('category_id',2)->take(1)->get())
        ->with('category_act',Post::where('category_id',2)->get())
        ->with('category_res',Post::where('category_id',3)->take(1)->get())
        ->with('category_sm_res',Post::where('category_id',3)->get())
        ->with('category_sc',Post::where('category_id',4)->take(1)->get())
        ->with('category_sm_sc',Post::where('category_id',4)->get())
        ->with('setting',setting::first())
        ->with('contact',contactpersonal::first());



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view()
    {

        return view('contact.view_data')->with('contact',contact::all());

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[

            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required',

         ]);

        $contact=new contact();
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->subject=$request->subject;
        $contact->message=$request->message;

        $contact->save();
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
       $contact=contact::where('name','like','%'.request('search').'%')->get();
       return view('contacts.search',compact('contact'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        return view('contact.edit')->with('edit',contact::find($id));


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
        $contact =contact::find($id);

        $this->validate($request,[

            "name" => "required",
            "email" => "required",
            "subject" => "required",
            "message" => "required"
        ]);

        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->subject=$request->subject;
        $contact->message=$request->message;
        $contact->save();
        return redirect('/contact');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact=contact::find($id);
        $contact->destroy($id);
        $contact->save();
        return redirect()->back();
    }
}
