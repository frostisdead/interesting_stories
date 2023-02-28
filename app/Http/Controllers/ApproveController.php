<?php
namespace App\Http\Controllers;
use App\Models\Approve;

class ApproveController extends Controller
{
    public function checkposts () {
        $app_stories = Approve::all();
        return view ('posts.chposts', compact('app_stories'));
    }
    public function checkpost ($slug) {
        $app_story = Approve::where('slug', '=', $slug)->get();
        return view ('posts.check', compact('app_story'));
    }
    public function custom_approve ($slug) {
        Approve::query()->where('slug','=', $slug)->each(function ($oldPost) {
         $newPost = $oldPost->replicate();
         $newPost->setTable('stories');
         $newPost->save();
         $oldPost->delete();
        });
        return redirect('check-all-posts');
    }
}