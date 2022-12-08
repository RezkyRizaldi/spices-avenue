<?php

namespace App\Models;

use Encore\Admin\Traits\Resizable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Gallery extends Model
{
    use HasFactory;
    use Resizable;

    /**
     * @var array<int, string>
     */
    protected $fillable = ['name', 'image'];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'created_at' => 'datetime:d-m-Y',
        'updated_at' => 'datetime:d-m-Y',
    ];

    public static function boot(): void
    {
        parent::boot();

        static::deleting(function (Gallery $gallery) {
            $image = public_path("storage/{$gallery->image}");

            if (File::exists($image)) {
                unlink($image);
            }
        });
    }
}
