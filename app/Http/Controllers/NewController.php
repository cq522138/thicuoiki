<?php

namespace App\Http\Controllers;

use App\news;
use Illuminate\Http\Request;


class NewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = news::all();
        return view('list', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new = new news();
        $new->title=$request->input('title');
        $new->purport=$request->input('purport');
        if ($request->hasFile('feature')) {
            if($request->file('feature')->isValid()) {
                $feature = $request->feature;
                $clientName = $feature->getClientOriginalName();
                $path = $feature->move(public_path('upload/images'),$clientName);
                $new->feature= $clientName;
            }
        }
        $new->save();
        return redirect()->route('index');

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
        $new = news::findOrFail($id);
        return view('edit',compact('new'));
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
        $new = news::findOrFail($id);
        $new->title=$request->input('title');
        $new->purport=$request->input('purport');
        if ($request->hasFile('feature')) {
            if($request->file('feature')->isValid()) {
                $feature = $request->feature;
                $clientName = $feature->getClientOriginalName();
                $path = $feature->move(public_path('upload/images'),$clientName);
                $new->feature= $clientName;
            }
        }
        $new->save();
        return redirect()->route('index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $new = news::findOrFail($id);
        $new->delete();
        return redirect()->route('index');
    }

    public function view($id)
    {
        $new = news::findOrFail($id);
        return view('view', compact('new'));
    }

}
