<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicabilityCard extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'designation',
        'cypher',
        'basic_card_id'
    ];

    public function basicCard()
    {
        return $this->belongsTo(BasicCard::class);
    }
}
