<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    public function children()
    {
        return $this->hasMany(Club::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Club::class, 'parent_id');
    }
}
