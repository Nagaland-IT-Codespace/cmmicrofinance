<?php

namespace App\Http\Controllers;

use App\Models\GrievanceReply;
use Illuminate\Http\Request;
use App\Mail\GrievanceReplyMail;
use Illuminate\Support\Facades\Mail;


class GrievanceReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = GrievanceReply::create([
            'grievance_id' => $request->grievance_id,
            'reply' => $request->reply,
        ]);

        $userMail = $data->grievance->email;

        $mailData = [
            'full_name'    => $data->grievance->name,
            'subject' => $request->subject,
            'reply' => $request->reply,
            'grievance_id' => $request->grievance_id,
        ];
        Mail::to($userMail)->send(new GrievanceReplyMail($mailData));
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GrievanceReply  $grievanceReply
     * @return \Illuminate\Http\Response
     */
    public function show(GrievanceReply $grievanceReply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GrievanceReply  $grievanceReply
     * @return \Illuminate\Http\Response
     */
    public function edit(GrievanceReply $grievanceReply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GrievanceReply  $grievanceReply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GrievanceReply $grievanceReply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GrievanceReply  $grievanceReply
     * @return \Illuminate\Http\Response
     */
    public function destroy(GrievanceReply $grievanceReply)
    {
        //
    }
}
