<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tree extends Model
{
    use HasFactory;
    protected $table = 'trees';
    protected $fillable = ['tree_type_id', 'name', 'image', 'size', 'description', 'quality', 'price'];

    public function tree_type()
    {
        return $this->belongsTo(Tree_type::class);
    }

    public function deal()
    {
        return $this->hasMany(Deal::class);
    }
}
