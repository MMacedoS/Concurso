<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;
    protected $table = 'estado';

    protected $primaryKey = 'estado_id';

    public $timestamps = false;

    protected $fillable = [
	    'nome',
        'sigla'
	];


    public static function createEstado(Estado $estado){
    	return $estado->save();
    }
    public function pessoa()
    {
        return $this->hasOne("App\Models\PessoaFisica", 'estado_id');
    }
}
