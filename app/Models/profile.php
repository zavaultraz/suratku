<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 
        'image',  
        'first_name'
    ];
    //relasi profile to user 
    public function user(){
        return $this->belongsTo(User::class);
    }
    //accessor image profile
    public function image() : Attribute{
        return Attribute::make(
            get: fn ($value) => asset('storage/profile/' .$value),
        );
        
    }
}
