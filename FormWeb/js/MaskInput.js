
function mascaraTel(mascaraInput) {
    const tamanhoInput = document.getElementById('telefoneInput').maxLength
    let valorInput = document.getElementById('telefoneInput').value
    //console.log('tamanho máximo:', tamanhoInput, 'valor input:', valorInput)
    //let valorSemPonto = document.getElementById('telefoneInput').value.replace(/([^0-9]+)/g, "")
    const mascara = {
      telefone: valorInput.replace(/[^\d]/g,"").replace(/^(\d{2})(\d{5})(\d{4}).*/, "($1) $2-$3")
    };
  
    if (valorInput.length === tamanhoInput) {
      document.getElementById('telefoneInput').value = mascara[mascaraInput]
    } /* else{
      document.getElementById('telefoneInput').value = valorSemPonto
    } */
  }
  
  function mascaraCpf(mascaraInput) {
    const tamanhoInput = document.getElementById('cpf').maxLength
    let valorInput = document.getElementById('cpf').value
    console.log('tamanho máximo:', tamanhoInput, 'valor input:', valorInput)
    //let valorSemPonto = document.getElementById('telefoneInput').value.replace(/([^0-9]+)/g, "")
    const mascara = {
      cpf: valorInput.replace(/[^\d]/g,"").replace(/^(\d{3})(\d{3})(\d{3})(\d{2}).*/, "$1.$2.$3-$4")
    };
  
    if (valorInput.length === tamanhoInput) {
      document.getElementById('cpf').value = mascara[mascaraInput]
    } 
  }
  
  function mascaraCep(mascaraInput) {
    const tamanhoInput = document.getElementById('cepInput').maxLength
    let valorInput = document.getElementById('cepInput').value
  
    const mascara = {
      cep : valorInput.replace(/[^\d]/g, "").replace(/^(\d{5})(\d{3}).*/, "$1-$2")
    }
  
    if (valorInput.length === tamanhoInput) {
      document.getElementById('cepInput').value = mascara[mascaraInput]
    }
  }
  
  /* Mensagens de Alertas */
  
  var mensagemDeAlerta = document.getElementById('mensagemDeAlerta')
  var gatilhoDaMensagem = document.getElementById('botaoAlerta')
  
  function alert(message, type) {
    var criarMensagem = document.createElement('div')
    criarMensagem.innerHTML = '<div class="alert alert-' + type + 
    ' alert-dismissible" role="alert">' + message + 
    '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
  
    mensagemDeAlerta.append(criarMensagem)
  }
  
  if (gatilhoDaMensagem) {
    gatilhoDaMensagem.addEventListener('click', function () {
      alert('Seu formulário foi salvo com Sucesso!', 'success')
    })
  }
  
  

  

function mais(){
  var atual = document.getElementById("total").value;
  var novo = atual - (-1); //Evitando Concatenacoes
  document.getElementById("total").value = novo;
}

function menos(){
  var atual = document.getElementById("total").value;
  if(atual > 0) { //evita números negativos
    var novo = atual - 1;
    document.getElementById("total").value = novo;
  }
}


