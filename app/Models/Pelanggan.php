<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'nomor_kwh',
        'alamat',
        'id_tarif'
    ];

    public function tarif()
    {
        return $this->belongsTo(Tarif::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
