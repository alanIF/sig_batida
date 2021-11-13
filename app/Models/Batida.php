<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batida extends Model
{
    use HasFactory;
    protected $table = 'batida';
    protected $fillable= ['id_funcionario','horario','data_batida'];
}
