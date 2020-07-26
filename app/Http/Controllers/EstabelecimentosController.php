<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estabelecimento;
use App\Imagem;
use App\Quartos;
use Illuminate\Support\Facades\DB;

class EstabelecimentosController extends Controller
{
  function hotelAdmin()
  {
    $hoteis = Estabelecimento::all();
    return view('hotelAdmin', compact('hoteis'));
  }

  function dadosHotelAdmin($id)
  {
    $hotel = Estabelecimento::find($id);
    return view('dadosHotelAdmin',["_ID"=>$id], compact('hotel'));
  }
  function cadastroHotel(Request $request)
  {

    $validacoes = $request->validate([
      "nome" => "required",

      "email" => "required|unique:estabelecimentos",

      "cnpj" => "required|size:14",

      "endereco" => "required",

      "cep" => "required|size:8",

      "cidade" => "required",

      "estado" => "required",

      "tel1" => "required|between:12,14",

      "tel2"=>"required|between:12,14",

      "celular"=>"required|between:13,15",

      "descricao"=>"required",

      "numEstrelas"=>"required|integer|between:1,5",

      "fotos"=>"required"
    ]);
    $hotel = new Estabelecimento;

    $hotel->nome = $request->nome;

    $hotel->email = $request->email;

    $hotel->cnpj = $request->cnpj;

    $hotel->endereco = $request->endereco;

    $hotel->cep = $request->cep;

    $hotel->cidade = $request->cidade;

    $hotel->estado = $request->estado;

    $hotel->tel1 = $request->tel1;

    $hotel->tel2 = $request->tel2;

    $hotel->celular = $request->celular;

    $hotel->descricao = $request->descricao;

    $hotel->wifi = $request->wifi;

    $hotel->cafeDaManha = $request->cafeDaManha;

    $hotel->piscina = $request->piscina;

    $hotel->sauna = $request->sauna;

    $hotel->permitePets = $request->permitePets;

    $hotel->cancelamentoGratuito = $request->cancelamentoGratuito;

    $hotel->fotos = $request->fotos;

    $hotel->numEstrelas = $request->numEstrelas;

    $hotel->save();
      $id = $hotel->id;
        for($i=0; $i<count($request->allFiles()['fotos']); $i++){
          $file = $request->allFiles()['fotos'][$i];

          $imagem = new imagem();

          $imagem->estabelecimentos_id = $hotel->id;
          $imagem->caminho = $file->store('/imagensHotel');
          $imagem->save();
          unset($imagem);
        }
    return redirect('/cadastroQuartos/'.$id);
  }




  public function editarDadosHotel($id){
    $hotel = Estabelecimento::find($id);
    $imagem = DB::select("
    select caminho
        from imagens
        where estabelecimentos_id = $id;
    ");
    foreach($imagem as $foto){$fotos[] = $foto->caminho;}

    return view('/editarDadosHotel',["_ID"=>$id], compact('hotel', 'fotos'));
  }



  public function salvaDadosHotel(Request $request, $id){

    $hotel = Estabelecimento::find($id);

    $hotel->nome = $request->nome;

    $hotel->email = $request->email;

    $hotel->cnpj = $request->cnpj;

    $hotel->endereco = $request->endereco;

    $hotel->cep = $request->cep;

    $hotel->cidade = $request->cidade;

    $hotel->estado = $request->estado;

    $hotel->tel1 = $request->tel1;

    $hotel->tel2 = $request->tel2;

    $hotel->celular = $request->celular;

    $hotel->descricao = $request->descricao;

    $hotel->wifi = $request->wifi;

    $hotel->cafeDaManha = $request->cafeDaManha;

    $hotel->piscina = $request->piscina;

    $hotel->sauna = $request->sauna;

    $hotel->permitePets = $request->permitePets;

    $hotel->cancelamentoGratuito = $request->cancelamentoGratuito;

  //  $hotel->fotos = $request->fotos;

    $hotel->numEstrelas = $request->numEstrelas;

    $hotel->save();

      //$id = $hotel->id;
        for($i=0; $i<count($request->allFiles()['fotos']); $i++){
          $file = $request->allFiles()['fotos'][$i];

          $imagem = new imagem();

          $imagem->estabelecimentos_id = $hotel->id;
          $imagem->caminho = $file->store('imagensHotel');
          $imagem->save();
          unset($imagem);
        }
    return redirect('/editarDadosHotel/'.$id);

  }


  public function busca(Request $request){
    $local = $request->local;
    $entrada = $request->entrada;
    $saida = $request->saida;
    $pesquisa = DB::select("select distinct e.*
      from
      	estabelecimentos e
          inner join quartos q on e.id = q.estabelecimentos_id
      	left join quartos_has_reservas qr on q.id = qr.quartos_id
      	left join reservas r on qr.reservas_id = r.id
      where (e.cidade like '%$local%' or e.estado like '%$local%' or e.nome like '%$local%')
      and (r.dataIN is null or
        	(
        		('$entrada' not between r.dataIN and r.dataOUT)
        		and ('$saida' not between r.dataIN and r.dataOUT)
        	)
        );
    ");

    return view('pesquisa', compact('pesquisa'));
    }

    public function listaHoteis(){
      //$local = $request->local;

      $hoteis = DB::select(
        "select e.nome,caminho as imagem,valorDiaria as preco,e.id as hotelId, e.cidade as cidade,
        e.estado as estado, e.numEstrelas as numEstrelas, e.wifi as wifi, e.piscina as piscina,
        e.sauna as sauna, e.cafeDaManha as cafeDaManha, e.cancelamentoGratuito as cancelamentoGratuito
            from estabelecimentos e
              inner join quartos q on e.id = q.id
              inner join imagens i on e.id = i.id
                  order by e.id;
      ");
      return view('pesquisa',compact('hoteis') );


      // if($local == ""){
      //   return view('index');
      // }
      // $hoteis = Estabelecimento::where('nome', 'LIKE','%'.$local.'%')->get();
      // return view('pesquisa',["hoteis"=>$hoteis] );
    }

    public function buscarHoteis(Request $request){
      $local = $request->local;

      // if($local == ""){
      //   return redirect('/',);
      // }
      // $hoteis = Estabelecimento::where('nome', 'LIKE','%'.$local.'%')->get();
      // return view('pesquisa',["hoteis"=>$hoteis] );


      $hoteis = DB::select(
        "select e.nome,caminho as imagem, valorDiaria as preco,e.id as hotelId, e.cidade,
        e.estado, e.numEstrelas as numEstrelas, e.wifi as wifi, e.piscina ,
        e.sauna, e.cafeDaManha as cafe, e.cancelamentoGratuito as cancelar,e.permitePets as pets
            from estabelecimentos e
              inner join quartos q on e.id = q.id
              inner join imagens i on e.id = i.id
                  where (e.cidade LIKE '%$local%' or e.nome LIKE '%$local%' or e.estado LIKE '%$local%');
      ");
      return view('pesquisa',compact('hoteis'));


    }

}
