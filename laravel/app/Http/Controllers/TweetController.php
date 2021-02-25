<?php

namespace App\Http\Controllers;
use App\Tweet; 
use App\Http\Requests\TweetRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tweets = Tweet::all()->sortByDesc('created_at');
        return view('tweets.index')->with(['tweets' => $tweets]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tweets.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Tweet $tweet)
    {
        if ($file = $request->zaico_image) {
            $fileName = time() . $file->getClientOriginalName();
            $target_path = public_path('images/');
            $file->move($target_path, $fileName);
        } else {
            $fileName = "";
        }
        $tweet->fill($request->all()); 
        $tweet->zaico_number = $request->zaico_number;
        $tweet->zaico_name = $request->zaico_name;
        $tweet->zaico_image = $fileName;
        $tweet->zaico_count = $request->zaico_count;
        $tweet->content = $request->content;
        $tweet->category = $request->category;
        $tweet->zaico_storage = $request->zaico_storage;
        $tweet->user_id = $request->user()->id;
        $tweet->save();
        return redirect()->route('tweets.index');
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
