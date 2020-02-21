<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{



    public function verProducto($id)
    {
        return	view('productos.producto', array('id'=>$id));
    }
    public function verComponentes()
    {
        return	view('productos.componentes',  array('id'=>$id));
    }
    public function verOrdenadores()
    {
        return	view('productos.ordenadores',  array('id'=>$id));
    }
    public function verTelefonia()
    {
        return	view('productos.telefonia',  array('id'=>$id));
    }
    public function verPerifericos()
    {
        return	view('productos.perifericos',  array('id'=>$id));
    }
    public function verFotografia()
    {
        return	view('productos.fotografia',  array('id'=>$id));
    }
    public function verTelevisores()
    {
        return	view('productos.televisores' , array('id'=>$id));
    }
    public function verTablets()
    {
        return	view('productos.tablets',  array('id'=>$id));
    }
    public function verConsolas()
    {
        return	view('productos.consolas',  array('id'=>$id));
    }
    public function verImpresoras()
    {
        return	view('productos.impresoras',  array('id'=>$id));
    }
}
