<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/css/header.css">
<?php include("login.blade.php"); ?>
  <header>
      <div class="header-A">
        <img src="/img/logo.png" alt="">
        <h1><a href="/">ESTAVAGO</a></h1>
        <div class="botoes_header">
          <button type="button" onclick="abrirCadastro()" name="cadastro">Cadastro</button>
          <button type="button" onclick="abrirLogin()" name="login">Login</button>
        </div>
      </div>

      <div class="header-B">
        <form class="" action="/pesquisa" method="post">
          <div class="input1">
            <label for="">Local</label>
            <input type="text" name="" value="">
          </div>
          <div class="input2">
            <label>Entrada</label>
            <input type="date" id="saida" name="">
          </div>
          <div class="input2">
            <label for="">Saida</label>
            <input type="date" id="entrada" name="">
          </div>
          <div class="input3">
            <label>Hospedes</label>
            <div class="box-select">
              <div class="custom-select" style="width:calc(100% - 10px);height: 70px;">
                <select>
                  <?php for ($i=0; $i < 10; $i++) { ?>
                  <option value="<?php echo $i;?>"><?php echo $i;?></option>
                  <?php } ?>
                </select>
                </div>
            </div>
          </div>
          <div class="input3">
            <label>Quartos</label>
            <div class="box-select">
              <div class="custom-select" style="width:calc(100% - 10px);height: 70px;">
                  <select>
                    <?php for ($i=0; $i < 10; $i++) { ?>
                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
          </div>
          <button type="submit" name="button">Pesquisar</button>
        </form>
      </div>
    </header>

  <script>
var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
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
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
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
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
</script>
