<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\LibraryLocation;
use Auth;


class LibraryLocationController extends Controller
{
    //

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('administrator.library-location');
    }

    public function show($id){
        return LibraryLocation::find($id);
    }


    public function getLibraryLocations(Request $req){
        $sort = explode('.', $req->sort_by);

        $data = LibraryLocation::where('location', 'like', $req->location . '%')
            ->orderBy($sort[0], $sort[1])
            ->paginate($req->perpage);

        return $data;
    }

    public function store(Request $req){
        $user = Auth::user();
        $req->validate([
            'location' => ['required', 'unique:library_locations']
        ]);

        LibraryLocation::create([
            'location' => ucfirst($req->location),
            'sys_user' => strtoupper($user->username)
        ]);

        return response()->json([
            'status' => 'saved'
        ],200);
    }

    public function update(Request $req, $id){
        $user = Auth::user();
        $req->validate([
            'location' => ['required', 'unique:library_locations,location,'.$id.',library_location_id']
        ]);

        $data = LibraryLocation::find($id);
        $data->location = ucfirst($req->location);
        $data->save();

        return response()->json([
            'status' => 'updated'
        ],200);
    }

    public function destroy($id){

        LibraryLocation::destroy($id);

        return response()->json([
            'status' => 'deleted'
        ],200);
    }


}
