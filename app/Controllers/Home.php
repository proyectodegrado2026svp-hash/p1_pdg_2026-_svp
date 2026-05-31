<?php

namespace App\Controllers;

use App\Models\EstudianteModel;

class Home extends BaseController
{
    public function index(): string
    {
        $model = new EstudianteModel();
        $data['estudiantes'] = $model->findAll();
        
        // Eliminamos el dd() para que muestre la vista bonita
        return view('welcome_message', $data);
    }
}