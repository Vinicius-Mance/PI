<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/headerAdmin.css">
    <link rel="stylesheet" href="/css/cadastroQuartos.css">
    <title></title>
  </head>
  <body>
    @include("includes/headerAdmin")

    <main>


      <div class="title">
        <h2>Cadastrar Quartos</h2>
      </div>

      <section class="box-cad-hotel">
        <div class="cad-info-hotel">

        <form class="" action="/editarDadosQuarto/{{$quarto->id}}" method="post" enctype="multipart/form-data">
            @csrf
            <p>Nome quarto</p>
            <input type="text" name="nome" placeholder="room name" value="{{$quarto->nome}}">
              @error('nome')
                <span class="erro">Nome muito curto (mínimo de 10 caracteres)</span>
              @enderror
            <div class="box-cep">
              <div class="cep">
                <p>Numero de Camas de Solteiro</p>
                <select id="cam2" name="numCamasSolteiro">
                      <option selected disabled>Solteiro</option>
                @for ($i=0; $i < 10; $i++)
                    <option value="{{$i}}">{{$i}}</option>
                @endfor
                </select>
                @error ('numCamasSolteiro')
                <span class="erro">Escolha um valor para camas de solteiro</span>
                @enderror
              </div>

              <div class="cep">
                <p>Numero de Camas de Casal</p>
                <select id="cam1" name="numCamasCasal">
                    <option selected disabled>Casal</option>
                @for ($i=0; $i <= 10; $i++)
                    <option value="{{$i}}">{{$i}}</option>
                @endfor
                </select>
                @error ('numCamasCasal')
                  <span class="erro">Escolha um valor para camas de Casal</span>
                @enderror
              </div>

              <script>
              document.getElementById('cam1').value = '{{$quarto->numCamasCasal}}';
              document.getElementById('cam2').value = '{{$quarto->numCamasSolteiro}}';
              </script>

              <div class="cep2">
                <p>Valor Diaria</p>
                <input type="number" name="valorDiaria" placeholder="Value" value="{{$quarto->valorDiaria}}">
                @error ('valorDiaria')
                  <span class="erro">Coloque um valor para a diária</span>
                @enderror
              </div>

            </div>



            <p>Descrição</p>
            <textarea name="descricao" rows="8" cols="80" placeholder="description">{{$quarto->descricao}}</textarea>
            @error ('descricao')
              <span class="erro">Dê uma descrição aos quartos</span>
            @enderror
            <div class="upload-image">
              <p>Selecionar Imagens</p>
              <input type="file" name="fotos" id="myFile" size="50" onchange="myFunction()" >
              <p id="demo"></p>
            </div>
              @error ('fotos')
                <span class="erro">Selecione uma foto para os quartos</span>
              @enderror

            <input type="hidden" name="estabelecimentos_id" value="{{$quarto->estabelecimentos_id}}">
            <button type="submit" name="upload">ATUALIZAR</button>
        @php

        @endphp
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
