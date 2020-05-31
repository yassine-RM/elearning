<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Super;
use DB;
class SuperController extends Controller
{
    public function index(Request $request){
        $supers=Super::all();
        return view('superadmin.superAdmin',['supers'=>$supers]);
    }
    public function newSup(Request $request){
        if($request->ajax()){
    
        $super=Super::create($request->all());

        return response()->json($super);
        }
       
    }
    public function getUpdateS(Request $request){
        if($request->ajax()){
            $super=Super::find($request->id);
            return Response( $super);
        }


    }    
        public function newUpdateS(Request $request){
            if($request->ajax()){
                $super=Super::find($request->id);
                $super->cin=$request->cin;
                $super->nom=$request->nom;
                $super->prenom=$request->prenom;
                $super->email=$request->email;
                $super->password=$request->password;
                $super->telephone=$request->telephone;
                $super->date_naissance=$request->date_naissance;
                $super->adress=$request->adress;
                $super->save();
                return Response( $super);
            }
        }
        public function deletesup(Request $request){
            if($request->ajax()){
                Super::destroy($request->id);
                return Response()->json(['sms'=>'delete succesfuly']);

            }
        }
   
}     
 
