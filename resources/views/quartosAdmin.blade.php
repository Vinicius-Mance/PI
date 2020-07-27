<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/headerAdmin.css">
    <link rel="stylesheet" href="/css/hotelAdmin.css">
    <script src="https://kit.fontawesome.com/837f81fff7.js" crossorigin="anonymous"></script>
    <title></title>
  </head>
  <body>
    @include("includes/headerAdmin");
    <main>

      <div class="title">
        <h2>Quartos</h2>
      </div>


      <div class="btn-cad-quarto">
        <a href="/cadastroQuartos/{{$hotel->id}}"><button type="button" name="button"><i class="fa fa-plus"></i></button> Cadastrar Quarto</a>
      </div>

      <section class="box-return-users">
        <div class="btn-voltar">
          <a href="/dadosHotelAdmin/{{$hotel->id}}"><button id="b333"type="button" name="button"> Voltar</button></a>
        </div>

        <div class="users-title">
          <h2>Quartos Cadastrados</h2>
          <h2 id="Nusuarios">1289</h2>
        </div>

        <div class="return-user-info">
          <div class="user-id">
            <p>Id</p>
          </div>

          <div class="user-name">
            <p>Nome</p>
          </div>

          <div class="user-email">
            <p>Diária</p>
          </div>

          <div class="user-ver-mais">
            <a href="/hotelAdmin">Info</a>
          </div>
        </div>

        @foreach ($quartos as $quarto)
        <div class="return-user-info">
          <div class="user-id">
            <p>{{$quarto->id}}</p>
          </div>

          <div class="user-name">
            <p>{{$quarto->nome}}</p>
          </div>

          <div class="user-email">
            <p>{{$quarto->valorDiaria}}</p>
          </div>

          <div class="user-ver-mais">
            <a href="/dadosQuartosAdmin/{{$quarto->id}}">Ver Informações</a>
          </div>
        </div>
        @endforeach


      </section>
    </main>

  </body>
</html>
