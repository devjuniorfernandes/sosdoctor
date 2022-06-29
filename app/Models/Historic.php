<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Historic extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name_patients',
        'gender_patients',
        'bi_patients',
        'number_patients',
        'address_patients',
        'local_patients',
        'birth_date_patients',
        'civil_status_patients',
        'spouse_patients',
        'parents_patients',
        'profission_patients',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
