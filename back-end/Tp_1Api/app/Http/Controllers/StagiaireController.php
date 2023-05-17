<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stagiaire;
use Illuminate\Support\Facades\Validator;

class StagiaireController extends Controller
{
    public function index()
    {
        $stg = stagiaire::all();
        if ($stg == null) {
            return response()->json(["msg" => "Ancun stagiaires trouve !"], 401);
        } else {
            return response()->json($stg, 200);
        }
    }
    public function show($id)
    {
        $stg = stagiaire::find($id);
        if ($stg == null) {
            return response()->json(["msg" => "Ancun stagiaire trouve !"], 401);
        } else {
            return response()->json([$stg], 200);
        }
    }
    public function destroy($id)
    {
        $stg = stagiaire::find($id);
        if ($stg == null) {
            return response()->json(["msg" => "Ancun stagiaire trouve !"], 401);
        } else {
            stagiaire::destroy($id);
            return response()->json(["msg" => "stagiaire bien !"], 200);
        }
    }
    public function store(Request $req)
    {

        return response()->json([$req->all()], 200);
        $val = Validator::make($req->all(), [
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nom' => 'required',
            'email' => 'required|email',
            'filiere' => 'required',

        ]);
        if ($val->fails()) {
            return response()->json(["error" => $val->errors()], 401);
        } else {
            $photo = time() . "." . $req->photo->extension();
            $req->photo->move(public_path("images"), $photo);
            $cv = "CV" . time() . "." . $req->cv->extension();
            $req->cv->move(public_path("cv"), $cv);
            $data = [
                'nom' => $req->nom,
                'prenom' => $req->prenom,
                'email' => $req->email,
                'photo' =>  'images\\' . $photo,
                'cv' =>   'docs\\' . $cv,
                'ville' => $req->ville,
                'datenaissance' => $req->datenaissance,
                'filiere' => $req->filiere,
            ];
            stagiaire::create($data);
            return response()->json(["msg" => "stagiaire bien ajoute!!"], 200);
        }
    }
    public function update(Request $req, $id)
    {
        $stg = stagiaire::find($id);
        if ($stg == null) {
            return response()->json(["msg" => "Ancun stagiaire ?!"], 401);
        } else {

            $val = Validator::make($req->all(), [
                'nom' => 'required',
                'email' => 'required|email',
                'filiere' => 'required',
            ]);

            if ($val->fails()) {
                return response()->json(["Error" => $val->errors()], 401);
            } else {
                // $photo = time() . "." . $req->photo->extension();
                // $req->photo->move(public_path("images"), $photo);
                // $cv = "CV" . time() . "." . $req->cv->extension();
                // $req->cv->move(public_path("cv"), $cv);
                $data = [
                    'id' => $id,
                    'nom' => $req->nom,
                    'prenom' => $req->prenom,
                    'email' => $req->email,
                    // 'photo' =>  'images\\' . $photo,
                    // 'cv' =>   'docs\\' . $cv,
                    'ville' => $req->ville,
                    'datenaissance' => $req->datenaissance,
                    'filiere' => $req->filiere,
                ];
                $stg->update($data);
                return response()->json([
                    'message' => 'Stagiaire bien modifié',
                    'Stagiaire'  => $stg,
                ], 200);
            }
        }
    }
}
