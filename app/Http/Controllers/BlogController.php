<?php

namespace App\Http\Controllers;

use App\blog;
use App\Category;
use App\contactpersonal;
use App\files;
use App\Post;
use App\setting;
use App\Traits\GeneralMessage;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    use GeneralMessage;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {

        $category=Category::all();
        $blog=blog::first();
        $posts=Post::first();

     return $this->returnData(compact('category','blog','posts'),"done");


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



    public function view()
    {
        $post=blog::all();
//        return view('blog.view_data',compact('post'));
        return $this->returnData(compact('post'));

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
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
      $validate=  $this->validate($request,[

            'name'=>'required',
            'title'=>'required',
            'contents'=>'required'

        ]);

      if (!$validate){
          return $this->returnValidationError($validate);
      }else{
          return $this->returnSuccessMessage("the data stored success");
      }

        $blog=new blog();
        $blog->name=$request->name;
        $blog->title=$request->title;
        $blog->contents=$request->contents;

        $blog->save();
       return $this->returnData([],"blog added successful");

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

        $validate=\Validator::make($request->all(),[

            'name'=>'required',
            'title'=>'required',
            'contents'=>'required'

        ]);

        if ($validate->fails()){

            return $this->returnValidationError($validate);

        }else{

            return $this->returnSuccessMessage("updated success");

        }

        $blog->name=$request->name;
        $blog->title=$request->title;
        $blog->contents=$request->contents;

        $blog->save();
        return $this->returnData([],"the data was updated success");
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

        if ($delete){

            return $this->returnSuccessMessage("the data was deleted successful");
        }else{

            return $this->returnError(000000,'there is an error on the delete');

        }
    }
}
