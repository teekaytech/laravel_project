<?php

namespace App;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'category_id'];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function createPost($request) {
        return $this::create($request);
    }

    public function updatePost($request) {
        return $this::update($request);
    }

    public function deletePost() {
        return $this->delete();
    }
}
