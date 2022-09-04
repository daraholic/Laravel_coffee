<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Parameter extends Model
{
    use Uuid;

    protected $fillable = [
        'gram',
        'water',
        'brewRatio',
        'time',
        'bean_id',
    ];

    public function bean(): BelongsTo
    {
        return $this->belongsTo(Bean::class, 'bean_id', 'id');
    }
}