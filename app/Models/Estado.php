<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;
    protected $fillable = [
    	'STA_estado',
    	'STA_observacion',
    	'STA_inicio',
    	'STA_fin'
    ];
    public function seguimiento()
    {
        return $this->belongsTo(Seguimiento::class,'seguimiento_id');
    }
}
