<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Department;
use App\Division;
use App\Council;
use App\Position;
use App\User;

class AdminController extends Controller
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
        //
        if($request->has('form1')){
            $dept=new Department;
            $dept->dept_name=$request->input('dept_name');
            $dept->save();
        }
        else{
            if($request->has('form2')){
                $dep=Department::where('dept_name',$request->input('dept_name'))->first();
                $class=new Division;
                $class->dept_id_fk = $dep->dept_id;
                $class->class_name=$request->input('class_name');
                $class->save();
            }
            else{
                if($request->has('form3')){
                    $council=new Council;
                    $council->coun_name=$request->input('coun_name');
                    $council->save();
                }
                else{
                    if($request->has('form4')){
                        $pos=new Position;
                        $pos->pos_name=$request->input('pos_name');
                        $pos->save();
                    }
                    else{
                        $user = new User;
                        $user->user_name=$request->input('user_name');
                        $user->user_email=$request->input('user_email');
                        $user->user_gender=$request->input('user_gender');
                        $user->user_pic=$request->input('user_pic');
                        $user->status=2;
                        $user->save();
                    }
                }
            }
        }
        return view('admin/admin');
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
        //
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
        //
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
