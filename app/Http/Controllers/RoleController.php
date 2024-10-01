<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){
        $role = Role::orderBy('id','desc')->get();
        return response()->json([
            "roles"=>$role
        ]);
    }

    public function CreateRole(Request $request){
        $this->validate($request,[
            "name"=>"required"
        ]);
        $role = Role::create([
            "name"=>$request->name
        ]);
        return response()->json([
            "news"=>$role
        ]);
    }

    public function showRole($id){
        $role = Role::find($id);
        return response()->json([
            "role"=>$role
        ]);
    }

    public function updateRole(Request $request, $id){
        $rls = Role::find($id);
        $role = $rls->update($request->all());
        return response()->json([
            "updaterole"=>$role
        ]);
    }

    public function deleteRole(Request $request, $id){
        $rls = Role::find($id);
        $role = $rls->delete();
        return response()->json([
            "role"=>$role
        ]);
    }
}
