const btnMobile = document.querySelector('.btn-menu-mobile');

    function toggleMenu(event) {
      if (event.type === 'touchstart') event.preventDefault();
    
      const nav = document.getElementById('navbar');
    
      nav.classList.toggle('active');
    
      const active = nav.classList.contains('active');
    
      event.currentTarget.setAttribute('aria-expanded', active);
    
    
      
      if (active) {
        event.currentTarget.setAttribute('aria-label', 'Fechar Menu');
      } else {
        event.currentTarget.setAttribute('aria-label', 'Abrir Menu');
      }
    }
    
    
    btnMobile.addEventListener('click', toggleMenu);
    btnMobile.addEventListener('touchstart', toggleMenu);


// if(window.matchMedia("(max-width:1140px)").matches) {



// } 
