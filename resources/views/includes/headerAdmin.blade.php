<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/header2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title></title>
  </head>
  <body>

    <header>
      <div class="header-A">
        <a href="/homeAdmin">
         <img src="/img/logo.png" alt=""></a>
      <a href="/homeAdmin"><h1>ESTA VAGO</h1></a>

        <div class="nomeUser">
          <div class="nome">

            <h4>Administração</h4>

            <div class="navbar">
            <div class="dropdown">
              <button class="dropbtn"><i class="fa fa-bars"></i>
              </button>
              <div class="dropdown-content">
                <a href="/perfil/{{auth()->user()->id}}"><i class="fa fa-user"></i>Editar Perfil</a>
                <a href="/homeAdmin"><i class="fa fa-home"></i>Home</a>
                <a href="/userAdmin"><i class="fa fa-users"></i>Usuarios</a>
                <a href="/hotelAdmin"><i class="fa fa-h-square"></i>Hoteis</a>
                <a href="/cadastroHotel"><i class="fa fa-list-alt"></i>Cad Hoteis</a>
                <a href="/logout"><i class="fa fa-sign-out"></i>Sair</a>
              </div>
              </div>
            </div>

          </div>

        </div>


    </header>
    <main>

    </main>



  </body>
</html>
