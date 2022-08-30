<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DistrictMaster;
use App\Models\DeptMaster;
use App\Models\SchemeMaster;

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
}
