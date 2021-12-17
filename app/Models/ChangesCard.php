<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChangesCard extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'notice_number',
        'date',
        'sheets',
        'basic_card_id'
    ];

    public function basicCard()
    {
        return $this->belongsTo(BasicCard::class);
    }
}
