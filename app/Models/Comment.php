<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    /**
     *
     * @var array<int, string>
     */
    protected $fillable = ['post_id', 'name', 'email', 'website', 'message'];

    /**
     *
     * @var array<string, string>
     */
    protected $casts = [
        'created_at' => 'datetime:d-m-Y',
        'updated_at' => 'datetime:d-m-Y',
    ];

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
