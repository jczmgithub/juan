<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuPermitido extends Model
{
    use Notifiable;

    protected $table = 'usuPermitidos';

    protected $fillable = ['nombreUsu',];

    public function isAdmin() {
        return $this->permiso;
    }
}
