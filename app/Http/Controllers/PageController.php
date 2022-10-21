<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DistrictMaster;
use App\Models\DeptMaster;
use App\Models\SchemeMaster;
use App\Models\Post;

class PageController extends Controller
{
    public function welcome()
    {
      return view('welcome');
    }

    public function contact()
    {
      $schemes = SchemeMaster::all();
      $districts = DistrictMaster::all();
      $depts = DeptMaster::all();
      return view('pages.contact', [
        'schemes' => $schemes,
        'districts' => $districts,
        'depts' => $depts,
      ]);
    }

    public function notifications()
    {
      $post = Post::where('category', 'Notification')->get();
      return view('pages.notification', [
        'posts' => $post,
      ]);
    }

    public function gallery()
    {
      $post = Post::where('category', 'Notification')->get();
      return view('pages.gallery', [
        'posts' => $post,
      ]);
    }
}
