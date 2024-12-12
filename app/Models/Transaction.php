<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'courrier_id',
        'user_id',
        'action',
        'timestamp',
        'comments',
    ];

    public function courrier()
    {
        return $this->belongsTo(Courrier::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}