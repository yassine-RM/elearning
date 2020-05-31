<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filiere;
use App\Departement;
use App\Cycle;
use DB;
class FiliereController extends Controller
{
   /* public function index(){


        return view('superadmin.filiere',compact('filieres'));
    }*/

   public function index(){
        $filieres=Filiere::all();
        $departements=Departement::all();
        $cycles=Cycle::all();
        $filieres=Filiere::with('departement')->get();
        $filieres=Filiere::with('cycle')->get();

        return view('superadmin.filiere',compact('filieres','departements','cycles'));
    }
    public function newFil(Request $request){
        $filiere=new Filiere();
        $filiere->nom=$request->nom;
        $filiere->departement_id=$request->dep;
        $filiere->cycle_id=$request->cycle;
        $filiere->save();
        return response()->json($filiere);

    }





/*public function getFilieres($id){
    $departements = Departement::where('departement_id',$id)->pluck('nom','id');
     return json_encore($departements);
}

    public function newFil(Request $request){
        if($request->ajax()){
        $filiere=Filiere::create($request->all());
        return response()->json($filiere);
        }
    }*/
        public function getUpdateF(Request $request){
            if($request->ajax()){
                $filiere=Filiere::find($request->id);
                return Response($filiere);
            }


        }
            public function newUpdateF(Request $request){
                $filiere=Filiere::find($request->id);
                    $filiere->nom=$request->nom;
                    $filiere->departement_id=$request->dep;
                    $filiere->cycle_id=$request->cycle;
                    $filiere->save();
                    return response()->json($filiere);
            }
            public function deletefil(Request $request){
                if($request->ajax()){
                    Filiere::destroy($request->id);
                    return Response()->json(['sms'=>'delete succesfuly']);

                }
            }




    }
