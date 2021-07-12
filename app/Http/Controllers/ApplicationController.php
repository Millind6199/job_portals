<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
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
    public function store(Request $request , $id)
    {
        $user_id = auth()->guard('user')->user()->id;
//        dd($user_id);
        $request->file('cv')->move('uploads/files',$request->file('cv')->getClientOriginalName());

        Application::create([
            'user_id' => $user_id,
            'job_id' => $id,
           'gender' => $request->gender,
           'cv' => $request->file('cv')->getClientOriginalName(),
        ]);

        return redirect('/user/myapply');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
        $user_id = auth()->guard('user')->user()->id;

        $data = Application::where('user_id', $user_id)
            ->join('jobs', 'applications.job_id', '=', 'jobs.id')
            ->select('jobs.post','jobs.comp_name','applications.created_at')
            ->get();
//        dd($data);
        return view('User/MyApplications',['data' => $data]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Application $application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $application)
    {
        //
    }
}
