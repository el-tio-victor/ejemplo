<?php

namespace App\Http\Controllers;
use App\User;

use Symfony\Component\HttpFoundation\Request;
use Laracasts\Flash\Flash;

use App\Http\Requests\UserRequest;


//use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function  __construct()
    {
        $this->middleware(['auth','admin']);
    }
    
    public function create(){
        //dd('mensaje');
        return view('dashboard.users.create');
    }
    public function store(UserRequest $r){
        $user= new User($r->all());
        $user->password=bcrypt($r->password);
        $user->save();
        flash('Usuario '.$user->name.' Registrado con exito')->success();
        return redirect()->route('users.index');
     }
    public function index(){
       
         $users=User::orderBy('id','ASC')->paginate(5);
         return view('dashboard.users.index')->with('users',$users);
     } 

    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        flash('El usuario '.$user->name.' se eliminó con exito')->success();
        return redirect()->route('users.index');
     }
    public function edit($id){
        $user =User::find($id);

        return view('dashboard.users.edit')->with('user',$user);
    }

    public function update(Request $r,$id){
        $user= User::find($id);
        $user->name=$r->name;
        $user->email=$r->email;
        $user->type=$r->type;
        $user->save();
        flash('Los campos del Usuario han sido actualizados <br> Con exito')->success();
        return redirect()->route('users.index');
    }

}
