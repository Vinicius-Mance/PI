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

        <div class="titulo">
          <div class="img-perfil">
            <img src="/icon-img/quarto.png" alt="">
          </div>

        </div>

        <div class="card-info">
          <h1>Nome: {{$quarto->nome}}</h1>


          <div class="info">

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
            <a href="/excluirQuarto/{{$quarto->id}}"> <button type="button" name="button" style="background-color:#c94f63;">Excluir</button> </a>
            </div>

          </div>




        </div>
      </section>
    </main>

  </body>
</html>
