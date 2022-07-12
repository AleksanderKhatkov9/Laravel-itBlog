<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\News;
use Illuminate\Http\Request;

class Comment extends Controller
{
    public function home()
    {

        $post = new News();
//        $post = News::all();
//        dd($post);

        return view('home', ['post'=>$post->all()]);
    }

//    public function about()
//    {
//        return view('about');
//    }

    public function review()
    {
        $reviews = new Contact();
        return view('review', ['reviews'=>$reviews->all()]);
    }

    public function review_check(Request $request)
    {
        $valid = $request->validate([
            'email' => 'required|min:4|max:100|email',
            'subject' => 'required|min:4|max:100',
            'message' => 'required|min:15|max:500',
        ]);

        $review = new Contact();
        $review ->email =$request->input('email');
        $review ->subject =$request->input('subject');
        $review ->message =$request->input('message');
        $review->save();

        return redirect()->route('review');
    }

    public function auth(){
        return view('auth');
    }

}
