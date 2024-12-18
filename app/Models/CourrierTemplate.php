<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourrierTemplate extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content'];

    public function courrier()
{
    return $this->belongsTo(Courrier::class);
}
}