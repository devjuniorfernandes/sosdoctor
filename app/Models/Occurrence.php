<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Report;

class Occurrence extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name_patients',
        'phone_patients',
        'address_patients',
        'age_patients',
        'subject',
        'description',
        'urgency',
        'status',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function report() {
        return $this->belongsTo(Report::class);
    }
}
