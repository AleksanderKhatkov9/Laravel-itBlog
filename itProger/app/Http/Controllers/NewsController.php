<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    /**
     * Отображает список ресурсов
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('news');
    }


    /**
     * Выводит форму для создания нового ресурса
     *
     * @return \Illuminate\Http\Response
     */

    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required|min:4|max:500',
            'description' => 'required|min:15|max:500',
            'content' => 'required|min:15|max:1000',
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


    /**
     * Обновляет указанный ресурс в хранилище
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required|min:4|max:500',
            'description' => 'required|min:15|max:500',
            'content' => 'required|min:15|max:1000',
        ]);

        $post = new News();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            News::whereId($id)->update($validatedData);
        }


        return redirect()->route('home');
    }


}
