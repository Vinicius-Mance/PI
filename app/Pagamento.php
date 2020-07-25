<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
  protected $table = "pagamentos";
  public function reserva(){
    return $this->belongsTo('App\Reserva');
  }
}
