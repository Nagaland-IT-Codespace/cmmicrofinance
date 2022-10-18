<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function notificationRedirector($slug)
    {
      $page = Post::where('slug',$slug)->first();
      if($page)
      {
        return view('pageTemplate',[
          'page' => $page,
          'pageTitle' => $page->title,
          'updated_on' => $page->updated_at,
        ]);
      }else{
        if($slug == 'comingSoon')
        {
          abort(404,'Page Under Construction. Please check back later.');
        }else{
          abort(404,'Page not found');
        }

      }
    }

    public function news()
    {
      $news = Post::where('category','')->get();
      return view('pages.news',[
        'news' => $news,
      ]);
    }

    public function fileStore(Request $request)
    {
      $path = $request->file('file')->store('public/images');
      $path = Storage::url($path);
      return json_encode(['location'=> $path]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::all();
        return view('notification.index', compact('notifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        try {
            Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'slug' => Str::of($request->title)->slug('-'),
            'category' => $request->category,
            'featured' => $request->featured,
            'icon' => $request->icon,
          ]);
        } catch (\Exception $e) {
          dd($e);
        }

        Session::flash('success','Post created succesfully');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $content = preg_replace( "/\n|\r/","",$page->content);
        $content = str_replace("'","\'",$content);
        $content = str_replace('"','\"',$content);
        $category = Category::all();
        // dd($content);
        return view('admin.page.edit',[
            'page' => $page,
            'content' => $content,
            'categories' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $Notification->delete();
        return response()->json(['success'=>'Post deleted.']);
    }
}
