<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cancelamento extends Model
{
  protected $table = "cancelamentos";
  public function reserva(){
    return $this->belongsTo('App\Reserva');
  }
}
