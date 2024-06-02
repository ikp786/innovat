<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Str;
use Illuminate\Database\Eloquent\Builder;

class Page extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'service_id', 'image', 'description', 'status', 'slug'];

    protected function status(): Attribute
    {
        return Attribute::make(
            set: fn(string $value) => $value ? true : false,
        );
    }

    function service() : BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function pageFilter($request)
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