<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suratMasuk extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_surat',
        'isi_surat',
        'link',
        'category_id',
        'tanggal_surat',
        'slug',
        'user_id',
    ];

    public function category()
    {
        return $this->belongsTo(category::class);
    }
    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
