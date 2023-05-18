function retornaValores(conteudo) {
    if (!("erro" in conteudo)) {
        document.getElementById('rua').value=(conteudo.logradouro)
        document.getElementById('bairro').value=(conteudo.bairro)
        document.getElementById('localidade').value=(conteudo.localidade)
        document.getElementById('uf').value=(conteudo.uf)
        
        document.getElementById('complemento').value=(conteudo.complemento)
    }else{
        alert("CEP não encontrado!")
    }
}

function buscaCep(valor) {
    var cep = valor.replace(/\D/g, '')

    if (cep != "") {
        var validarCEP = /^[0-9]{8}$/
        if (validarCEP.test(cep)) {
            document.getElementById('rua').value= "0..."
            document.getElementById('bairro').value="..."
            document.getElementById('localidade').value="..."
            document.getElementById('uf').value="Procurando"
            
            
            var script = document.createElement('script')
            script.src = `https://viacep.com.br/ws/${cep}/json/?callback=retornaValores`
            document.body.appendChild(script)
        }else{
            alert("pipocou, escreveu errado")
        }
    }
}