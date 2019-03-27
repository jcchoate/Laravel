<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indexvideos = Video::all();

        if(request()->has('groupBy')) {
            return $indexvideos->groupBy( request('groupBy') );
        }

        return $indexvideos;
    }

    // For search bar
    public function search()
    {
        $video = Video::all();

        $search = request('search');

        $videos = Video::where('categories','like','%'.$search.'%')
        ->orderBy('categories')
        ->paginate(20);

        return $videos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('videos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes= request()->validate([
            'name'=>'required|min:3|max:64',
            'description'=>'required|min:3|max:1024',
            'categories'=>'required|min:3|max:50'
        ]);
        Video::create($attributes);
        return redirect('/videos');
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
    public function edit(Video $video)
    {
        return view('videos.edit', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        $video->name = request()->validate(['name'=>'required|min:3|max:64']);
        $video->description = request()->validate(['description'=>'required|min:3|max:1024']);
        $video->category = request()->validate(['categories'=>'required|min:3|max:50']);
        $video->save();

        return redirect('/videos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        $video->delete();
        return redirect('/videos');
    }
}
