<?php

namespace App\Http\Controllers;

use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function response($status,$message,$data){
        return response()->json([[
            'status'=>$status,
            'message'=>$message,
            'data'=>$data
        ]]);
    }
    public function getStudent(){
        $students=Student::query()->orderBy('id','ASC')->get();
        return $this->response(200,'Get Student success.',$students);
    }
    public function addStudent(Request $request){
        $input=$request->validate([
            'name'=>'required',
            'gender'=>'required',
            'email'=>'required',
            'dob'=>'required'
        ]);
        if($request->hasFile('profile')){
            $file=$request->file('profile');
            $fileName=$file->getClientOriginalName();
            $file->move('upload',$fileName);
            $input['profile']=url('upload/'.$fileName);
        }
        $insert=Student::create($input);
        if($insert){
            return $this->response(201,'Student was created.',$insert);
        }
    }
    public function editStudent(Request $request,$id){
         $input=$request->validate([
            'name'=>'required',
            'gender'=>'required',
            'email'=>'required',
            'dob'=>'required'
        ]);
        if($request->hasFile('profile')){
            $file=$request->file('profile');
            $fileName=$file->getClientOriginalName();
            $file->move('upload',$fileName);
            $input['profile']=url('upload/'.$fileName);
        }
        $update=Student::query()->where('id',$id)->update($input);
        if($update){
             return $this->response(201,'Student was updated.',$update);
        }
    }
    public function deleteStudent($id){
        $delete=Student::query()->where('id',$id)->delete();
        if($delete){
            return $this->response(200,'Delete student success.','Student`s id '.$id);
        }
    }
    // search student
    public function searchStudent($search){
        $students=Student::query()->where('name','LIKE' ,'%'.$search.'%')->get();
        if($students->count()>0){
            return $this->response(200,'Search success.',$students);
        }else{
            return $this->response(404,'Search not found.',$students);
        }
    }
}
