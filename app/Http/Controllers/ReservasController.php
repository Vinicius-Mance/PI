<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserva;
class ReservasController extends Controller
{
    function reservarQuarto(Request $request){
      $validacoes = $request->validate([
        "entrada" => "required|date",

        "saida" => "required|date",

        "cpf" => "required|size:11",

        "celular" => "required|between:9,13",

        "numeroCartao" => "required",

        "nomeCartao" => "required",

        "validade" => "required",

        "codSegurança" => "required|size:3",
      ]);
      $reserva = new Reserva;

      $reserva->dataIN = $request->entrada;
      $reserva->dataOUT = $request->saida;
      $reserva->usuarios_id = $request->usuarios_id;
      $reserva->estabelecimentos_id = $request->estabelecimentos_id;
      $reserva->quartos_id = $request->quartos_id;
      $reserva->numeroCartao = $request->numeroCartao;
      $reserva->nomeCartao = $request->nomeCartao;
      // dd($request->all());

      $to = \Carbon\Carbon::createFromFormat('Y-m-d', $request->saida);
      $from = \Carbon\Carbon::createFromFormat('Y-m-d', $request->entrada);

      $diff_in_days = $to->diffInDays($from);
      $reserva->valor = $diff_in_days * $request->valor;
      dd($request->all(),$reserva);
      // $reserva->save();
    }
}
