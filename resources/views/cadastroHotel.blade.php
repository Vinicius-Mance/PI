<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/headerAdmin.css">
    <link rel="stylesheet" href="css/cadastrarHotel.css">
    <title></title>
  </head>
  <body>
    @include("includes/headerAdmin");

    <main>

      <div class="title">
        <h2>Cadastrar Hotel</h2>
      </div>

      <section class="box-cad-hotel">
        <div class="cad-info-hotel">

          <form class="" action="index.html" method="post" enctype="multipart/form-data">
            <p>Nome do Hotel</p>
            <input type="text" name="" value="" placeholder="name">

            <p>Endereço</p>
            <input type="text" name="" value="" placeholder="adress">

            <p>E-mail</p>
            <input type="text" name="" value="" placeholder="email">

            <p>Cnpj</p>
            <input type="text" name="" value="" placeholder="cnpj">

            <div class="box-cep">

              <div class="cep">
                <p>Cep</p>
                <input type="text" name="" value="" placeholder="zip code">
              </div>

              <div class="cep">
                <p>Cidade</p>
                <input type="text" name="" value="" placeholder="city">
              </div>

              <div class="cep2">
                <p>Estado</p>
                <input type="text" name="" value="" placeholder="country">
              </div>

            </div>

            <div class="box-cep">

              <div class="cep">
                <p>Telefone 1</p>
                <input type="text" name="" value="" placeholder="phone number 1">
              </div>

              <div class="cep">
                <p>Telefone 2</p>
                <input type="text" name="" value="" placeholder="phone number 2">
              </div>

              <div class="cep2">
                <p>Celular</p>
                <input type="text" name="" value="" placeholder="cellphone">
              </div>

            </div>

            <p>Descrição</p>
            <textarea name="name" rows="8" cols="80" placeholder="description"></textarea>

            <div class="box-check-box">

              <div class="check-box">
                <input type="checkbox" name="" value="">
                <p>wi-fi</p>
              </div>

              <div class="check-box">
                <input type="checkbox" name="" value="">
                <p>Café da manha</p>
              </div>

              <div class="check-box">
                <input type="checkbox" name="" value="">
                <p>Piscina</p>
              </div>

              <div class="check-box">
                <input type="checkbox" name="" value="">
                <p>Sauna</p>
              </div>

              <div class="check-box">
                <input type="checkbox" name="" value="">
                <p>Permite Pets</p>
              </div>

              <div class="check-box">
                <input type="checkbox" name="" value="">
                <p>Cancelamento gratuito</p>
              </div>

            </div>


            <div class="upload-image">
              <p>Selecionar Imagens</p>
              <input type="file" id="myFile" multiple size="50" onchange="myFunction()" >
              <p id="demo"></p>

            </div>

            <button type="button" name="button">Cadastrar</button>

          </form>



        </div>

      </section>




    </main>

    <script>
    function myFunction(){
      var x = document.getElementById("myFile");
      var txt = "";
      if ('files' in x) {
        if (x.files.length == 0) {
          txt = "Select one or more files.";
        } else {
          for (var i = 0; i < x.files.length; i++) {
            txt += "<br><strong>" + (i+1) + ". file</strong><br>";
            var file = x.files[i];
            if ('name' in file) {
              txt += "name: " + file.name + "<br>";
            }
            if ('size' in file) {
              txt += "size: " + file.size + " bytes <br>";
            }
          }
        }
      }
      else {
        if (x.value == "") {
          txt += "Select one or more files.";
        } else {
          txt += "The files property is not supported by your browser!";
          txt  += "<br>The path of the selected file: " + x.value; // If the browser does not support the files property, it will return the path of the selected file instead.
        }
      }
      document.getElementById("demo").innerHTML = txt;
    }
</script>

  </body>
</html>