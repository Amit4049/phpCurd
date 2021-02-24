<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class pracAPI extends Controller
{
    //
    function getData(){
        return ["name"=>"Amit Roy","email"=>"amitroysunjoy@gmail.com","address"=>"Dhaka"];
    }

    function list(){
        return Post::all(); //show all data from database
    }

    // practise POST method

    function add(Request $req){
        $post= new Post;
        $post->title=$req->title;
        $post->body=$req->body;
        $result = $post->save();
        if($result)
        {
            return ["Result"=>"Data has been saved"];
        }
        else
        {
            return ["Result"=>"Something Problem !!"];
        }
    }

    // Update data in database
    function updateData(Request $req){
        $post= Post::find($req->id);
        $post->title=$req->title;
        $post->body=$req->body;
        $result = $post->save();
        if($result)
        {
            return ["Result"=>"Your data is Updated!!"]; 
        }
        else
        {
            return ["Result"=>"Something Problem !!"];
        }
        
    }

    function delete($id){
        $post= Post::find($id);
        $result = $post->delete();
        if($result)
        {
            return ["Result"=>"Your data is deleted !!"]; 
        }
        else
        {
            return ["Result"=>"Something Problem !!"];
        }        
    }

    function search($title){
        return Post::where("title", 'like', '%'.$title.'%')->get();
    }

    function searchData(Request $request){
        return Post::where("title", 'like', '%'.$request->title.'%')
                            ->where("body", 'like', '%'.$request->body.'%')
                        ->get();
    }
}
