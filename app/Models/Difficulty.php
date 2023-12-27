<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Difficulty extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function adventure()
    {
        return $this->belongsTo(Adventure::class);
    }
}
