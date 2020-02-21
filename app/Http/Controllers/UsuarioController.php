<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function verPerfil($id)
    {
        return	view('usuario.perfil', array('id'=>$id));
    }


}
