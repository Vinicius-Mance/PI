<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserva;
use Illuminate\Support\Facades\DB;
class ReservasController extends Controller
{
    function reservarQuarto(Request $request){
      $validacoes = $request->validate([
        "entrada" => "required|date|after:today",

        "saida" => "required|date",

        "cpf" => "required|size:11",

        "celular" => "required|between:9,13",

        "numeroCartao" => "required|between:10,16",

        "nomeCartao" => "required",

        "validade" => "required:size:3",

        "codSegurança" => "required|size:3",
      ]);
      $reserva = new Reserva;

      $to = \Carbon\Carbon::createFromFormat('Y-m-d', $request->saida);
      $from = \Carbon\Carbon::createFromFormat('Y-m-d', $request->entrada);
      $diff_in_days = $to->diffInDays($from);

      $reserva->dataIN = $request->entrada;

      $reserva->dataOUT = $request->saida;

      $reserva->valor = $diff_in_days * $request->valor;

      $reserva->numeroCartao = $request->numeroCartao;

      $reserva->nomeCartao = $request->nomeCartao;

      $reserva->usuarios_id = $request->usuarios_id;

      $reserva->quartos_id = $request->quartos_id;

      $reserva->estabelecimentos_id = $request->estabelecimentos_id;

      $reserva->save();

      return redirect('/perfil/'.$request->usuarios_id);
    }

    public function exibirReservas($id){
      $reservas_user =  DB::select(DB::raw("select e.nome as hotel,q.nome as quarto, valor,caminho as foto,
      	dataIN as entrada, dataOUT as saida
      	from reservas r
      	inner join estabelecimentos e on e.id = r.estabelecimentos_id
          inner join quartos q on q.id = r.quartos_id
          inner join imagens i on i.estabelecimentos_id = q.estabelecimentos_id
      	where r.usuarios_id = $id
      	group by r.id;"));
      return view('exibirReservas',["_ID"=>$id], compact('reservas_user'));
    }
}
