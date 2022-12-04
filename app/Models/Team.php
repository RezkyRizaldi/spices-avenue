<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    /**
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'slug', 'position', 'image'];

    /**
     *
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
}
