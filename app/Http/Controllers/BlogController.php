<?php

namespace App\Http\Controllers;

use App\blog;
use App\Category;
use App\contactpersonal;
use App\files;
use App\Post;
use App\setting;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        return view('blog.index')->with('category',Category::all())
            ->with('blog',blog::first())
            ->with('posts',Post::first());

    }

    public function showPost($slug)
    {

        $post = Post::where('slug',$slug)->first();
        return view("website.index")->with('post',$post)
//            ->with('title',$post->title)
            ->with("categories",Category::all())
            ->with("setting",setting::first())
            ->with("files",files::first())
            ->with('category2',Post::where('category_id',2)->take(1)->get())
            ->with('category_act',Post::where('category_id',2)->get())
            ->with('category_res',Post::where('category_id',3)->take(1)->get())
            ->with('category_sc',Post::where('category_id',4)->take(1)->get())
            ->with('contact',contactpersonal::first())
            ->with("categorys",Post::all())
            ->with('category_sm_res',Post::where('category_id',3)->get())
            ->with('category_sm_sc',Post::where('category_id',4)->get());


    }

    public function create()
    {

        return view('blog.create');

    }

    public function view()
    {

        return view('blog.view_data')->with('post',blog::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
//    public function category($id)
//    {
//        $category=Category::find($id);
//
//        return view('blog.index')->with('categories',$category)
//            ->with('category',Category::all());
//
//
//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validate($request,[

            'name'=>'required',
            'title'=>'required',
            'contents'=>'required'

        ]);

        $blog=new blog();
        $blog->name=$request->name;
        $blog->title=$request->title;
        $blog->contents=$request->contents;

        $blog->save();
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        return view('blog.edit')->with('edit',blog::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {

        $blog=blog::find($id);

        $this->validate($request,[

            'name'=>'required',
            'title'=>'required',
            'contents'=>'required'

        ]);

        $blog->name=$request->name;
        $blog->title=$request->title;
        $blog->contents=$request->contents;

        $blog->save();
        return redirect('/blog/view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=blog::find($id);
        $delete->destroy($id);
        return redirect()->back();
    }
}
