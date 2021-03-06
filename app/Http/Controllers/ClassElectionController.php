<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Student;
use App\Teacher;
use App\Division;
use App\Department;
use App\NomClass;
use App\Council;
use Auth;

class ClassElectionController extends Controller
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
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=User::where('user_id',$id)->first();
        return view('class/request')->with('user3',$user);
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
        if($request->has('vote')){

            $user=User::where('user_id',$request->input('user_id'))->first(); //Voter
            // $council=Council::where('coun_id',$request->input('coun_id'))->first();
            $student=Student::where('user_id_fk',$request->input('user_id'))->first();
            if($request->input('gender')=="male")
            {
                $gender="m";
            }
            else{
                $gender="f";
            }
            // $result= strpos($student->v_cr,$gender);
            // echo $result;
            //echo "1";  
             $res = $request->input('coun_id');
            // echo $res;
            if($res == 1){
                
            $v_cr=$student->v_cr;
            if(substr_count($v_cr,$gender) == 0){
            
                
                $nomi=NomClass::where('nomclass_id',$id)->first();
                $nomi->votes=$nomi->votes+1;
                $nomi->save();
                $student->v_cr=$v_cr.$gender;
                $student->save();

            }
        }

        

    //Cultural council

    if($res ==2){
        if(substr_count($student->v_cultural,$gender) == 0)
            {
                $nomi=NomClass::where('nomclass_id',$id)->first();
                $nomi->votes=$nomi->votes+1;
                $nomi->save();
                $student->v_cultural.=$gender;
                $student->save();

            }
    }

    // Sort 

    if($res ==3){
        if(substr_count($student->v_sort,$gender) == 0)
            {
                $nomi=NomClass::where('nomclass_id',$id)->first();
                $nomi->votes=$nomi->votes+1;
                $nomi->save();
                $student->v_sort.=$gender;
                $student->save();

            }
    }

    //Sports

    if($res ==4){
        if(substr_count($student->v_sports,$gender) == 0)
            {
                $nomi=NomClass::where('nomclass_id',$id)->first();
                $nomi->votes=$nomi->votes+1;
                $nomi->save();
                $student->v_sports.=$gender;
                $student->save();

            }
    }

    // Music

    if($res ==5){
        if(substr_count($student->v_music,$gender) == 0)
            {
                $nomi=NomClass::where('nomclass_id',$id)->first();
                $nomi->votes=$nomi->votes+1;
                $nomi->save();
                $student->v_music.=$gender;
                $student->save();

            }
    }
            
            // if($nomi->coun_id_fk == 1){
                
            // }

    return view('class/request')->with('user3',$user);
 }
    else{
        $user=User::where('user_id',$id)->first();

        $student=Student::where('user_id_fk',$id)->first();
        $council=Council::where('coun_name',$request->input('coun_id_fk'))->first();

        $exists=NomClass::where('stud_id_fk',$student->stud_id)->first();
        if($exists){
            return view('class/request')->with('user3',$user);
        }

        $nomclass= new NomClass;
        $nomclass->stud_id_fk = $student->stud_id;
        $nomclass->class_id_fk=$student->class_id_fk;
        $nomclass->coun_id_fk = $council->coun_id;
        $nomclass->save();
        $student->request=1;
        $student->save();

        return view('class/request')->with('user3',$user);

    }
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
