<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    use HasFactory;
    static $rules=[
        'title' => 'required|string|max:255',
        'start' => 'required|date',
        'end' => 'required|date',
        'proffesor' => 'required|string',
        'fname' => 'required|string',
    ];

    protected $fillable = [
        'title',
        'start',
        'end',
        'proffesor',
        'fname',
    ];
}
