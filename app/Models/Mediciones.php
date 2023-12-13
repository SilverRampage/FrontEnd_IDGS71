<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mediciones extends Model
{
    use HasFactory;

    protected $table="mediciones";
    protected $primaryKey="id_medicioneslad1dht";
    protected $fillable = [
        'humedad_mlad1dht',
        'temperatura_mlad1dht',
        'fecha_hora_mlad1dht',
    ];

}
