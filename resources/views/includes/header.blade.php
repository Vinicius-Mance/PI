<link rel="stylesheet" href="/css/header.css">
  <header>
      <div class="header-A">
        <img src="/img/logo.png" alt="">
        <h1><a href="/">ESTAVAGO</a></h1>
        <div class="botoes_header">
          @auth
            <a href="/perfil/{{auth()->user()->id}}" class="dropbtn">{{ auth()->user()->nome }}</a>
            <div class="dropdown-content">
              <a href="/"><i class="fa fa-home"></i>Home</a>
              <a href="/perfil/{{auth()->user()->id}}"><i class="fa fa-user"></i>Perfil</a>
              <a href="/exibirReservas/{{auth()->user()->id}}"><i class="fa fa-clipboard-check"></i>Reservas</a>
              <a href="/logout"><i class="fa fa-sign-out"></i>Sair</a>
            </div>
          @endauth
          @guest
            <a href="/login" class="dropbtn"><i class="fa fa-sign-in-alt" style="font-size:17px; width:20px;"></i>Entrar</a>
          @endguest
        </div>
      </div>

      <div class="header-B">
        <form action="/pesquisa" method="get">
          @csrf
          <div class="input1">
            <label for="local">Local</label>
            <input type="text" name="local" value="{{old('local')}}">
          </div>
          <div class="input2">
            <label>Entrada</label>
            <input type="date" id="saida" name="entrada" value="{{old('entrada')}}">
          </div>
          <div class="input2">
            <label for="saida">Saida</label>
            <input type="date" id="entrada" name="saida" value="{{old('saida')}}">
          </div>
          <div class="input3">
            <label>Hospedes</label>
            <div class="box-select">
              <div class="custom-select" style="width:calc(100% - 10px);height: 70px;">
                <select name="hospedes">
                    @for ($i=0; $i <= 9; $i++)
                      <option value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>
                </div>
            </div>
          </div>
          {{-- <div class="input3">
            <label>Quartos</label>
            <div class="box-select">
              <div class="custom-select" style="width:calc(100% - 10px);height: 60px;">
                  <select>
                    @for ($i=0; $i <= 9; $i++)
                      <option value="{{$i}}">{{$i}}</option>
                    @endfor
                  </select>
                </div>
            </div>
          </div> --}}
          <button type="submit" name="Upload">Pesquisar</button>
        </form>
      </div>
    </header>
  <script>
var x, i, j, l, ll, selElmnt, a, b, c;

x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;

  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);

  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");

  for (j = 1; j < ll; j++) {
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
document.addEventListener("click", closeAllSelect);
</script>
