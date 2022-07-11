<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{

    public function add_news()
    {
        return view('news');
    }

    public function save_news(Request $request)
    {
        $valid = $request->validate([
            'title' => 'required|min:4|max:500',
            'description' => 'required|min:15|max:500',
//            'content' => 'required|min:15|max:1000',
        ]);


//        $file =$request->file('image')->storePublicly('public/images');
//        $news = new News();
//        $news ->file =$request->file('image')->getClientOriginalName();
//        $news ->title =$request->input('title');
//        $news ->description = $request->input('description');
//        $news ->content = $request->input('content');
//        $news ->date = $request->input('date');
//        $news->save();

//        $path_file = 'public/images';
//        $image = $request->file('image');
//        $image_name = $image->getClientOriginalName();
//        $path = $request->file('image')->storeAs($path_file, $image_name);


        $news = new News();
        $path_file = 'public/images';
        $image_name = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs($path_file, $image_name);
        $news->file = $request->file('image')->getClientOriginalName();
        $news->title = $request->input('title');
        $news->description = $request->input('description');
        $news->content = $request->input('content');
        $news->date = $request->input('date');
        $news->save();


//        return view('/home');

//        $file = $request->input('file');
//        $title = $request->input('title');
//        $description = $request->input('description');
//        $content = $request->input('content');
//        $date = $request->input('date');
//        $data=array('file'=>$file,"title"=>$title,"description"=>$description,"content"=>$content, "date"=>$date);
//        DB::table('news')->insert($data);

        return redirect()->route('home');
    }

    public function article(Request $request)
    {
        $post = new News();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $post = DB::select('select * from news where id =:id', ['id' => $id]);
        }

        return view('article', ['post' => $post]);
    }


    public function update(Request $request){




    }




}
