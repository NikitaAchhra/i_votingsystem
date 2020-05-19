<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Teacher;
use App\NomClass;
use DB;

class TeacherController extends Controller
 {
//     /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function index()
//     {
       
//     }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create()
//     {
//         //
//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request)
//     {
//         //
//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function show($id)
//     {
//         $user_s=User::where('user_id',$id)->first();
//         $teacher=Teacher::where('user_id_fk',$user_s->user_id)->first();
//         return view('teacher\index')->with('user_s',$user_s)->with('teacher',$teacher);
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function edit($id)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, $id)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy($id)
//     {
//         //
//     }

    public function show_list(Request $request,$id){

        if($request->has('decline')){


            $deleted = DB::delete('delete from nom_classes where nomclass_id=:id',['id'=>$id]);
            
            $user=User::where('user_id',$request->input('user_id'))->first();
            $teacher=Teacher::where('user_id_fk',$user->user_id)->first();
            $class=$teacher->class_id_fk;


        
            
            $final=DB::table('nom_classes')
            ->join('councils','coun_id_fk','=','coun_id')
            ->join('students', 'stud_id_fk', '=', 'stud_id')
            ->join('users', 'user_id_fk', '=', 'user_id')
            ->select('nomclass_id', 'stud_id', 'user_id', 'user_name', 'user_gender', 'user_pic', 'coun_id', 'coun_name')
            ->where('nom_classes.class_id_fk',$class)
            ->get();
            return view('teacher/requestlist')->with('token',[$final,$user])->with('success','Request Successfully Decline.');
        
        }    




        $user=User::where('user_id',$id)->first();
        $teacher=Teacher::where('user_id_fk',$id)->first();
        $class=$teacher->class_id_fk;


        
            
            $final=DB::table('nom_classes')
            ->join('councils','coun_id_fk','=','coun_id')
            ->join('students', 'stud_id_fk', '=', 'stud_id')
            ->join('users', 'user_id_fk', '=', 'user_id')
            ->select('nomclass_id', 'stud_id', 'user_id', 'user_name', 'user_gender', 'user_pic', 'coun_id', 'coun_name')
            ->where('nom_classes.class_id_fk',$class)
            ->get();
            return view('teacher/requestlist')->with('token',[$final,$user]);
        

            
}

  
}
