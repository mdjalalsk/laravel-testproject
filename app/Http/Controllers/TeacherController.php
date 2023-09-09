<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function ShowTeacher()
    {
        // $teacher=DB::table('teachers')->orderBy('name')->get();
        // $teacher=DB::table('teachers')->orderBy('name','desc')->get();
        // $teacher = DB::table('teachers')->orderBy('id', 'asc')->get();
        //use pagenate
        // $teacher = DB::table('teachers')->orderBy('id', 'asc')->simplePaginate(5);// It's perfect for pagenation show only next and previous buttons
        // $teacher = DB::table('teachers')->orderBy('id', 'asc')->Paginate(5);//It's perfect for pagenation show  next and previous and page number buttons
        $teacher = DB::table('teachers')->orderBy('id', 'asc')->cursorPaginate(5); // It's perfect for pagenation show next and previous buttons but it's use for large amount of date,


        // $teacher=DB::table('teachers')->where('name','like','J%')->get();//show only this  teacher his mame start j letter .

        // $teacher=DB::table('teachers')
        // ->select('name','email as teacher_email')
        // ->get();

        // $teacher=DB::table('teachers')
        // ->pluck('name');

        // dd($teacher);
        // return $teacher;
        return view('frontend.allteacher', compact('teacher'));
    }
    public function delete(Request $request, $id)
    {
        // use  querybuilder and DB class
        $data = DB::table('teachers')->where('id', $id);
        // dd($data);
        $data->delete();
        return redirect()->back()->with('message', "delete teacher successfully");
    }

    public function addTeacherform()
    {

        return view('frontend.addTeacher');
    }
    public function addTeacherinsert(Request $request)
    {
        $teacher = DB::table('teachers')->insert(
            [
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
            ]
        );
        if ($teacher) {
            // echo "success";
            return redirect()->route('teacher');
        } else {
            echo "failed";
        }
    }
    //show teacher edit form view
    public function editTeacherform(string $id)
    {
        $tc = DB::table('teachers')->find($id);
        // dd($tc);
        return view('frontend.updateTeacher', ['tc' => $tc]);
    }
    //update teacher 
    public function updateTeacher(Request $request, $id)
    {
        $tc = DB::table('teachers')->where('id', $id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
            ]);
        if ($tc) {
            echo "success";
            return redirect()->route('teacher');
        } else {
            echo "failed";
        }
    }
}
