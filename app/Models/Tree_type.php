<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tree_type extends Model
{
    use HasFactory;
    protected $table = 'tree_types';
    protected $fillable = ['name'];
}
