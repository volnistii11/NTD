<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CopiesCard extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'reason_copy',
        'received_quantity',
        'cancel_quantity',
        'basic_card_id',
    ];

    public function basicCard()
    {
        return $this->belongsTo(BasicCard::class);
    }
}
