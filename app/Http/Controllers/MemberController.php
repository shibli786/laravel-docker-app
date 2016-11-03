<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Member;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use App\Http\Controllers\Controller; 
class MemberController extends Controller{
    

     public function postMember(Request $request){
         
         $member=new Member;
         $member->name=$request->input('name');
         $member->email=$request->input('email');
         $member->gender=$request->input('gender');
         $member->address=$request->input('address');
         $member->save();
        

         
        
    }

        
    public function getMemberById(Member $id){
       return $id->toJson();
         

        
    }
        public function getAllMember(){
              $members = Member::all();
              //echo $members;
              return $members->toJson();

        
    }
    
    
    
    
    
}
