<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TAndCDocument extends Model
{
    /** @use HasFactory<\Database\Factories\TAndCDocumentFactory> */
    use HasFactory;



    public function sections() {
        return $this->hasMany(DocumentSection::class, 'document_id', 'id');
    }
}
