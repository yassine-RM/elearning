<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Departement;
use App\Cycle;
class Filiere extends Model
{
    
  protected $table='filieres';
    protected $fillable=[
        'id',
        'nom',
        'dapartement_id',
        'cycle_id',
        
    ];
        public function departement()
        {
          return $this->belongsTo(Departement::class);
        }
        public function cycle()
        {
          return $this->belongsTo(Cycle::class);
        }
       
     
   
    public $timestamps=false;
}
