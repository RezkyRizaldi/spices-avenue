<?php

namespace App\Models;

use Encore\Admin\Traits\Resizable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Product extends Model
{
    use HasFactory;
    use HasSlug;
    use Resizable;

    /**
     * @var array<int, string>
     */
    protected $fillable = ['name', 'slug', 'description', 'image'];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'created_at' => 'datetime:d-m-Y',
        'updated_at' => 'datetime:d-m-Y',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public static function boot(): void
    {
        parent::boot();

        static::deleting(function (Product $product) {
            $image = public_path("storage/{$product->image}");

            if (File::exists($image)) {
                unlink($image);
            }
        });
    }
}
