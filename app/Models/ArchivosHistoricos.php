<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArchivosHistoricos extends Model
{
    use HasFactory;
    protected $fillable = [
        'AHT_nombre',
        'AHT_ruta'
    ];
}
