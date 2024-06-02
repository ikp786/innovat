<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Str;
use Illuminate\Database\Eloquent\Builder;

class Service extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['title', 'icon', 'image', 'description', 'status', 'slug'];

    // Define the relationship to the Page model
    public function pages()
    {
        return $this->hasMany(Page::class);
    }
    protected function status(): Attribute
    {
        return Attribute::make(
            set: fn(string $value) => $value ? true : false,
        );
    }

    public function serviceFilter($request)
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
