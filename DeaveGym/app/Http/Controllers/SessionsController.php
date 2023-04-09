<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionsController extends Controller
{
    public function create () {
        return view('auth.login');
    }
    public function store() {
        if(auth()->attempt(request (['email', 'password'])) == false) {
            return back()->withErrors([
            'message' => 'Correo o contraseña inconrrectos, intente de nuevo'
            ]);
        } else {
            if (auth()->user()->role == 'admin'){
                return redirect()-> route ('admin.index');
            }else {
                if (auth()->user()->role == 'coach'){
                    return redirect()-> route ('coach.index');
                }else{
                    return redirect()->to ('/home');
                }
            }
        } 
 
    }
    public function destroy(){

        auth()->logout();

        return redirect()->to('/view1');
    }
}
