<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/headerAdmin.css">
    <link rel="stylesheet" href="/css/dadosHotelAdmin.css">
    <title></title>
  </head>
  <body>
    @include("includes/headerAdmin");

    <main>
      <div class="title">
        <h2>Informações do Hotel</h2>
      </div>

      <div class="menu-btn">

        <div class="btn-menu-1" >
          <div class="btn-cad-quarto">
            <a href="/editarDadosHotel/{{$hotel->id}}" id="b001"><button type="button" name="button"><i class="fa fa-edit"></i></button> Editar </a>
          </div>
        </div>

        <div class="btn-menu-1">
          <div class="btn-cad-quarto">
            <a href="/quartosAdmin/{{$hotel->id}}"><button type="button" name="button"><i class="fa fa-home"></i></button> Quartos </a>
          </div>
        </div>

        <div class="btn-menu-1">
          <div class="btn-cad-quarto">
            <a href="/quartosAdmin/{{$hotel->id}}"><button type="button" name="button" style="background-color:#c94f63;"><i class="fa fa-trash"></i></button> Excluir </a>
          </div>
        </div>

      </div>


      <section class="box-info-hotel">
      <a href="/hotelAdmin"><button type="button" name="button"> Voltar</button> </a>

        <div class="titulo">
          <div class="tit">
            <h1>{{$hotel->nome}}</h1>
          </div>


        </div>



        <div class="card-info">
          <div class="img">
            <img src="/img-lugar/quarto.JPG" alt="">
          </div>

          <div class="info">
            <p> <span>Endereço:</span> {{$hotel->endereco}}</p>
            <p> <span>Email:</span>{{$hotel->email}}</p>
            <p> <span>CNPJ:</span> {{$hotel->cnpj}}</p>
            <p> <span>Telefone 1:</span>{{$hotel->tel1}}</p>
            <p> <span>Telefone 2:</span>{{$hotel->tel2}} </p>
            <p><span>Celular:</span>{{$hotel->celular}}</p>
            <p><span>Wi-fi:</span>@if($hotel->wifi) Sim @else Não @endif</p>
            <p><span>Café da Manha:</span> @if($hotel->cafeDaManha) Sim @else Não @endif </p>
            <p><span>Piscina:</span> @if($hotel->piscina) Sim @else Não @endif </p>
            <p><span>Sauna:</span> @if($hotel->sauna) Sim @else Não @endif</p>
            <p><span>Permite Pets:</span> @if($hotel->permitePets) Sim @else Não @endif </p>
            <p><span>Cancelamento Gratuito:</span> @if($hotel->cancelamentoGratuito) Sim @else Não @endif </p>
            <p><span>Descrição:</span> {{$hotel->descricao}}</p>
          </div>

          <div class="exibir-fotos">
               <h2>Imagens</h2>
               <div class="box-fotos">

                 <div class="card-fotos">
                   <img src="/img-lugar/quarto.JPG" alt="">
                 </div>

                 <div class="card-fotos">
                   <img src="/img-lugar/quarto.JPG" alt="">
                 </div>
               </div>
          </div>
        </div>
      </section>
    </main>
  </body>
</html>
