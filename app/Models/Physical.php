<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Physical extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_historic',
        'name_company',
        'plan_health',
        'number_plan',
    ];

    public function historic() {
        return $this->belongsTo(Historic::class);
    }
}
