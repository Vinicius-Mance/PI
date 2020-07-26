<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/headerAdmin.css">
    <link rel="stylesheet" href="/css/dadosUserAdmin.css">
    <title></title>
  </head>
  <body>
    @include("includes/headerAdmin");

    <main>
      <div class="title">
        <h2>Dados do Usuario</h2>
      </div>
      <section class="box-info-hotel">
        <div class="titulo">
          <div class="img-perfil">
            <img src="/img/perfil.png" alt="">
          </div>
          <h1>{{$user->nome}}</h1>
        </div>
        <div class="card-info">


          <div class="info">
            <p> <span>Nome:</span> {{$user->nome}}</p>
            <p> <span>Email:</span> {{$user->email}}</p>
            <p> <span>Tel:</span> {{$user->tel}}</p>
            <p> <span>CPF:</span> {{$user->cpf}}</p>
            <p> <span>Cidade:</span> {{$user->cidade}} </p>
            <p><span>Pais:</span> {{$user->pais}}</p>
            <p><span>Data de Nascimento:</span> {{$user->data_nasc}}</p>
            <p><span>Receber Informações:</span> {{$user->receber_info}} </p>
            <form class="" action="/atualizarPrivilegio/{{$user->id}}" method="post">
            @csrf
            <div class="">
              <p><span>Admin:</span>  </p>
              <input type="text" name="adm" value="{{$user->adm}}">
            </div>

            <div class="titulo">
              <button type="submit" name="button">Salvar Privilegio</button>
              <a href="/userAdmin"><button type="button" name="button">Voltar</button></a>
            </div>


            </form>

          </div>




        </div>
      </section>
    </main>

  </body>
</html>
