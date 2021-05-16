var banco = window.localStorage;

function openForm() {
    document.getElementById("myForm").style.display = "block";
  }
  
  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }



function AddCarrinho(produto, qtd, valor, posicao)
{
  localStorage.setItem("produto" + posicao, produto);
  localStorage.setItem("qtd" + posicao, qtd);
  valor = valor * qtd;
  localStorage.setItem("valor" + posicao, valor);
  alert("Adicionado ao Carrinho");
}

$(document).ready(function(){ 

  $("#limpar").click(function(){ /* botao para entrar*/ 
		for(var i =0; i<20; i++){
			localStorage.removeItem("produto" + i);
			localStorage.removeItem("qtd" + i);
			localStorage.removeItem("valor" + i);
			location.reload();
		}
	});

  var total = 0; 
  var i = 0;  
  var valor = 0;		

  for(i=1; i<=20; i++)
  {
    var prod = localStorage.getItem("produto" + i + "");
      
    if(prod != null) 
    {
      $("#qtd").append("<br>" + localStorage.getItem("qtd" + i) + "<br>");
      $("#pdt").append("<br>" + localStorage.getItem("produto" + i)+ "<br>");
      $("#pço").append("<br>" + "R$" + localStorage.getItem("valor" + i)+ "<br>");

      valor = parseFloat(localStorage.getItem("valor" + i));
      total = (total + valor);
    }
  }
  total = total.toFixed(2);
  $("#total").append(total);
  $("#pagar_boleto").append(" R$ " + total);
  $("#pagar_cartao").append(" R$ " + total);
});