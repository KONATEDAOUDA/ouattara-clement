<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Purifier;

class Post extends Model
{
    protected $fillable = [
        'title', 'content', 'image', 'category_id', 'user_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function setContentAttribute($value)
    {
        $this->attributes['content'] = Purifier::clean($value);
    }

}
