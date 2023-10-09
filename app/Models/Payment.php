<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'mode',
        'user_id',
        'invoice_id',
        'card_id',
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function invoice():BelongsTo
    {
        return $this->belongsTo(User::class,'invoice_id');
    }

    public function card():BelongsTo
    {
        return $this->belongsTo(Card::class,'card_id');
    }
}
