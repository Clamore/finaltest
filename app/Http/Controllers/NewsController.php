<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\News;

class NewsController extends Controller
{
    public function filter($type)
    {
        $news = News::where('type',$type)->orderBy('id','desc')->get();
        return view('new.index',compact('news'));
    }

    public function index()
    {
        $dd = date("Y-m-d");
        //return $date;
        $news = News::where('dates','<=',$dd)->orderBy('id','desc')->get();
        //return $news;
        return view('new.index',compact('news'));
    }

    public function create()
    {
         return view('new.create');
    }

    public function store()
    {
        $input = Request::all();
        News::create($input);
        return redirect('new');
    }

    public function edit($id)
    {
        //
    }

    public function show($id)
    {
        $new = News::find($id);
        return view('new.show',compact('new'));
    }

    public function update($id)
    {
        //
    }

}
