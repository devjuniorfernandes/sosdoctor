<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhysicalExam extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_historic',
        'habit',
        'skin',
        'head',
        'eyes',
        'teeth',
        'ears',
        'face',
        'neck',
        'thyroid',
        'ap_cardiovascular',
        'ap_respiratory',
        'ap_gi',
        'ap_genitourinary',
        'ap_osteoarticular',
        'sns',
    ];

    public function historic() {
        return $this->belongsTo(Historic::class);
    }
}
