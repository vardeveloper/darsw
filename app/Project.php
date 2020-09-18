<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Traits\Resizable;

class Project extends Model
{
    use Resizable;

    protected $fillable = [
        'name',
        'slug',
        'location',
        'description',
        'video',
        'images',
        'category_id',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class)->first();
    }

}
