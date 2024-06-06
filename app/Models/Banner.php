<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banner extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['title', 'description', 'image', 'url', 'button_name'];

    public function bannerFilter($request)
    {
        return $this->when($request->title, function ($query, $title) {
            $query->where('title', 'like', '%' . $title . '%');
        });
    }

    public function scopeActive(Builder $query): void
    {
        $query->where('status', true);
    }

}
