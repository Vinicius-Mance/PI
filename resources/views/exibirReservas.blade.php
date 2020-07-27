@php
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
@endphp
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/exibirReservas.css')}}">
    <link rel="stylesheet" href="/css/footer.css">

    <title></title>
  </head>
  <body>
    @include('includes.header')

    <main>

      <div class="title">
        <h2>Reservas</h2>

      </div>

{{-- {{dd($reservas_user)}} --}}
        @foreach ($reservas_user as $reserva)
      <section class="box-cad-hotel">
        <div class="cad-info-hotel">
          <div class="img">
            <img src="/Imgens PI Hoteis/{{$reserva->foto}}" alt="">
          </div>
          <div class="inf-reserva">
            <h2>{{$reserva->hotel}}</h2>
            <p>Quarto registrado: <span>{{$reserva->quarto}}</span> </p>
            <p>Data de Entrada: <span>{{strftime('%a, %d de %B de %Y', strtotime($reserva->entrada))}}</span> </p>
            <p>Data de Saida: <span>{{strftime('%a, %d de %B de %Y', strtotime($reserva->saida))}}</span></p>
            <p>Valor total - R$: <span>{{number_format($reserva->valor, 2 , ',' , '.')}}</span></p>
      {{-- <pre>
      {{print_r($reserva)}}
      </pre> --}}
          </div>
        </div>
      </section>
        @endforeach

    </main>



    @include('includes.footer')
  </body>
</html>
