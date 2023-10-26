let select = document.querySelector('#usuarios')


    // let url = window.location.href
    var url = new URL(window.location);
    var tipo = url.searchParams.get("tipo");

    console.log(url)
    console.log(tipo)

    if (tipo === 'empresa') {
        select.value = 'value-Empresa'; 
    } else if (tipo === 'pessoa') {
        select.value = 'value-Pessoa';        
    } else {
        select.value = '';        

    }

function atualizouSelect() {
    let select = document.querySelector('#usuarios')
    let optionValue = select.options[select.selectedIndex]

    // let value = optionValue.value 
    // let text = optionValue.text
    

    // http://localhost/144/Accessy_codigo_ultimos_ajustes/TCC/vers%c3%a3o_php/form_login.php?tipo=pessoa

    // console.log(value, text)
    let formPessoa = document.querySelector('#formPessoa')
    let formEmpresa = document.querySelector('#formEmpresa')

    if(select.value === 'value-Empresa'){
        
        // let text = optionValue.text = 'Empresa'

        formPessoa.classList.add('escondido')
        formEmpresa.classList.remove('escondido')
    
    }  else if(select.value === 'value-Pessoa'){

            formPessoa.classList.remove('escondido')
            formEmpresa.classList.add('escondido')
    
    }
    
    
}

atualizouSelect()
