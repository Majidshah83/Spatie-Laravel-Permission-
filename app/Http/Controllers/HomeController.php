<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      // // $role=Role::create(['name'=>'writer']);          //create writer role
      //  $permission=Permission::create(['name'=>'edit post']); //create  role is edit post
      //   $role=Role::find(1);                       //find role 1
      //   // $permission=Permission::find(1);        //find permission is edit post
      //   $role->givePermissionTo($permission);      //give permission to role

    // $role=Role::create(['name'=>'admin']);
    //  $permission=Permission::create(['name'=>'access dashboard']);
    //  $role->givePermissionTo($permission);
        $role=Role::find(1);
        $permission=Permission::find(2);
        $permission->removeRole($role);//remove permission 
         $role->revokePermissionTo($permission);//remove permission full 
        
        return view('home');
    }
}
