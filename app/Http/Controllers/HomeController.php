<?php

namespace App\Http\Controllers;

use App\Daftar;
use Illuminate\support\Facades\DB;
use App\Home;
use App\Tags;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftar = Home::all();
        return view('home.dashboard', compact('daftar'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $daftar = DB::table('daftar')->where('slug', $slug)->first();
        
        return view('home.download', compact('daftar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home)
    {
        //
    }
    public function tags(){
        $tags = DB::table('tags')->get();
        
        return view('home.tags', compact('tags'));
       
    }

    public function tag($slug)
    {
        
        $tag = DB::table('tags')->where('slug', $slug)->first();
        $post = Tags::find($tag->id);
        $read = $post->daftar()->get();
        return view('home.tag', compact('read','post'));
        
        

        
        

    }
}
