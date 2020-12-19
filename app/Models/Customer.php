<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static isProcessed(mixed $isProcessed)
 */
class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'is_processed',
    ];

    protected $table = 'customers';

    public function scopeIsProcessed($query, $isProcessed)
    {
        if ($isProcessed == 'yes')
            $query->where('is_processed', 1);
        else if ($isProcessed == 'no')
            $query->where('is_processed', 0);
        else
            null;
    }
}
