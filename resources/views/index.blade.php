<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/837f81fff7.js" crossorigin="anonymous"></script>
  <title>Bem-Vindo - Home Page</title>
</head>
<body>
  @include("includes.header")
  <video width="100%" height="100%" muted autoplay loop>
    <source src="img/estaVago.mp4" type="video/mp4">
  </video>
    <h2 class="titulo-promocao">As melhores promoções para você</h2>
      <section class="grid-main">
{{-- {{dd($informacoes)}} --}}
      {{-- @php
      echo "<pre>";
    print_r($informacoes);
    echo "</pre>";

      @endphp --}}
      @foreach ($informacoes as $card)
      <div class="div"> <img src="Imgens PI Hoteis/{{$card->imagem}}" alt="">
        <div class="info-bloco">
            <!-- {{$card->hotelId}} -->
            <p class="nome-produto">{{$card->nome}}</p>
          <div class="rating-and-stars">
              <span class="number-rating">{{$card->numEstrelas}}.0</span>
            <div class="star-rating">
              @for ($i=0; $i < $card->numEstrelas; $i++)
                <i class="fa fa-star"></i>
              @endfor
              @for ($i=0; $i < (5 - $card->numEstrelas); $i++)
                  <i class="fa fa-star-o"></i>
              @endfor

            </div>
          </div>
        </div>
        <hr class="hr-top">
        <div class="bloco-de-preco">
          <p class="descricao-preco">Diárias a partir de:</p>
          <div class="preco-g">
          <p class="preco">R${{number_format($card->preco, 2, ',', '.')}}</p>
          </div>
        </div>
        <a href="/item/{{$card->hotelId}}" class="ver_mais">Ver mais</a>
      </div>
      @endforeach
  </section>

<h2>Conheça o Brasil</h2>
<section class="brasil">
  <div class="card-brasil" style="background-image: url('destinos/brasil1.jpg');">
    <button type="button" name="button" style="background-color: #0ca879;">Fernando de Noronha</button>
  </div>

  <div class="card-brasil" style="background-image: url('destinos/brasil2.jpg');">
    <button type="button" name="button" style="background-color: #edbf18;">Florianopolis</button>
  </div>

  <div class="card-brasil" style="background-image: url('destinos/brasil3.jpg');">
    <button type="button" name="button" style="background-color: #2e5cbf;">Minas Gerais</button>
  </div>

  <div class="card-brasil" style="background-image: url('destinos/brasil5.jpg');">
    <button type="button" name="button" style="background-color: #b336a6;">Mato Grosso</button>
  </div>
</section>

<section class="box-info">
  <div class="card-info">
    <img src="icon-img/calendario2.png" alt="">
      <div class="box-texto">
        <h2>Cancelamento gratuito.</h2>
        <p>Cancele sua reserva de forma rápida e fácil</p>
      </div>
  </div>

  <div class="card-info">
    <img src="icon-img/aviao.png" alt="">
    <div class="box-texto">
    <h2>Melhores opções</h2>
    <p>As melhores opções de destino para você e sua familia</p>
    </div>
  </div>

  <div class="card-info">
    <img src="icon-img/cadeado.png" alt="">
    <div class="box-texto">
    <h2>Segurança</h2>
    <p>Segurança e privacidade para as suas compras.</p>
    </div>
  </div>
</section>
 @include("includes/footer")
</body>
</html>
