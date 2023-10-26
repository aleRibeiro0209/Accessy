const perfil = document.querySelector('.perfil')
const btnUser = document.querySelector('.button-user')


btnUser.addEventListener("click", () => {
    if(perfil.classList.item(1) == 'ativo') {
        perfil.classList.remove('ativo')
    } else {
        perfil.classList.add('ativo')
    }
});

