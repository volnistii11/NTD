<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicSection extends Model
{
    use HasFactory;

    public function basicCards() {
        return $this->hasMany(BasicCard::class);
    }
}
