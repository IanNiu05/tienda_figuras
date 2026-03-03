<?php
namespace App\Http\Controllers;

class FunkoController extends Controller
{
    public function index() {
    
        $imagenes = ['fu1.jpg', 'fu2.jpg', 'fu3.jpg']; 
        
       
        return view('secciones.funkos', compact('imagenes'));
    }
}