<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concurso extends Model
{
    use HasFactory;

    protected $table = 'concurso';

    protected $fillable = [
        'cargo','cidade_id','vagas','observacao'
    ];


    public function cidade()
    {
        return $this->hasOne(Cidade::class, 'cidade_id');
    }
}
