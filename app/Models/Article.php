<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'content', 'category_id', 'user_id', 'photo'];

    /**
     * Get the category that owns the post.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the user that owns the post.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Handle the photo upload and store the file path.
     */
    public function uploadPhoto($file)
    {
        $path = $file->store('public/posts');  // Store in 'storage/app/public/posts'
        return $path;
    }
}
