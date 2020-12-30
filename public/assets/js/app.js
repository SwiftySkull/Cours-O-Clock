const app = {

  init: function () {
    console.log('app init');

    // Pour afficher le menu en cliquant dessus
    let open_menu = document.querySelector('.open-menu');
    open_menu.addEventListener('click', app.handleOpenMenu);







  },



  // Pour afficher le menu en cliquant dessus

  handleOpenMenu: function () {

    // Pour changer le statut dans mon menu et faire apparaître les choix possibles

    let hide = document.querySelectorAll('.hide');
    
    for (const iterator of hide) {
      iterator.classList.remove('hide');
      iterator.classList.add('test');
      let pmenu = document.querySelectorAll('.menu');
      for (const ite of pmenu) {
        ite.classList.add('appear');
      }
    }
    let menu = document.querySelector('.open-menu');
    menu.classList.add('hide');

    // Pour cacher le menu en cliquant dessus

    let close_menu = document.querySelector('.close-menu');
    close_menu.addEventListener('click', app.handleCloseMenu);

  },





  // Pour cacher le menu en cliquant dessus

  handleCloseMenu: function () {

    // Pour changer le statut dans mon menu et faire disparaître les choix possibles

    let appear = document.querySelectorAll('.test');
    for (const iterator of appear) {
      iterator.classList.add('hide');
      iterator.classList.remove('test');
      let pmenu = document.querySelectorAll('.menu');
      for (const ite of pmenu) {
        ite.classList.remove('appear');
      }
    }
    let menu = document.querySelector('.open-menu');
    menu.classList.remove('hide');

    let open_menu = document.querySelector('.open-menu');
    open_menu.addEventListener('click', app.handleOpenMenu);

  }















};


document.addEventListener('DOMContentLoaded', app.init);