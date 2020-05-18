<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Student;
use App\NomClass;
use DB;

class RequestController extends Controller
{
    //
    public function show_list($id,Request $request)
    {
        $user=User::where('user_id',$id)->first();
        $student=Student::where('user_id_fk',$id)->first();
        $class=$student->class_id_fk;

        // $final=DB::table('nom_classes')
        //     ->join('councils','coun_id_fk','=','coun_id')
        //     ->join('students', 'stud_id_fk', '=', 'stud_id')
        //     ->join('users', 'user_id_fk', '=', 'user_id')
        //     ->select('nomclass_id', 'stud_id', 'user_id', 'user_name', 'coun_id', 'coun_name')
        //     ->where('nom_classes.class_id_fk',$class)
        //     ->where('coun_id','')
        //     ->get();
        
        if($request->has('form1')){
            $final=DB::table('nom_classes')
            ->join('councils','coun_id_fk','=','coun_id')
            ->join('students', 'stud_id_fk', '=', 'stud_id')
            ->join('users', 'user_id_fk', '=', 'user_id')
            ->select('nomclass_id', 'stud_id', 'user_id', 'user_name', 'user_gender', 'user_pic', 'coun_id', 'coun_name')
            ->where('nom_classes.class_id_fk',$class)
            ->where('coun_id','1')
            ->get();
            
            return view('class/list')->with('token',[$final,$user]);
        }
        else{
            if($request->has('form2')){
                $final=DB::table('nom_classes')
                ->join('councils','coun_id_fk','=','coun_id')
                ->join('students', 'stud_id_fk', '=', 'stud_id')
                ->join('users', 'user_id_fk', '=', 'user_id')
                ->select('nomclass_id', 'stud_id', 'user_id', 'user_name' ,'user_gender', 'coun_id', 'coun_name')
                ->where('nom_classes.class_id_fk',$class)
                ->where('coun_id','2')
                ->get();
                return view('class/list')->with('token',[$final,$user]);
            }
            else{
                if($request->has('form3')){
                    $final=DB::table('nom_classes')
                    ->join('councils','coun_id_fk','=','coun_id')
                    ->join('students', 'stud_id_fk', '=', 'stud_id')
                    ->join('users', 'user_id_fk', '=', 'user_id')
                    ->select('nomclass_id', 'stud_id', 'user_id', 'user_name','user_gender', 'coun_id', 'coun_name')
                    ->where('nom_classes.class_id_fk',$class)
                    ->where('coun_id','3')
                    ->get();
                    return view('class/list')->with('token',[$final,$user]);
                }
                else{
                    if($request->has('form4')){
                        $final=DB::table('nom_classes')
                        ->join('councils','coun_id_fk','=','coun_id')
                        ->join('students', 'stud_id_fk', '=', 'stud_id')
                        ->join('users', 'user_id_fk', '=', 'user_id')
                        ->select('nomclass_id', 'stud_id', 'user_id', 'user_name' ,'user_gender', 'coun_id', 'coun_name')
                        ->where('nom_classes.class_id_fk',$class)
                        ->where('coun_id','4')
                        ->get();
                        return view('class/list')->with('token',[$final,$user]);
                    }
                    else{
                        $final=DB::table('nom_classes')
                        ->join('councils','coun_id_fk','=','coun_id')
                        ->join('students', 'stud_id_fk', '=', 'stud_id')
                        ->join('users', 'user_id_fk', '=', 'user_id')
                        ->select('nomclass_id', 'stud_id', 'user_id', 'user_name' ,'user_gender', 'coun_id', 'coun_name')
                        ->where('nom_classes.class_id_fk',$class)
                        ->where('coun_id','5')
                        ->get();
                        return view('class/list')->with('token',[$final,$user]);
                    }
                }
            }
        }

    }
}
