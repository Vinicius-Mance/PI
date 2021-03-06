<?php
namespace App\Http\Controllers;
  use Illuminate\Http\Request;
  use Illuminate\Support\Facades\Auth;
  use App\Quarto;
  use App\Estabelecimento;
  use App\Imagem;
  use App\User;
  use Illuminate\Support\Facades\DB;

    class Controles extends Controller{


      function home()
      {
        if (Auth::check()) {
          if (auth()->user()->adm == 1) {
            return redirect('/homeAdmin');
          }
        }
        for ($i=1; $i <= 8; $i++) {
          $maisBarata[] = Quarto::all()->where('estabelecimentos_id','=', $i)->min('valorDiaria');
        }
        $informacoes = DB::select(
            "select e.nome,caminho as imagem, valorDiaria as preco,e.id as hotelId,
            e.numEstrelas as numEstrelas
          		from estabelecimentos e
            		inner join quartos q on e.id = q.id
            		inner join imagens i on e.id = i.id
					order by e.id,preco
          asc limit 8;
          ");
        return view('index', compact('informacoes','maisBarata'));
      }

      function item($id)
      {
        $info = DB::select("
            select e.nome as hotel,e.endereco,e.numEstrelas as estrelas,
            e.id as hotelId,e.descricao
                from estabelecimentos e
            where e.id = $id;
          ");
        foreach ($info as $hotel){}
        $imagem = DB::select("
        select caminho
            from imagens
            where estabelecimentos_id = $id;
        ");
        foreach($imagem as $foto){$fotos[] = $foto->caminho;}

        $maisBarata = Quarto::all()->where('estabelecimentos_id','=', $id)->min('valorDiaria');

        $reservas = DB::select("select nome,valorDiaria as preco,fotos,descricao,id
                  from quartos
                  where estabelecimentos_id = $id
                  group by nome,preco,fotos,descricao,id
        ");
        return view('item',["_ID"=>$id], compact('hotel','fotos','reservas','maisBarata'));
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

      function reservas($id,$quartos)
      {
        $info = DB::select("select nome,valorDiaria as preco,fotos,descricao,id
                  from quartos
                  where estabelecimentos_id = $id and id = $quartos
                  group by nome,preco,fotos,descricao,id
        ");
        foreach ($info as $reserva) {}
        if (Auth::check()) { return view('reservas',compact('reserva'),["_ID"=>$id,'_QUARTO'=>$quartos]); }
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

      function userAdmin()
      {

      $users = DB::select("select id,nome,email,quantidade
          from users
          inner join
        (select count(id) as quantidade from users) usuarios;");
      return view('userAdmin', ['users'=>$users]);

      }

      function pesquisaUserAdmin(Request $request){
        $users = DB::select("select id,nome,email,quantidade
                from users u
                inner join
                  (select count(id) as quantidade
                    from users
                    where nome like '%$request->pesquisa%'
                    or email like '%$request->pesquisa%'
                    or id like '%$request->pesquisa%') usuario
          where (u.nome like '%$request->pesquisa%'
          or u.email like '%$request->pesquisa%'
          or u.id like '%$request->pesquisa%')");
        if (!$request->pesquisa or !$users) {
          return redirect('/userAdmin');

        }

        return view('userAdmin', ['users'=>$users]);
      }

      function pesquisaHotelAdmin(Request $request){
        $hoteis = DB::select("select id,nome,endereco,quantidade
                from estabelecimentos e
                inner join
                  (select count(id) as quantidade
                    from estabelecimentos
                    where nome like '%$request->pesquisa%'
                    or endereco like '%$request->pesquisa%'
                    or id like '%$request->pesquisa%') hotel
          where (e.nome like '%$request->pesquisa%'
          or endereco like '%$request->pesquisa%'
          or e.id like '%$request->pesquisa%')");
        if (!$request->pesquisa or !$hoteis) {
          return redirect('/hotelAdmin');
        }

        return view('hotelAdmin', ['hoteis'=>$hoteis]);
      }

      function user()
      {
      return view('user');
      }

      function dadosUserAdmin($id)
      {
        $user = User::find($id);
      return view('dadosUserAdmin',['user'=>$user]);
      }

      function atualizarPrivilegio(Request $request, $id){
        if (!Auth::check()) {
          return redirect('/login');
        }

        $user = User::find($id);
        $user->adm = $request->adm;

        $user->save();
        return redirect('homeAdmin');
      }
  }
 ?>
