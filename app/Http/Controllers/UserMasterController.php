<?php

namespace App\Http\Controllers;

use App\Models\BankMaster;
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
        if (Auth::user()->role == 'LBANK') {
            $data = User::where('role', 'SBANK')->get();
        } else {
            // where not equal to LBANK OR SBANK
            $data = User::where('role', '!=', 'LBANK')->where('role', '!=', 'SBANK')->get();
        }
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
    public function changePasswordForm(){
        return view('users.changePassword');
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
        if (Auth::user()->role == 'LBANK') {
            $banks = BankMaster::orderBy('name', 'ASC')->get();
            return view('users.add', [
                'districts' => $districts,
                'depts' => $depts,
                'banks' => $banks,
            ]);
        } else {
            return view('users.add', [
                'districts' => $districts,
                'depts' => $depts,
            ]);
        }
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
            'password' => Hash::make('Nagaland@123#'),
            // check role by auth role
            'role' => Auth::user()->role == 'LBANK' ? 'SBANK' : $request->role,
            'dept' => $request->dept,
            'district' => $request->district,
            'bank' => $request->bank,
        ]);

        Session::flash('success', 'User created successfully');
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
        if (Auth::user()->role == 'LBANK') {
            $banks = BankMaster::orderBy('name', 'ASC')->get();
            return view('users.edit', [
                'data' => $data,
                'districts' => $districts,
                'depts' => $depts,
                'banks' => $banks,
            ]);
        } else {
            return view('users.edit', [
                'districts' => $districts,
                'depts' => $depts,
                'data' => $data,
            ]);
        }
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
            'role' => Auth::user()->role == 'LBANK' ? 'SBANK' : $request->role,
            'dept' => $request->dept,
            'district' => $request->district,
            'bank' => $request->bank,
        ]);

        Session::flash('success', 'User updated successfully');
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
