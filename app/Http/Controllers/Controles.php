<?php
namespace App\Http\Controllers;
  use Illuminate\Http\Request;
  use Illuminate\Support\Facades\Auth;
  use App\Quarto;
  use App\Estabelecimento;
  use App\Imagem;
  use Illuminate\Support\Facades\DB;

    class Controles extends Controller{
      function home()
      {
        if (Auth::check()) {
          if (auth()->user()->adm == 1) {
            return redirect('/homeAdmin');
          }
        }
        $informacoes = DB::select(
          "select e.nome,caminho as imagem,valorDiaria as preco,e.id as hotelId
          		from estabelecimentos e
            		inner join quartos q on e.id = q.id
            		inner join imagens i on e.id = i.id
                    order by e.id limit 8;
        ");
        return view('index', compact('informacoes'));
      }

      function item($id)
      {
        $info = DB::select("
          select e.nome as hotel,e.endereco,e.numEstrelas as estrelas,
          q.fotos as quartos_foto ,valorDiaria as preco, e.descricao
          		from estabelecimentos e
          		inner join quartos q on e.id = q.id
              where e.id = $id;
        ");
        foreach ($info as $hotel){}
        $imagem = DB::select("
        select caminho
            from imagens
            where estabelecimentos_id = $id;
        ");
        foreach($imagem as $foto){
                $fotos[] = $foto->caminho;}
        return view('item',["_ID"=>$id], compact('hotel','fotos'));
      }

      function pesquisa()
      {
        return view('pesquisa');
      }

      function produto()
      {
        return view('produto');
      }

      function reserva()
      {
        return view('reserva');
      }

      function reservas($id)
      {
        if (Auth::check()) { return view('reservas',["_ID"=>$id]); }
        else { return redirect('/login');}
      }

      function Rpesq()
      {
        return view('resultadoPesquisa');
      }

      function login()
      {
        if (!Auth::check()) {return view('login');}
        else { return redirect('/perfil');}
      }

      function cadastro()
      {
        if (!Auth::check()) {return view('cadastro');}
        else { return redirect('/perfil');}
      }

      function perfil($id) {
        if (Auth::check())
        {return view('perfil',["_ID"=>$id]);}
        else { return redirect('/login');}
      }

      function cadastroQuartos($id){
      if (Auth::check()) {
      if (auth()->user()->adm = 1) {
        return view('cadastroQuartos',["_ID"=>$id]);
      }
        } else {
          return redirect('/');
        }
      }

      function homeAdmin()
      {
      return view('homeAdmin');
      }

      function user()
      {
      return view('user');
      }
  }
 ?>
