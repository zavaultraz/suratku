<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suratKeluar extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomor_surat',
        'isi_surat',
        'category_id',
        'link',
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
    public function suratMasuk()
    {
        return $this->belongsTo(suratMasuk::class);
    }
    public function suratKeluar()
    {
        return $this->belongsTo(suratKeluar::class);
    }
}
