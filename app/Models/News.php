<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Str;

class News extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['title', 'sort_description', 'image', 'description', 'status', 'slug'];

    protected function status(): Attribute
    {
        return Attribute::make(
            set: fn(string $value) => $value ? true : false,
        );
    }

    public function newsFilter($request)
    {
        return $this->when($request->title, function ($query, $title) {
            $query->where('title', 'like', '%' . $title . '%');
        });
    }

    public function scopeActive(Builder $query): void
    {
        $query->where('status', true);
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($category) {
            $category->slug = Str::slug($category->title);
        });

        static::updating(function ($category) {
            if ($category->isDirty('title')) {
                $category->slug = Str::slug($category->title);
            }
        });
    }
}