<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\DistrictMaster;
use App\Models\DeptMaster;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = User::all();
      return view('users.index', [
        'data' => $data,
      ]);
    }

    public function changePassword(Request $request)
    {
        $user = User::find(Auth::user()->id);
        //check old password with current user password
        if (Hash::check($request->oldPassword, $user->password)) {
            //check new password and confirm password are same
            $user->password = Hash::make($request->newPassword);
            $user->save();
            Session::flash('success', 'Password changed successfully');
            return redirect()->back();
        } else {
            Session::flash('error', 'Old password is not correct');
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $districts = DistrictMaster::orderBy('name', 'ASC')->get();
        $depts = DeptMaster::orderBy('name', 'ASC')->get();

        return view('users.add', [
          'districts' => $districts,
          'depts' => $depts,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      User::create([
        'name' => $request->name,
        'email' => $request->email,
        'mobile' => $request->mobile,
        'password' => Hash::make('Password123#'),
        'role' => $request->role,
        'dept' => $request->dept,
        'district' => $request->district,
      ]);

      Session::flash('user-added', 1);
      return redirect()->route('userMaster.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $data = User::find($id);
      $districts = DistrictMaster::orderBy('name', 'ASC')->get();
      $depts = DeptMaster::orderBy('name', 'ASC')->get();

      return view('users.edit', [
        'districts' => $districts,
        'depts' => $depts,
        'data' => $data,
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $target = User::find($id);
        $target->update([
          'name' => $request->name,
          'email' => $request->email,
          'mobile' => $request->mobile,
          'role' => $request->role,
          'dept' => $request->dept,
          'district' => $request->district,
        ]);

        Session::flash('user-updated', 1);
        return redirect()->route('userMaster.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
