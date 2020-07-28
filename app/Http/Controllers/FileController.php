<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\files;
class FileController extends Controller
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
        return view('files.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        return view('files.view_data')->with('file',files::all());
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

            'title'=>'required',
            'name'=>'required',
            'file'=>'required'
           
        ]);

        $file=$request->file;
        $new_file=time().$file->getClientOriginalName();
        $file->move('files',$new_file);

        $file=new files();

        $file->title=$request->title;
        $file->name=$request->name;
        $file->file="files/".$new_file;

        $file->save();
        return redirect('download/index');
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
        return view('files.edit')->with('edit',files::find($id));
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

        $file=files::find($id);

        $this->validate($request,[

            'title'=>'required',
            'name'=>'required',
            'file'=>'required'
           
        ]);

        $files=$request->file;
        $new_file=time().$files->getClientOriginalName();
        $files->move('files',$new_file);


        $file->title=$request->title;
        $file->name=$request->name;
        $file->file="files/".$new_file;

        $file->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=files::find($id);
        $delete->destroy($id);
        $delete->save();
        return redirect()->back();
    }
}
