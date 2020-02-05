<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function posts() {
        return $this->hasMany(Post::class);
    }

    public function getCategories() {
        return $this::all();
    }

    public function createCategories($request) {
        return $this::create($request);
    }
}
