<?php
namespace App\Http\Controllers;

class LegoController extends Controller
{
    public function index() {
        $imagenes = ['lg1.jpg', 'lg2.jpg', 'lg3.jpg']; 
        return view('secciones.lego', compact('imagenes'));
    }
}