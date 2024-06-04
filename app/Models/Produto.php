<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';

    protected $fillable = [
        'nome', 'descricao', 'preco', 'cor', 'tamanho', 'categoria_id', 'img_url'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}