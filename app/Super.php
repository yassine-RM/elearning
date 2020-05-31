<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Super extends Model
{
    protected $table='supers';
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
