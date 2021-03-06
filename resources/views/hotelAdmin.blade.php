<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/headerAdmin.css">
    <link rel="stylesheet" href="css/hotelAdmin.css">
    <title></title>
  </head>
  <body>
    @include("includes/headerAdmin");
    <main>

      <div class="title">
        <h2>Hoteis</h2>
      </div>

      <section class="box-pesquisa-user">
        <p>Pesquisar Hotel</p>

        <div class="pesquisa-user">
          <form action="/pesquisaHotelAdmin" method="get">
            <input type="text" name="pesquisa" value="" placeholder="nome do hotel">
            <button type="submit" name="button">Pesquisar</button>
          </form>
        </div>
      </section>

      <section class="box-return-users">
        <div class="btn-voltar">
        <a href="/homeAdmin"> <button id="b333"type="submit"  name="button"> Voltar</button></a>  
        </div>

        <div class="users-title">
          <h2>Hoteis Cadastrados</h2>
          @foreach ($hoteis as $quantos)@endforeach
          <h2 id="Nusuarios">{{$quantos->quantidade}}</h2>
        </div>
{{-- {{dd($quantos)}} --}}

        <div class="return-user-info">
          <div class="user-id">
            <p>Id</p>
          </div>

          <div class="user-name">
            <p>Nome</p>
          </div>

          <div class="user-email">
            <p>Endereço</p>
          </div>

          <div class="user-ver-mais">
            <a href="/hotelAdmin">Info</a>
          </div>
        </div>

        @foreach ($hoteis as $hotel)
        <div class="return-user-info">
          <div class="user-id">
            <p>{{$hotel->id}}</p>
          </div>

          <div class="user-name">
            <p>{{$hotel->nome}}</p>
          </div>

          <div class="user-email">
            <p>{{$hotel->endereco}}</p>
          </div>

          <div class="user-ver-mais">
            <a href="/dadosHotelAdmin/{{$hotel->id}}">Ver Informações</a>
          </div>
        </div>
        @endforeach


      </section>
    </main>

  </body>
</html>
