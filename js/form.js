var btnClose;

btnPlus = document.querySelector("#plus");
btnMinus = document.querySelector("#minus");

// Área de Event Listener


var posi = 0;
btnPlus.addEventListener("click", function (event) {
 event.preventDefault;

 let ben = document.querySelector("#benForm");

 table = "<fieldset id='ben["+posi+"]' class='p-3'><div class='field is-horizontal'><div class='field-body'><div class='field'><p class='control is-expanded has-icons-left'><input class='input' name='ben["+posi+"][nome]' id='nome' type='text' placeholder='Seu nome' required><span class='icon is-small is-left'><i class='fa fa-user'></i></span></p></div><div class='field'><p class='control is-expanded has-icons-left'><input class='input' name='ben["+posi+"][idade]' id='idade' type='number' placeholder='Digite sua Idade' required><span class='icon is-small is-left'><i class='fa fa-birthday-cake'></i></span></p></div><div class='field'><p class='control is-expanded has-icons-left'><input class='input' name='ben["+posi+"][registro]' id='registro' type='text' placeholder='Registro do plano' required><span class='icon is-small is-left'><i class='fa fa-file'></i></span></p></div></div></div></fieldset>";

 ben.innerHTML+=table;

 posi++;
});

btnMinus.addEventListener("click",function(event){
  event.preventDefault;

  let ben = document.querySelector("#benForm");
  let remove =  ben.lastElementChild;
  ben.removeChild(remove);

  posi--;
  
})

//Área de funções

function tablePlus() {}
