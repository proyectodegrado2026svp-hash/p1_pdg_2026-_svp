<?php
namespace App\Models;
use CodeIgniter\Model;

class EstudianteModel extends Model
{
    protected $table      = 'estudiante';
    protected $DBGroup    = 'default';
    protected $primaryKey = 'ci_persona';
}