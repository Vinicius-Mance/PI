<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/perfil.css">
    <link rel="stylesheet" href="/css/footer.css">
    <title></title>
  </head>
  <body>
    @include('includes.header')

    <main>

      <div class="title">
        <h2>Perfil</h2>

      </div>

      <div class="img-perfil">
        <img src="img\perfil.png" alt="">
      </div>



      <section class="box-cad-hotel">
        <div class="cad-info-hotel">

          <form class="" action="index.html" method="post" enctype="multipart/form-data">
            <p>Nome</p>
            <input type="text" name="" value="" placeholder="name">

            <p>E-mail</p>
            <input type="text" name="" value="" placeholder="email">

            <p>CPF</p>
            <input type="text" name="" value="" placeholder="cpf">

            <div class="box-cep">

              <div class="cep">
                <p>Data de Nascimento</p>
                <input type="text" name="" value="" placeholder="xx/xx/xxxx">
              </div>

              <div class="cep">
                <p>Cidade</p>
                <input type="text" name="" value="" placeholder="city">
              </div>

              <div class="cep2">
                <p>País</p>
                <input type="text" name="" value="" placeholder="country">
              </div>

            </div>

            <div class="box-cep">

              <div class="cep">
                <p>Telefone fixo</p>
                <input type="text" name="" value="" placeholder="phone number">
              </div>


              <div class="cep2">
                <p>Celular</p>
                <input type="text" name="" value="" placeholder="cellphone">
              </div>

            </div>

            <div class="check-boxx">
              <input type="checkbox" name="" value="">
              <p>Deseja receber informações e promoções por email?</p>
            </div>

            <div class="alterar-senha">
              <a href="#" onclick="abrirSenha()">Alterar Senha</a>
            </div>



            <button type="button" name="button">Salvar Alterações</button>

          </form>



        </div>

      </section>

    </main>



    @include('includes.footer')
  </body>
</html>


<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>

function abrirSenha() {
  document.getElementById("lightbox2").style.display = "flex";
  document.getElementById("senha").style.display = "flex";

}

function fecharSenha() {
  document.getElementById("lightbox2").style.display = "none";
  document.getElementById("senha").style.display = "none";

}


</script>

<div id="lightbox2">
    <link rel="stylesheet" href="css/login.css">
<div id="senha">

  <div class="card-login">
    <div class="cancel">
      <button type="button" onclick="fecharSenha()"name="button">X</button>

    </div>
    <div class="img2">
      <img src="/img/logo.png" alt="">
      <h3>Esta Vago</h3>
    </div>

  <hr>

  <div class="formulario">
    <h3>ALTERAR SENHA</h3>
    <form class="" action="" method="post">

      <input type="email" name="" value="" placeholder="Nova Senha">
      <input type="password" name="" value="" placeholder="Confirmar Senha">
      <button type="button" name="button">Alterar</button>

    </form>

    </div>
  </div>
</div>

</div>