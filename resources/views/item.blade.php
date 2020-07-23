<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/resultadoPesquisa.css">
  <script src="https://kit.fontawesome.com/837f81fff7.js" crossorigin="anonymous"></script>
  <title>Item</title>
</head>
<body>
  @include("includes/header")
    <main>
      <div class="titulo">
        <div class="box-esq">
          <h1>{{$hotel->hotel}}</h1>
          <span>{{$hotel->endereco}}</span>
          <div class="star-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i>
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
        </div>

        <div class="box-dir">
          <span>Diárias a partir de: </span>
          <h1>R$ {{number_format($hotel->preco, 2, ',', '.')}}</h1>
          <a href="#Quartos disponiveis"> <button type="button" name="button">Ver quartos</button></a>
        </div>
      </div>

      <section class="img">
        <div class="box-img-esq">
          <img src="/Imgens PI Hoteis/{{$fotos[0]}}" alt="">
        </div>
        <div class="box-img-dir">
          <div class="img-top">
            <img src="/Imgens PI Hoteis/{{$fotos[1]}}" alt="">
          </div>
          <div class="img-down">
            <img src="/Imgens PI Hoteis/{{$fotos[2]}}" alt="">
          </div>
        <button type="button" class="button-verMais" onclick="abrir()" name="button"><span>Mais fotos</span> </button>
        </div>
      </section>

<div class="data">
  <div class="disponibilidade">
    <h1>Disponibilidade</h1>
    <p>Selecione da data da sua viagem</p>
  </div>

  <div class="set-data">

  <form class="" action="" method="post">

    <div class="entrada">
      <p>Entrada</p>
      <input type="text" name="" value="">
    </div>

    <div class="entrada">
      <p>Saida</p>
      <input type="text" name="" value="">
    </div>

    <div class="hospedes">
      <p>Hospedes</p>
      <select>
        @for ($i=0; $i <= 10; $i++)
          <option value="{{$i}}">{{$i}}</option>
        @endfor
      </select>
    </div>

    <div class="hospedes">
      <p>Quartos</p>
      <select>
        @for ($i=0; $i <= 5; $i++)
          <option value="{{$i}}">{{$i}}</option>
        @endfor
      </select>
    </div>
    <button type="button" name="button">Consultar</button>
  </form>
  </div>
</div>
    </main>
{{-- banner rotativo --}}
<script>
function abrir() {
  document.getElementById("fundo").style.display = "block";
}
function fechar() {
  document.getElementById("fundo").style.display = "none";
}
</script>
<div id="fundo">
<h1>{{$hotel->hotel}}</h1>
<div class="banners">
<button type="button" onclick="fechar()"  class="fechar" name="button"><i class="fa fa-times-circle"></i></button>
<body>

<div class="slider">
          @for ($i=0; $i < sizeof($fotos); $i++)
            <img class="slides" src="/Imgens PI Hoteis/{{$fotos[$i]}}">
          @endfor
      <button class="slider_esquerda" onclick="plusDivs(-1);plusBG(-1)">&#10094;</button>
      <button class="slider_direita" onclick="plusDivs(1);plusBG(1)">&#10095;</button>
    </div>
  </div>
</div>
<main>
<h2> <a name="Quartos disponiveis">Quartos</a> </h2>
<section class="card-quarto">
  <div class="img-card">
    <img src="/img-lugar/{{$hotel->quartos_foto}}" alt="">
  </div>
  <div class="card-info">
    <h1>Standart Room - Duplo</h1>
    <span>Apartamento com quarto, banheiro, sala com sofá cama e cozinha americana equipada (fogão, frigobar e microondas). </span>
    <h4>Disponiveis no quarto:</h4>

    <div class="config-quarto">
      <div class="wi-fi">
        <i class="fas fa-user"></i>
      <span>2 adultos</span>
      </div>

      <div class="wi-fi">
        <i class="fas fa-bed"></i>
      <span>2 camas de solteiro</span>
      </div>
    </div>
  </div>

  <div class="card-preco">
    <h4>2 disponiveis</h4>
    <p>Valor Diaria</p>
    <h1>245</h1>
    <p style="color:green;">√ Cancelamento Gratuito</p>
    <a href="/reservas/1"><button>Reservar</button></a>
  </div>
</section>

<section class="card-quarto">
  <div class="img-card">
    <img src="/img-lugar/{{$hotel->quartos_foto}}" alt="">
  </div>
  <div class="card-info">
    <h1>Standart Room - Duplo</h1>
    <span>Apartamento com quarto, banheiro, sala com sofá cama e cozinha americana equipada (fogão, frigobar e microondas). </span>
    <h4>Disponiveis no quarto:</h4>

    <div class="config-quarto">
    <div class="wi-fi">
      <i class="fas fa-user"></i>
    <span>2 adultos</span>
    </div>

    <div class="wi-fi">
      <i class="fas fa-bed"></i>
    <span>2 camas de solteiro</span>
    </div>
    </div>
  </div>

  <div class="card-preco">
    <h4>2 disponiveis</h4>
    <p>Valor Diaria</p>
    <h1>245</h1>
    <p style="color:green;">√ Cancelamento Gratuito</p>
    <a href="/reservas/1"><button>Reservar</button></a>
  </div>
</section>
<div class="card-info-hotel">
    <h1>Informações do Hotel</h1>
<div class="card-info">
    <div class="wi-fi">
      <i class="fas fa-wifi"></i>
    <span>wi-fi</span>
  </div>
    <div class="wi-fi">
      <i class="fas fa-coffee"></i>
    <span>café da manha</span>
    </div>
  </div>
  <hr>
  <div class="info">
      <div class="info-esq">
        <p>{{$hotel->descricao}}</p>
      </div>
  </div>
</div>
</main>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName('slides');
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
  }
</script>
 @include("includes/footer")
</body>
</html>
