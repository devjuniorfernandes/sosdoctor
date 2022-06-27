<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Justification extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'bi_user',
        'name_patients',
        'description',
        'date',
        'days',
        'after',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
