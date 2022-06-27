<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Occurrence;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'id_ocurrence',
        'description',
        'urgency',
        'status',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function occorrence() {
        return $this->hasOne(Occurrence::class, 'id', 'id_ocurrence');
    }

}
