<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Executive extends Model
{
    use HasFactory;
    protected $fillable=[
        'dui',
        'direction',
        'category',
        'user_id',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function user()
    {
        return $this->hasMany(Executive::class);
    }
}
