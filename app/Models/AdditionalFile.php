<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdditionalFile extends Model
{
    use HasFactory;

    protected $fillable = [
      'file_name',
      'file_path',
      'additional_card_id'
    ];

    public function additionalCard(){
        return $this->belongsTo(AdditionalCard::class);
    }
}
