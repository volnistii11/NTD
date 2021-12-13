<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdditionalMark extends Model
{
    use HasFactory;

    public function additionalCards()
    {
        return $this->hasMany(AdditionalCard::class);
    }
}
