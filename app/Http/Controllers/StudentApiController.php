<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\Return_;

class StudentApiController extends Controller
{
    public function addstud(Request $req){
        if($req->add_stud==true){

            $rule = array(
                "stname"=> "required|max:15",
                "stmobile"=> "required|max:2",

            );
            $valid = Validator::make($req->all(), $rule);

            if($valid->fails()){
                return response()->json($valid->errors());
            }else{
                $stud_name = $req->stname;
                $stud_mobile = $req->stmobile;
    
                $stud = new Student();
                $stud->name = $stud_name;
                $stud->age = $stud_mobile;
                $stud->save();
                return response()->json(['msg'=>'student added successfully']) ;
            }
                
        }
 
    }
    //   get all student 
    public function getstud($id = null){
        if($id){
        $student = Student::find($id);
        }else{
            $student = Student::all();
        }
        return $student;
    }
        




    //update by id 
    public function updatestud(Request $req,$id){
        if($req->update_stud==true){
            $stud_name = $req->stname;
            $stud_mobile = $req->stmobile;

            $data = array("name"=>$stud_name,"age"=>$stud_mobile) ;
            Student::where("id",$id)->update($data);
            return response()->json(["msg"=> "Data Updated Successfully"]) ;
        }
    
    }

    //delete data by id 
    public function deletestud(Request $req ,$id){
        if($req->delete_stud==true){
            Student::where('id',$id)->delete();

            return response()->json(['msg'=> 'Record Deleted Successfully']) ;
        
        }
        
    }
        
}


