<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    //managing all roles
    //add role
    //edit role
    //delete role
    public function index()
    {
        //getting all role available
        try {
            $roles = Role::whereNotIn('name', ['admin'])->get();
            return response()->json($roles, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }


    public function addRole(Request $request)
    {
        $request->validate(['name' => ['required', 'min:3','unique:'.Role::class]]);

        try {
            //storing a new role
            $role = new Role();
            $role->name = $request->input('name');
            $role->save();
            return response()->json("Role Created successfully", 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

    public function getRole($id)
    {
        //getting one role available
        try {
            $role = Role::find($id);
            return response()->json($role, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
    public function update(Request $request, Role $role)
    {
        //updating an existing role
        $validated = $request->validate(['name' => ['required', 'min:3']]);
        $role->update($validated);

        
    }

    public function deleteRole($id)
    {
        try {
            //delete a role
            $role = Role::find($id);
            $role->delete();
           
            return response()->json("Role Deleted successfully", 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
        
    }

 
}
