<?php

namespace App\Http\Controllers\Work;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Works\WorkRequest;
use App\Work;
use App\Image;

use Laracasts\Flash;

class WorksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Work::orderBy('id','Desc')->paginate(4);
        return view('dashboard.works.work.index')->with('works',$works);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.works.work.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorkRequest $request)
    {
       
        if($request->file('img')){
            
            $file = $request->file('img');
            $name = "work_".time(). "." .$file->getClientOriginalExtension();
            $path = public_path()."/images/works/";
            $file -> move($path,$name);
        }
        
        $work = new Work($request->all());
        $work->save();

        $image=new Image();
        $image->name=$name;
        $image->save();

        $work->images()->attach($image->id);
        flash('Articulo creado con exito')->success();
        return redirect()->route('works.index');
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
        $work = Work::find($id);
        return view('dashboard.works.work.edit')
            ->with('work',$work);
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
        $work = Work::find($id);
        $work->fill($request->all());
        $work->save();
        flash('Campo Modificado')->success();
        return redirect()->route('works.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $work = Work::find($id);
        //dd($id);
        $work->delete();

        flash('Elemento eliminado')->error();
        return redirect()->route('works.index');
    }
}
