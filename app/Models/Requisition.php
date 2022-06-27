<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisition extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name_patients',
        'age_patients',
        'pre_diagnosis',
        'exams',
        'date',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
