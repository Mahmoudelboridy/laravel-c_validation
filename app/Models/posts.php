<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    use HasFactory;
    public $table="posts";
    protected $fillable =[
        'title',
        'content'
    ];
    protected $hidden=[
        'created_at',
        'updated_at'
    ];
}