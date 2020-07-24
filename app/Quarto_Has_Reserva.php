<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quarto_Has_Reserva extends Model
{
  protected $table = "quarto_has_reservas";
  public function quarto(){
    return $this->belongsTo('App\Quarto');
  }

  public function reserva(){
    return $this->belongsTo('App\Reserva');
  }
}
