<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function users()
    {
        return $this->hasMany(Employee::class);
    }

    public function courriers()
    {
        return $this->hasMany(Courrier::class);
    }
}