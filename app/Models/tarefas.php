<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tarefas extends Model
{
    // use HasFactory;

    protected $fillable = ['tarefa'];
    protected $table = 'tarefas';
    use SoftDeletes;
}