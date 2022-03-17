<?php

namespace App\Http\Controllers\Administrator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\MaterialType;
use Auth;


class MaterialTypeController extends Controller
{
    //

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('administrator.material-type');
    }

    public function show($id){
        return MaterialType::find($id);
    }


    public function getMaterialTypes(Request $req){
        $sort = explode('.', $req->sort_by);

        $data = MaterialType::where('material_type', 'like', $req->material_type . '%')
            ->orderBy($sort[0], $sort[1])
            ->paginate($req->perpage);

        return $data;
    }

    public function store(Request $req){
        $user = Auth::user();
        $req->validate([
            'material_type' => ['required', 'unique:material_types']
        ]);

        MaterialType::create([
            'material_type' => ucfirst($req->material_type),
            'sys_user' => strtoupper($user->username)
        ]);

        return response()->json([
            'status' => 'saved'
        ],200);
    }

    public function update(Request $req, $id){
        $user = Auth::user();
        $req->validate([
            'material_type' => ['required', 'unique:material_types,material_type,'.$id.',material_type_id']
        ]);

        $data = MaterialType::find($id);
        $data->material_type = ucfirst($req->material_type);
        $data->save();

        return response()->json([
            'status' => 'updated'
        ],200);
    }

    public function destroy($id){

        MaterialType::destroy($id);

        return response()->json([
            'status' => 'deleted'
        ],200);
    }


}
