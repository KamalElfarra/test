<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index')->with('category',Category::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {

        return view('posts.view_data')->with('posts',Post::all());

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
            'title'=>'required',
            'small_text'=>'required',
            'category_id'=>'required',

        ]);

        $post=new Post();

        $post->name=$request->name;
        $post->title=$request->title;
        $post->small_text=$request->small_text;
        $post->slug=str_slug($request->title);
        $post->category_id=$request->category_id;

        $post->save();
        return redirect('post/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        $posts=Post::where('name','like','%'.request("search").'%')->get();
        return view('searches.search',compact('posts'))
        ->with('category',Category::all());

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        return view('posts.edit')->with('edit',Post::find($id))
        ->with('category',Category::all());

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
        $post =Post::find($id);

        $this->validate($request,[

            "name" => "required",
            "title" => "required",
            "small_text" => "required",
        ]);

        $post->name=$request->name;
        $post->title=$request->title;
        $post->small_text=$request->small_text;
        $post->save();
        return redirect('post/view_data');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::find($id);
        $post->destroy($id);
        return redirect()->back();
    }
}
