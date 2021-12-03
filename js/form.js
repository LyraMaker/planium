var btnClose;

btnPlus = document.querySelector("#plus");
btnMinus = document.querySelector("#minus");

// Área de Event Listener
btnPlus.addEventListener("click", function (event) {
  event.preventDefault();

  let fieldBen = document.querySelector("#fieldBen");
  let alerts = document.querySelector("#alerts");

  txtQuantidade = parseInt(document.querySelector("#quantidade").value);
  if ((txtQuantidade > 0) && txtQuantidade != NaN) fieldBen.disabled = false;
  else {
    alerts.innerHTML =
      "<div class='notification is-danger'><button class='delete'></button><p>A quantidade não pode ser <strong>nula ou menor do que 0</strong>!<br>Digite um valor.</div>";

    let btnClose = document.querySelector(".delete");

    btnClose.addEventListener("click", function () {
      this.parentElement.style.display = "none";
    });
  }
});

//Área de funções

function tablePlus() {}
