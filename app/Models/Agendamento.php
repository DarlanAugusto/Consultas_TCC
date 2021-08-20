<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agendamento extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'agendamentos';
    protected $fillable = ['data_hora', 'tipo', 'unidade'];
}
