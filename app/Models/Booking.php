<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Service;

#[Fillable([
    'service_id',
    'client_name',
    'client_email',
    'client_phone',
    'starts_at',
    'price',
    'duration_minutes',
    'status',
    'notes',
])]
class Booking extends Model
{
    protected function casts(): array
    {
        return [
            'starts_at' => 'datetime',
            'price' => 'decimal:2',
            'duration_minutes' => 'integer',
        ];
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }
}
