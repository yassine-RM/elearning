<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrateur extends Model
{
  protected $table='administrateurs';
    protected $fillable=[
        'id',
        'cin',
        'nom',
        'prenom',
        'email',
        'password',
        'telephone',
        'date_naissance',
        'adress'
    ];
    public $timestamps=false;
}
