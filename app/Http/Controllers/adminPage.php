<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class adminPage extends Controller
{
  public function handleAdmin()
  {

    $data  =  DB::table('users')
    ->join('roles', 'roles.id','=','users.roles_id')
    ->select('users.name','users.roles_id','users.email','users.id','roles.role_name')->get();

      return view('adminDash',['values'=>$data]);
  }
  public function editPage($id)
  {
    $data = User::find($id);
      return view('editPage',['values'=>$data]);
  }
  public function update(Request $request)
  {

    $data = User::find($request->id);
    $data->name = $request->name;
    $data->email = $request->email;
     $data->save();
  return redirect()->route('admin.route');

  }
  public function delete($id)
  {
      $data = User::find($id);
      $data->delete();
      return redirect()->route('admin.route');
  }


}
