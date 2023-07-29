<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Colaborador;
Use Log;

class ColaboradorController extends Controller
{
    public function getAll(){
        $data = Colaborador::get();
        return response()->json($data, 200);
    }

    public function create(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'lastNameP' => 'required',
            'lastNameM' => 'required',
            'area' => 'required',
            'company' => 'required',
            'department' => 'required',
            'position' => 'required',
            'dischargeDate' => 'required',
            'status' => 'required'
        ]);
        $user = Colaborador::create($validatedData);
        return response()->json([
            'message' => "Colaborador creado",
            'success' => true
        ], 200);
    }

    public function delete($id){
        $res = Colaborador::find($id)->delete();
        return response()->json([
            'message' => "Successfully deleted",
            'success' => true
        ], 200);
    }

    public function get($id){
        $data = Colaborador::find($id);
        return response()->json($data, 200);
    }

    public function update(Request $request,$id){
        $validatedData = $request->validate([
            'name' => 'required',
            'lastNameP' => 'required',
            'lastNameM' => 'required',
            'area' => 'required',
            'company' => 'required',
            'department' => 'required',
            'position' => 'required',
            'dischargeDate' => 'required',
            'status' => 'required'
        ]);
        $user = Colaborador::find($id)->update($validatedData);
        return response()->json([
            'message' => "Successfully updated",
            'success' => true
        ], 200);
    }
}
