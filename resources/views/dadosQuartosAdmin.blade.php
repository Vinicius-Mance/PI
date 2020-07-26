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
        <h2>Dados do Quarto</h2>
      </div>
      <section class="box-info-hotel">

        <!-- <div class="titulo">
          <div class="img-perfil">
            <img src="/img/perfil.png" alt="">
          </div>
          <h1>nome</h1>
        </div> -->

        <div class="card-info">
          <h1>Nome:</h1>


          <div class="info">
            <p> <span>Nome:</span> {{$quarto->nome}}</p>
            <p> <span>Camas de Solteiro: </span> {{$quarto->numCamasSolteiro}}</p>
            <p> <span>Camas de Casal:</span> {{$quarto->numCamasCasal}}</p>
            <p> <span>Descrição:</span> {{$quarto->descricao}}</p>
            <p><span>Valor Diaria:</span>  {{$quarto->valorDiaria}}</p>
          </div>

          <div class="btns-dQuartos">
            <div class="btn-voltar">
              <a href="/quartosAdmin/{{$quarto->estabelecimentos_id}}"><button type="button" name="button">Voltar</button></a>
            </div>

            <div class="btn-voltar">
            <a href="/editarDadosQuarto/{{$quarto->id}}"> <button type="button" name="button">Editar</button> </a>  
            </div>

            <div class="btn-voltar" >
              <button type="button" name="button" style="background-color:#c94f63;">Excluir</button>
            </div>

          </div>




        </div>
      </section>
    </main>

  </body>
</html>
