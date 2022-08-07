<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'task';

    protected $fillable = [
        'kod_giatmara',
        'title',
        'description',
        'status',
        'project_id',
        'user_id',
    ];
}
