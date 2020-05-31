<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departement;
use App\Http\Requests\adminRequest;
use DB;

class DepartementContoller extends Controller
{


    /*function insert(Request $request){

        $first_name = $request->input('nom');
        $data=array('nom'=>$first_name);

        DB::table('departements')->insert($data);
}*/
public function index(){
    $departements=Departement::all();
    return view('superadmin.departement',['departements'=>$departements]);
}
public function newDep(adminRequest $request){
    $departement=Departement::create($request->all());
    return response()->json($departement);
}
    public function getUpdate(Request $request){
        if($request->ajax()){
            $departement=Departement::find($request->id);
            return Response($departement);
        }


    }
        public function newUpdate(Request $request){
            if($request->ajax()){
                $departement=Departement::find($request->id);
                $departement->nom=$request->nom;
                $departement->save();
                return Response($departement);
            }
        }
        public function deleteDepart(Request $request){
            if($request->ajax()){
                Departement::destroy($request->id);
                return Response()->json(['sms'=>'delete succesfuly']);

            }
        }




}
