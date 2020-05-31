<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administrateur;
use App\Http\Requests\adminRequest;
use DB;
class AdministrateurController extends Controller
{


   /* function insert(Request $request){
        $cin = $request->input('cin');
        $first_name = $request->input('nom');
        $last_name = $request->input('prenom');
        $email = $request->input('email');
        $pss = $request->input('password');
        $tele = $request->input('telephone');
        $date = $request->input('date_naissance');
        $adress = $request->input('adress');

        $data=array('cin'=>$cin,"nom"=>$first_name,"prenom"=>$last_name,"email"=>$email,"password"=>$pss,"telephone"=>$tele,"date_naissance"=>$date,"adress"=>$adress);

        DB::table('administrateurs')->insert($data);


        }*/
     public function index(){
            $administrateurs=Administrateur::all();
            return view('superadmin.compteadmin',['administrateurs'=>$administrateurs]);
        }
        public function newadmin(adminRequest $request){
            if($request->ajax()){
            $administrateur=Administrateur::create($request->all());
            return response()->json($administrateur);
            }

        }
        public function getUpdated(Request $request){
            if($request->ajax()){
                $administrateur=Administrateur::find($request->id);
                return Response( $administrateur);
            }


        }
            public function newUpdateD(Request $request){
                if($request->ajax()){
                    $administrateur=Administrateur::find($request->id);
                    $administrateur->cin=$request->cin;
                    $administrateur->nom=$request->nom;
                    $administrateur->prenom=$request->prenom;
                    $administrateur->email=$request->email;
                    $administrateur->password=$request->password;
                    $administrateur->telephone=$request->telephone;
                    $administrateur->date_naissance=$request->date_naissance;
                    $administrateur->adress=$request->adress;
                    $administrateur->save();
                    return Response( $administrateur);
                }
            }
            public function deleteAdmin(Request $request){
                if($request->ajax()){
                    Administrateur::destroy($request->id);
                    return Response()->json(['sms'=>'delete succesfuly']);

                }
            }

    }
