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


      <section class="box-cad-hotel">
        <div class="cad-info-hotel">

          <div class="img">
            <img src="\img\perfil.png" alt="">
          </div>

          <div class="inf-reserva">
            <h2>Paradise Resort</h2>
            <p>Data de Entrada: <span>10/05/2021</span> </p>
            <p>Data de Saida: <span>15/05/2021</span></p>
            <p>Numero de Quartos: <span>2</span></p>
            <p>Valor: <span>245.00</span></p>


          </div>







        </div>

      </section>

    </main>



    @include('includes.footer')
  </body>
</html>
