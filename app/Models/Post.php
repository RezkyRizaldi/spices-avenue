<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'image', 'body'];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function scopeFilter(Builder $query, ?string $filter)
    {
        $query->when($filter ?? false, fn (Builder $query, string $filter) => $query->where('title', 'like', "%{$filter}%"));
    }

    public function next(): Model|static|null
    {
        return $this->where('id', '>', $this->id)->orderBy('id')->first();
    }

    public  function previous(): Model|static|null
    {
        return $this->where('id', '<', $this->id)->orderByDesc('id')->first();
    }
}
