<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Student;
use App\Teacher;
use App\Division;
use App\Department;
use Auth;

class UserController extends Controller
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
        
        // return view('profile/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'user_name'=>'required',
        //     'user_email'=>'required',
        //     'user_gender'=>'required',
        //     'class_id_fk'=>'required',
        //     'dept_id_fk'=>'required',
        // ]);

        // $user = new User;
        // $user->user_name=$request->input('user_name');
        // $user->user_email=$request->input('user_email');
        // $user->user_gender=$request->input('user_gender');
        // $user->user_pic=$request->input('user_pic');

        // if (preg_match('/^[0-9]{4}+.[a-z]+.[a-z]+@ves.ac.in$/', $request->input('user_email'), $matches)) {
            
        //     $user->status=0;
        //  }
        // else{
        //     $user->status=1;
        // }
        // $user->save();

        // // $user = new User;
        // // $dept= new Department;
        // // $div= new Division;

        // $user =User::where('user_email',$request->input('user_email'))->first();
        // $dept=Department::where('dept_name',$request->input('dept_id_fk'))->first();
        // $div=Division::where('class_name',$request->input('class_id_fk'))->first();

        
        // if($user->status==0){
        //     $stud = new Student;
        //     $stud->user_id_fk = $user->user_id;
        //     $stud->class_id_fk = $div->class_id;
        //     $stud->dept_id_fk = $dept->dept_id;
        //     $stud->save();
        // }
        // else{

        //     $tea = new Teacher;
        //     $tea->user_id_fk = $user->user_id;
        //     $tea->class_id_fk = $div->class_id;
        //     $tea->dept_id_fk = $dept->dept_id;
        //     $tea->save();   
        // }
        // return view('profile/create')->with('success','Profile Created Successfully');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user7=User::where('user_id',$id)->first();
        if($user7->status==0){
            $student=Student::where('user_id_fk',$user7->user_id)->first();
            return view('profile/viewpage')->with('user7',$user7);
        }
        else{
            $teacher=Teacher::where('user_id_fk'.$user->user_id)->first();
            return view('profile/viewpage')->with('teacher',$teacher);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // echo 'hello';
        $user2=User::where('user_id',$id)->first();
        return view('profile/edit')->with('user2',$user2);
        
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

        $this->validate($request,[
            'user_name'=>'required',
            // 'user_email'=>'required',
            'user_gender'=>'required',
            'class_id_fk'=>'required',
            'dept_id_fk'=>'required',
            'user_pic'=>'image|mimes:jpeg,png,jpg,gif|max:1999'
        ]);
        //handle file upload
        

        // $user3=User::where('user_email',$request->input('user_email'))->first();
        // $user3=User::find($id)->first();
        $user3=User::where('user_id',$id)->first();
        $user3->user_name=$request->input('user_name');
        // $user3->user_email=$request->input('user_email');
        $user3->user_gender=$request->input('user_gender');
        if($request->hasFile('user_pic')){
            //File Name with Extension
            $filenamewithext = $request->file('user_pic')->getClientOriginalName();
            //Get File name
            $filename = pathinfo($filenamewithext, PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('user_pic')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore=$filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('user_pic')->storeAs('public/images',$fileNameToStore);
        }
        else{
            $fileNameToStore = 'noimage.jpg';
        }
        $user3->user_pic=$fileNameToStore;
        
        $user3->save();
        



        // $user4=User::where('user_email',$request->input('user_email'))->first();
        $user4=User::where('user_id',$id)->first();
        // $user4=User::find($id)->first();
        $dept=Department::where('dept_name',$request->input('dept_id_fk'))->first();
        $div=Division::where('class_name',$request->input('class_id_fk'))->first();

        
        if($user4->status==0){
            $exist=Student::where('user_id_fk',$user4->user_id)->first();
            if($exist){
                $exist->user_id_fk = $user4->user_id;
                $exist->class_id_fk = $div->class_id;
                $exist->dept_id_fk = $dept->dept_id;
                $exist->save();
            }
            else{
                $stud = new Student;
                $stud->user_id_fk = $user4->user_id;
                $stud->class_id_fk = $div->class_id;
                $stud->dept_id_fk = $dept->dept_id;
                $stud->save();
            }
            
        }
        else{

            $exist=Teacher::where('user_id_fk',$user4->user_id)->first();
            if($exist){
                $exist->user_id_fk = $user4->user_id;
                $exist->class_id_fk = $div->class_id;
                $exist->dept_id_fk = $dept->dept_id;
                $exist->save();
            }
            else{
                $tea = new Teacher;
                $tea->user_id_fk = $user4->user_id;
                $tea->class_id_fk = $div->class_id;
                $tea->dept_id_fk = $dept->dept_id;
                $tea->save();
            }

               
        }
        // return view('profile/edit')->with('success','Profile Completed Successfully'); 
        // return view('/'); 
        return view('profile/edit')->with('user2',$user4)->with('success','Profile Completed Successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
