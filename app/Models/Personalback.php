<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personalback extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_historic',
        'dyslipidemias',
        'diabetes',
        'hypertension',
        'allergies',
        'tobacco',
        'alcohol',
        'toxic',
        'traumatological',
        'numberchildren',
        'others',
        'diuresis',
        'evacuation',
        'stresslevel',
        'activity',
    ];

    public function historic() {
        return $this->belongsTo(Historic::class);
    }
}
