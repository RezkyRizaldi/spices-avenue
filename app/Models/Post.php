<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    /**
     *
     * @var array<int, string>
     */
    protected $fillable = ['category_id', 'title', 'slug', 'image', 'body'];

    /**
     *
     * @var array<int, string>
     */
    protected $appends = ['date'];

    /**
     *
     * @var array<string, string>
     */
    protected $casts = [
        'published_at' => 'datetime:d-m-Y',
        'created_at' => 'datetime:d-m-Y',
        'updated_at' => 'datetime:d-m-Y',
    ];

    protected function publishedAt(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('d M Y'),
        );
    }

    protected function date(): Attribute
    {
        return new Attribute(
            get: fn () => date('F Y', strtotime($this->published_at)),
        );
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function scopeFilter(Builder $query, ?string $filter)
    {
        $query->when($filter ?? false, fn (Builder $query, string $filter) => $query->where('title', 'like', "%{$filter}%"));
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function next(): Model|static|null
    {
        return $this->where('id', '>', $this->id)
            ->orderBy('id')
            ->select(['category_id', 'title', 'slug', 'image', 'body', 'published_at'])
            ->first();
    }

    public function previous(): Model|static|null
    {
        return $this->where('id', '<', $this->id)
            ->orderByDesc('id')
            ->select(['category_id', 'title', 'slug', 'image', 'body', 'published_at'])
            ->first();
    }
}
