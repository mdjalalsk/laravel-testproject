<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
public function ShowTeacher(){
    // $teacher=DB::table('teachers')->orderBy('name')->get();
    // $teacher=DB::table('teachers')->orderBy('name','desc')->get();
    $teacher=DB::table('teachers')->orderBy('name','asc')->get();
    

    // $teacher=DB::table('teachers')->where('name','like','J%')->get();//show only this  teacher his mame start j letter .

    // $teacher=DB::table('teachers')
    // ->select('name','email as teacher_email')
    // ->get();

    // $teacher=DB::table('teachers')
    // ->pluck('name');
   
    // dd($teacher);
    // return $teacher;
    return view('frontend.allteacher',compact('teacher'));
}
public function delete(Request $request,$id){
    // use  querybuilder and DB class
    $data=DB::table('teachers')->where('id', $id);
    // dd($data);
    $data->delete();
    return redirect()->back()->with('message',"delete teacher successfully");
}

public function addTeacherform(){
  
    return view('frontend.addTeacher');
}
public function addTeacherinsert(Request $request){
   $teacher=DB::table('teachers')->insert(
    [
      'name'=>$request->name,
      'email'=>$request->email,
      'address'=>$request->address,
    ]
    );
    if($teacher){
        echo"success";
    }else{
        echo"failed";
    }
   
}


}
