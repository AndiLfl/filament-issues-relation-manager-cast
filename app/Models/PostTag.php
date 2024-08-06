<?php

namespace App\Models;

use App\Casts\ExampleCast;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class PostTag extends Pivot
{
    protected $fillable = [
        'tag_id',
        'post_id',
        'value'
    ];

    protected $casts = [
        'value' => ExampleCast::class,
    ];

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }

    public function tag(): BelongsTo
    {
        return $this->belongsTo(Tag::class);
    }
}
