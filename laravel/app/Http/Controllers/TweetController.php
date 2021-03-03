<?php

namespace App\Http\Controllers;
use App\Tweet; 
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\TweetRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class TweetController extends Controller
{

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
        $tweets = Tweet::where('user_id', Auth::id())->get();
        $items = Tweet::where('status', 0)->get();
        $user_id = Tweet::where('user_id','<>', Auth::id())->get();
        return view('tweets.index')->with(['items' => $items, 'tweets' => $tweets, 'user_id' => $user_id]);
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
    public function show(Tweet $tweet)
    {
        return view('tweets.show', ['tweet' => $tweet]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tweet $tweet)
    {
        return view('tweets.edit', ['tweet' => $tweet]);    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tweet $tweet)
    {
        Storage::delete(public_path('images/') . $tweet->zaico_image);
        if ($file = $request->zaico_image) {
            $fileName = time() . $file->getClientOriginalName();
            print_r($fileName);
            $target_path = public_path('images/');
            $file->move($target_path, $fileName);
        } else {
            $fileName = "";
        }
        $tweet->fill($request->all())->save();
        return redirect()->route('tweets.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tweet $tweet)
    {
        $tweet->delete();
        return redirect()->route('tweets.index');
    }
}
