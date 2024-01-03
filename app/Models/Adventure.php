<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adventure extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $with = ['guide', 'category'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function guide() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function difficulty()
    {
        return $this->belongsTo(Difficulty::class);
    }


}
