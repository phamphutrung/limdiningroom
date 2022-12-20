<?php

namespace App\Models\Traits\Relationships;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 *
 */
trait MessageRelationship
{
    /**
     * Get the customer that owns the MessgageRelationship
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }
}
