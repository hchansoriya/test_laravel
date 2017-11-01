<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['viewhotel']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['hotels'] = \App\Hotel::all();
        return view('home');
    }

    public function hotel()
    {
        $data['hotels'] = \App\Hotel::all();
        return view('hotel', $data);
    }

    public function addhotel(Request $post)
    {
        if(!empty($post->name)){
            $hotel = \App\Hotel::create($post->all());
            if($hotel){
                return redirect(url('hotels'));
            }else{
                return redirect()->back();
            }
        }else{
            return redirect()->back();
        }
    }

    public function viewhotel($id)
    {
        $data['hotel'] = \App\Hotel::find($id);
        return view('hotelview', $data);
    }

    public function addComment(Request $post)
    {
        if(!empty($post->comment)){
            $comment = \App\Comment::create($post->all());
            if($comment){
                return redirect(url('hotels/')."/".$post->hotel_id);
            }else{
                return redirect()->back();
            }
        }else{
            return redirect()->back();
        }
    }
}
