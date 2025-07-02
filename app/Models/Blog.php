<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'order',
        'top_image',
        'top_description',
        'slug',
        'listing_description',
        'releted_post_id',
        'view_count',
        'status',
        'created_by',
        'updated_by',
        'deleted_by'
    ];  



    public function createdUser()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    // The name MUST be get...Attribute
    public function getTopImageUrlAttribute(): string
    {
        return $this->top_image ? (new \App\Helpers\StorageHelper('blog', $this->top_image))->getUrl() : asset('back/img/profileicon.jpg');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function getCountCommentsAttribute(): int
    {
        return $this->comments()->count();
    }

}
