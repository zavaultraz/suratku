<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'user_id',
    ];

    public function suratMasuk()
    {
        return $this->hasMany(suratMasuk::class);
    }
    public function suratKeluar()
    {
        return $this->hasMany(suratKeluar::class);
    }
    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
