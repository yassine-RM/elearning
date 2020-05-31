<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cycle;
use DB;
class CycleController extends Controller
{
    public function index(){
        $cycles=Cycle::all();
        return view('superadmin.cycle',['cycles'=>$cycles]);
    }
    public function newCycle(Request $request){
        if($request->ajax()){
        $cycle=Cycle::create($request->all());
        return response()->json($cycle);
        }
    }
        public function getUpdateC(Request $request){
            if($request->ajax()){
                $cycle=Cycle::find($request->id);
                return Response($cycle);
            }
    
    
        }    
            public function newUpdateC(Request $request){
                if($request->ajax()){
                    $cycle=Cycle::find($request->id);
                    $cycle->nom=$request->nom;
                    $cycle->save();
                    return Response($cycle);
                }
            }
            public function deleteCyc(Request $request){
                if($request->ajax()){
                    Cycle::destroy($request->id);
                    return Response()->json(['sms'=>'delete succesfuly']);
    
                }
            }
            
       
       
    
    }
    