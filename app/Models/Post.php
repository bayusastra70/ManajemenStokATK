<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'posts';
    protected $primaryKey = 'post_id';
    protected $guarded = ['post_id'];
    protected $fillable = [
        'post_image',
        'post_title',
        'post_description',
        'post_category_id',
        'user_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'post_category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
