<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/reserva.css">
    <title></title>
  </head>
  <body>
    <header>
      <img src="/img/logo.png" alt="">
      <h1>Esta Vago</h1>
    </header>
{{-- {{dd($reserva)}} --}}
    <main>
      <section class="card-reserva">

        <div class="titulo">
          <h1>{{$reserva->nome}}</h1>
          <p>{{$reserva->descricao}}</p>
        </div>

        <div class="card-info">

          <div class="img">
            <img src="/{{$reserva->fotos}}" alt="">
          </div>

          <div class="info">
            {{-- <h1>Standart Room</h1>
            <p><span>Entrada:</span> <span> {{strftime('%A, %d de %B as %H:%Mh', strtotime($entrada))}}</span></p>
            <p><span>Saida:</span> <span> {{strftime('%A, %d de %B as %H:%Mh', strtotime($saida))}}</span></p> --}}
            <p><span> Diária R$ :</span> R$ {{number_format($reserva->preco *2, 2,',', '.')}}</p><br>
          </div>
        </div>
        @php
        // $total = $quarto['preco'] * $quarto['hospedes'];
        @endphp
        <div class="total">
          {{-- <h1>Total: R$ {{number_format($total, 2,',', '.')}}</h1> --}}
        </div>
        <hr>
        <h1>DADOS DA RESERVA</h1>
        <form action="/reservarQuarto" method="post">
        <input type="hidden" name="valor" value="{{$reserva->preco}}">
        <input type="hidden" name="estabelecimentos_id" value="{{$_ID}}">
        <input type="hidden" name="quartos_id" value="{{$_QUARTO}}">
        <input type="hidden" name="usuarios_id" value="{{auth()->user()->id}}">
        @csrf
        <div class="dados">

        <div class="cpf">
          <label>Entrada</label><br>
          <input type="date" id="saida" name="entrada" value="{{old('entrada')}}">
        @error ('entrada')<span class="erro">Coloque uma data de entrada</span>@enderror
        </div>
        <div class="cpf">
          <label for="saida">Saida</label><br>
          <input type="date" id="entrada" name="saida" value="{{old('saida')}}">
          @error ('saida')<span class="erro">Coloque uma data de saida</span>@enderror
        </div>
        </div>
          <h2><span>Responsavel pelo Check-In</span></h2>
          <div class="dados">
            <div class="cpf">
              <p>CPF</p>
              <input type="number" name="cpf" value="{{auth()->user()->cpf}}" placeholder="xxx.xxx.xxx-xx">
              @error ('cpf')<span class="erro">Coloque um cpf válido</span>@enderror
            </div>
            <div class="cpf">
              <p>Celular</p>
              <input type="text" name="celular" value="{{auth()->user()->tel}}" placeholder="(11)99999-9999">
              @error ('celular')<span class="erro">Coloque uma data de entrada</span>@enderror
            </div>
          </div>

          <hr>
{{-- {{dd($_ID,$_QUARTO)}} --}}
          <h1>DADOS DE PAGAMENTO</h1>
          <div class="dados">
            <div class="cpf">
              <p>Numero do Cartão</p>
              <input type="number" name="numeroCartao" value="{{old('numeroCartao')}}" placeholder="xxxx xxxx xxxx xxxx">
            </div>
            <div class="cpf">
              <p>Bandeira do cartão</p>
              <input type="text" name="nomeCartao" value="{{old('nomeCartao')}}" placeholder="nome">
            </div>
          </div>

          <div class="dados">
            <div class="cpf">
              <p>Validade</p>
              <input type="number" name="validade" placeholder="val">
            </div>
            <div class="cpf">
              <p>Cod Segurança</p>
              <input type="text" name="codSegurança" placeholder="cvv">
            </div>

          </div>

            <hr>
            <button type="submit" name="upload">Concluir</button>
        </form>
      </section>
    </main>
  </body>
</html>
