<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Schedules extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date_schedules',
        'name_patients',
        'phone_patients',
        'address_patients',
        'age_patients',
        'subject',
        'description',
        'status',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

}
