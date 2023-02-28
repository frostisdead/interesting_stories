<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;
use Illuminate\Support\Str;
use App\Models\Approve;

class StoryController extends Controller
{
    public function home()
    {
        return view('welcome');
    }
    public function show()
    {
        $stories = Story::all();
        return view('posts.showposts', compact('stories'));
    }
    public function showpost($slug)
    {
        $story = Story::where('slug', '=', $slug)->get();
        return view('posts.showpost', ['story' => $story]);
    }
    
    
    public function create()
    {
        return view('posts.crpost');
    }


    public function custom_create(Request $request)
    {
        
        $data = $request->all();
        $app_stor = new Approve();
        $app_stor->title = $data['title'];
        $app_stor->story = $data['story'];
        $app_stor->author_name = auth()->user()->name;
        $app_stor->slug = Str::slug($app_stor->title);
        $app_stor->tags = implode(', ', $data['tags']);
        $app_stor->save(); //returns true
        
        if (!auth()->check()) {
            abort(403, 'Only authenticated users can create new posts.');
        }
        return back()->with('success', 'Story created successfully');
    }
    
     public function delete ($slug) {
        Story::where('slug', '=', $slug)->delete();
        return Redirect('dashboard');
    }
}
