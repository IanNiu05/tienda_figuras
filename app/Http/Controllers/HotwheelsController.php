<?php
namespace App\Http\Controllers;

class HotwheelsController extends Controller
{
    public function index() {
        $imagenes = ['hw1.jpg', 'hw2.jpg', 'hw3.jpg']; 
        return view('secciones.hotwheels', compact('imagenes'));
    }
}