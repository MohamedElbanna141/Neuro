<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function UpdateUserData(Request $request){
        $user_id = $request['user_id'];
        $update_field = $request['update_field'];
        $value = $request['value'];

        DB::table('users')->where('id',$user_id)->update([$update_field => $value]);
        
    
            return response($update_field ." = ".$value, 201);
   
    }  

    public function SelectUser($user_id){
            
        $data = DB::table('users')->where('id',$user_id)->get();
         if(!empty($data)){
             //return response($data , 201);

             /* foreach($data as $inside => $keyInside){
                $image = $keyInside->{'image'};
                $keyInside->{'image'} = asset($image);
            }   */

             $response = [
                'status' => TRUE,
                'data' => $data
             ];
             return response($response,201);
         }else{
             return response('Data Not Found' , 201);
         }
     }
}
