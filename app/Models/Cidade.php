<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;

    protected $table = 'cidade';

    protected $primaryKey = 'cidade_id';

    public $timestamps = false;

    protected $fillable = [
	    'nome',
        'estado_id'
	];


    public static function createCidade(Cidade $cidade){
    	return $cidade->save();
    }
}
