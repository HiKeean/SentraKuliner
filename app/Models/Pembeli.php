<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;
    protected $fillable = [
        'idUser',
        'nama_kantor',
        'lantai',
        'nomor_kantor',
        'fullname',
        'gotitip',
        'gotitip_created',
        'gotitip_act',
        'gotitip_activated',
        'idComplained'
    ];

    // Tentukan relasi dengan User jika `idUser` adalah foreign key
    public function user()
    {
        return $this->belongsTo(User::class, 'idUser');
    }
}
