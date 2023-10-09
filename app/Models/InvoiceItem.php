<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InvoiceItem extends Model
{
    use HasFactory;

    protected $fillable =[
        'product_name',
        'invoice_id',
        'product_id',
        'quantity',
        'amount'
    ];

    public function product():BelongsTo
    {
        return $this->belongsTo(Product::class,'product_id');
    }

    public function invoice():BelongsTo
    {
        return $this->belongsTo(Invoice::class,'invoice_id');
    }
}
