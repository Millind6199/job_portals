<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
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
        $request->validate([
           'comp_name' => 'required|string',
            'post' => 'required',
            'place' => 'required',
            'mobile_no' => 'required',
            'req_skills' => 'required',
            'req_experience' => 'required',
            'req_qualification' => 'required',
            'salary' => 'required',
        ]);

        Job::create([

            'comp_name' => $request->comp_name,
            'post' => $request->post,
            'place' => $request->place,
            'mobile_no' => $request->mobile_no,
            'req_skills' => $request->req_skills,
            'req_experience' => $request->req_experience,
            'req_qualification' => $request->req_qualification,
            'salary' => $request->salary,
            'city_id' => $request->city_id,
        ]);

        return redirect()->route('viewjobs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        $data = [
           'jobs' => Job::get(),
            'cities' => City::get()
        ];
        return view('Admin.ViewJobs', ['data' => $data]);
    }
    public function show2(Job $job)
    {
        $data = [
            'jobs' => Job::get(),
            'cities' => City::get()
        ];
        return view('User.Home', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job,$id)
    {
           $data = [
              'jobs' => Job::where('id',$id)->first(),
               'city' => City::get()
                ];
            return view('Admin.EditJobs',['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job,$id)
    {
        Job::where('id',$id)->update([
            'comp_name' => $request->comp_name,
            'post' => $request->post,
            'place' => $request->place,
            'mobile_no' => $request->mobile_no,
            'req_skills' => $request->req_skills,
            'req_experience' => $request->req_experience,
            'req_qualification' => $request->req_qualification,
            'salary' => $request->salary,
            'city_id' => $request->city_id,

            ]);
        return redirect()->route('viewjobs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job,$id)
    {
        Job::destroy($id);
        return redirect()->route('viewjobs');
    }
    public function getJobsByCity(Request $request)
    {
//        dd($request->all());
        $city_id = $request->city_id;



        $data = [
//            'jobs' =>  Job::with('cities')->find($city_id),
            'jobs' => Job::where('city_id' , $city_id)->get(),
            'cities'=> City::get()
        ];
//        dd($data);
        return view ('Admin.ViewJobs', ['data' => $data]);

    }
    public function getJobsByCityUser(Request $request)
    {
//        dd($request->all());
        $city_id = $request->city_id;



        $data = [
//            'jobs' =>  Job::with('cities')->find($city_id),
            'jobs' => Job::where('city_id' , $city_id)->get(),
            'cities'=> City::get()
        ];
//        dd($data);
        return view ('User.Home', ['data' => $data]);

    }
    public function getById($id){
//        dd($id);
        $data = Job::where('id',$id)->first();
        return view('User.ViewDetail',['data' => $data]);
    }
}
