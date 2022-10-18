<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Str;
use Session;
class PostController extends Controller
{
    public function postRedirector($slug)
    {
      $page = Post::where('slug',$slug)->first();
      if($page)
      {
        return view('post',[
          'post' => $post,
          'pageTitle' => $post->title
        ]);
      }else{
        abort(404);
      }
    }

    public function index()
    {
      $posts = Post::latest()->paginate(10);
      return view('post.index',[
        'posts' => $posts
      ]);
    }

    public function edit(Post $post)
    {
      return view('post.edit',[
        'post' => $post,
      ]);
    }

    // show add new post page
    public function create()
    {
      return view('post.create');
    }

    // create new post
    public function store(Request $request)
    {
      try {
        if($request->type == "FILE")
        {
          $fileName = $request->file('file')->getClientOriginalName();
          $post = Post::create([
            'title' => $request->title,
            'content' => NULL,
            'category' => $request->category,
            'type' => $request->type,
            'slug' => Str::slug($request->title,'-'),
            'link' => $request->file('file')->storeAs('public/PostFiles',$fileName),
            'date' => \Carbon\Carbon::parse($request->date)->format('Y-m-d'),
          ]);
        }else if($request->type == "LINK"){
          $post = Post::create([
            'title' => $request->title,
            'content' => NULL,
            'category' => $request->category,
            'type' => $request->type,
            'slug' => Str::slug($request->title,'-'),
            'link' => $request->link,
            'date' => \Carbon\Carbon::parse($request->date)->format('Y-m-d'),
          ]);
        }else if($request->type == "POST"){
          $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'category' => $request->category,
            'type' => $request->type,
            'slug' => Str::slug($request->title,'-'),
            'link' => NULL,
            'date' => \Carbon\Carbon::parse($request->date)->format('Y-m-d'),
          ]);
        }
      } catch (\Exception $e) {
        dd($e);
      }


      Session::flash('success','Post created succesfully');
      return redirect()->route('post.edit',$post);
    }

    // update post
    public function update(Request $request,Post $post)
    {
      try {
        if($request->type == "FILE")
        {
          $post->update([
            'title' => $request->title,
            'content' => NULL,
            'category' => $request->category,
            'type' => $request->type,
            'slug' => Str::slug($request->title,'-'),
            'link' => $request->file('file')->store('public/PostFiles'),
            'date' => \Carbon\Carbon::parse($request->date)->format('Y-m-d'),
          ]);
        }else if($request->type == "LINK"){
          $post->update([
            'title' => $request->title,
            'content' => NULL,
            'category' => $request->category,
            'type' => $request->type,
            'slug' => Str::slug($request->title,'-'),
            'link' => $request->link,
            'date' => \Carbon\Carbon::parse($request->date)->format('Y-m-d'),
          ]);
        }else if($request->type == "POST"){
          $post->update([
            'title' => $request->title,
            'content' => $request->content,
            'category' => $request->category,
            'type' => $request->type,
            'slug' => Str::slug($request->title,'-'),
            'link' => NULL,
            'date' => \Carbon\Carbon::parse($request->date)->format('Y-m-d'),
          ]);
        }
      } catch (\Exception $e) {
        dd($e);
      }


      Session::flash('success','Post Updated');
      return redirect()->back();
    }

    public function destroy(Request $request)
    {
      Post::find($request->id)->delete();
      return response()->json(['success'=>'Post Deleted']);
    }

    // store uploaded files embeded in content
    public function fileStore(Request $request)
    {
      $path = $request->file('file')->store('public/post/images');
      $path = Storage::url($path);
      return json_encode(['location'=> $path]);
    }
}
