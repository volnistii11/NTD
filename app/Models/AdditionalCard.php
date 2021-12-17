<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdditionalCard extends Model
{
    use HasFactory;

    protected $fillable = [
        'document_drive_storage',
        'full_disk_sccrc32',
        'check_sc_date',
        'ct_mode',
        'letter',
        'note',
        'basic_card_id',
        'additional_mark_id',
    ];

    public function additionalMark()
    {
        return $this->belongsTo(AdditionalMark::class);
    }

    public function basicCard()
    {
        return $this->belongsTo(BasicCard::class);
    }

    public function additionalFiles()
    {
        return $this->hasMany(AdditionalFile::class);
    }
}
