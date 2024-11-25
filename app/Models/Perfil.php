<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use OwenIt\Auditing\Contracts\Auditable;

class Perfil extends Model
{
    use HasFactory;

    use \OwenIt\Auditing\Auditable;

    protected $table= 'perfil';


    public function autor(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function anuncios()
    {
        return $this->hasMany(Anuncio::class, 'id', 'anuncio_id', 'user_id');
    }


}


