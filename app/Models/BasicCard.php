<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicCard extends Model
{
    use HasFactory;

    protected $fillable = [
        'card_index',
        'document_number',
        'sheet',
        'continue_on_sheet',
        'document_name',
        'subdivision',
        'continue_on_company',
        'edition',
        'svetok',
        'original_inventory_number',
        'original_date_supply',
        'original_number_of_sheets',
        'duplication_inventory_number',
        'duplication_date_supply',
        'duplication_number_of_sheets',
        'tk_inventory_number',
        'tk_date_supply',
        'tk_number_of_sheets',

        'basic_format_id',
        'basic_section_id'
    ];

    public function basicFormat()
    {
        return $this->belongsTo(BasicFormat::class);
    }

    public function basicSection()
    {
        return $this->belongsTo(BasicSection::class);
    }

    public function additionalCards()
    {
        return $this->hasMany(AdditionalCard::class);
    }

    public function applicabilityCards()
    {
        return $this->hasMany(ApplicabilityCard::class);
    }

    public function changesCards()
    {
        return $this->hasMany(ChangesCard::class);
    }

    public function copiesCards()
    {
        return $this->hasMany(CopiesCard::class);
    }
}
