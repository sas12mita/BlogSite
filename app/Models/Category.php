<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['categoryName'];
    public function article()
    {
        return $this->hasMany(Article::class);
    }
}
