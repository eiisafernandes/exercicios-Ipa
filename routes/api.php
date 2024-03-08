<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('usuario', function(Request $request){
    $nome = $request->input('nome');
    return $nome;
    
});