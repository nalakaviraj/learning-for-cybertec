<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $applicants=\App\Applicants::all();
        return view('dashbord',compact('applicants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $passports=\App\Applicants::all();
        return view('add_applicant');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {if($request->hasfile('filename'))
         {
            $file = $request->file('name');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
         }
        $applicant= new \App\Applicants;
        $applicant->Name_in_full=$request->get('Name_in_full');
        $applicant->address=$request->get('address');
        $applicant->signup_email=$request->get('signup_email');
        $applicant->mobile=$request->get('mobile');
        // $applicant->date=$request->get('date');

        // $birthday=date_create($request->get('birthday'));
        // $format = date_format($birthday,"Y-m-d");
        $applicant->birthday = $request->get('birthday');


        $applicant->nic_number=$request->get('nic_number');
        $applicant->position=$request->get('position');
        $applicant->previously_worked_company=$request->get('previously_worked_company');
        $applicant->job_title=$request->get('job_title');
        $applicant->monthly_salory=$request->get('monthly_salory');
        $applicant->experience=$request->get('experience');
        $applicant->expertise=$request->get('expertise');
        $applicant->account_no=$request->get('account_no');
        $applicant->account_holder=$request->get('account_holder');
        $applicant->bank_name=$request->get('bank_name');
        $applicant->bank_branch=$request->get('bank_branch');
        
        $applicant->filename=$applicant->Name_in_full;
        $applicant->save();
        
        return redirect('dashbord')->with('success', 'Information has been added');
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
       // $passport = \App\Passport::find($id);
       //  return view('edit',compact('passport','id'));
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
        // $passport= \App\Passport::find($id);
        // $passport->name=$request->get('name');
        // $passport->email=$request->get('email');
        // $passport->number=$request->get('number');
        // $passport->office=$request->get('office');
        // $passport->save();
        // return redirect('passports');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $passport = \App\Passport::find($id);
        // $passport->delete();
        // return redirect('passports')->with('success','Information has been  deleted');
    }
}
