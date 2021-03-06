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
          <h1>R$ {{number_format($maisBarata, 2, ',', '.')}}</h1>
          <a href="#Quartos disponiveis"> <button type="button" name="button">Ver quartos</button></a>
        </div>
      </div>

      <section class="img">
        <div class="box-img-esq">
          <img src="/storage/{{$fotos[0]}}" alt="">
        </div>
        <div class="box-img-dir">
          <div class="img-top">
            <img src="/storage/{{$fotos[1]}}" alt="">
          </div>
          <div class="img-down">
            <img src="/storage/{{$fotos[2]}}" alt="">
          </div>
        <button type="button" class="button-verMais" onclick="abrir()" name="button">Ver Mais </button>
        </div>
      </section>
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
            <img class="slides" src="/storage/{{$fotos[$i]}}">
          @endfor
      <button class="slider_esquerda" onclick="plusDivs(-1);plusBG(-1)">&#10094;</button>
      <button class="slider_direita" onclick="plusDivs(1);plusBG(1)">&#10095;</button>
    </div>
  </div>
</div>
<main>

<h2> <a name="Quartos disponiveis">Quartos</a> </h2>
@foreach ($reservas as $reserva)
<section class="card-quarto">
  <div class="img-card">
    <img src="/storage/{{$reserva->fotos}}" alt="">
  </div>
  <div class="card-info">
    <h1>{{$reserva->nome}}</h1>
    <span>{{$reserva->descricao}}</span>
    <h4>Disponiveis no quarto:</h4>

    <div class="config-quarto">
      <div class="wi-fi">
        <i class="fas fa-user"></i><span>2 adultos</span>
      </div>

      <div class="wi-fi">
        <i class="fas fa-bed"></i><span>2 camas de solteiro</span>
      </div>
    </div>
  </div>

  <div class="card-preco">
    <h4>Valor Diaria</h4>
    <h1>R$ {{number_format($reserva->preco, 2, ',', '.')}}</h1>
    <a href="/reservas/{{$hotel->hotelId}}/{{$reserva->id}}"><button>Reservar</button></a>
  </div>
</section>
@endforeach

<div class="card-info-hotel">
    <h1>Informações do Hotel</h1>

<div class="hotel-item">
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

      <div class="info-dir">
        <h2>Taxas e impostos</h2>
        <p>Valores referentes a impostos e taxas administrativas já estão incluídos no momento da finalização da compra, no site do ESTA VAGO (não sendo necessário, após a finalização da compra, o pagamento de nenhum tipo de taxa).</p>
        <h2>Politicas de cancelamento</h2>
        <p>Viajante, aqui o cancelamento é GRATUITO!*
            Isso mesmo: se acontecer algum imprevisto, você tem a facilidade de cancelar até duas semanas após a sua compra, sem qualquer multa ou cobrança extra.

            *O cancelamento grátis é válido até 14 dias após a compra (com exceção do dia do check-in ou check-in em semanas de feriados). Após este prazo, será aplicada uma multa de 20%.

            *Para semanas de feriados será cobrada multa de 50%.
            *No dia do check-in ou posterior ao mesmo será cobrada multa de 100%.
            *Se você optar pelos créditos para utilizar em futuras viagens, poderá efetuar o cancelamento gratuito (com exceção do dia do check-in e semanas de feriados) até a véspera do check-in - sem qualquer cobrança de multa.</p>
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
