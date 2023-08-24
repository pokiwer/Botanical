<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    use HasFactory;
    protected $table = 'deals';
    protected $fillable = ['tree_id', 'sale', 'toprate'];

    public function tree()
    {
        return $this->belongsTo(Tree::class);
    }
}
