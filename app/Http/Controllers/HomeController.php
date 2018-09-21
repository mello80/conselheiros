<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    
    public function index()
    {

    	return view('home');

    }


    public function login(Request $req)
    {
        
    	$dados = $req->all();
    	
        if (Auth::attempt(['email' => $dados['email'], 'password' => $dados['password'], 'grupo' => 'administrador']))
        {
            // Authentication passed...
            return redirect('admin/conselho-curador');
        }

        if (Auth::attempt(['email' => $dados['email'], 'password' => $dados['password'], 'grupo' => 'conselho-curador']))
        {
            // Authentication passed...
            return redirect('conselho-curador');
        }

    }

    public function logout()
    {
    	Auth::logout();
    	return redirect('/');
    }

}
