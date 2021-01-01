const app = {

  init: function () {
    console.log('app init');

    // Pour afficher le menu en cliquant dessus

    let menu_status = document.querySelector('#menu_status');
    menu_status.addEventListener('click', app.handleMenuStatus);

    // Pour afficher toutes les leçons ou les cacher

    let lesson_status = document.querySelector('#lesson_status');
    lesson_status.addEventListener('click', app.handleLessonStatus);

  },

  // Pour afficher le menu en cliquant dessus
  handleMenuStatus: function () {

    let status = document.querySelector('#menu_status');

    if (status.className === 'open-menu') {
      status.classList.add('menu');
      status.classList.add('close-menu');
      status.classList.add('appear');
      status.classList.remove('open-menu');

      let hide = document.querySelector('header').querySelectorAll('.hide');
      for (const iterator of hide) {
        iterator.classList.remove('hide');
        iterator.classList.add('test');
        let pmenu = document.querySelectorAll('.menu');
        for (const ite of pmenu) {
          ite.classList.add('appear');
        }
      }

      status.innerHTML = 'X';

    } else {

      status.classList.remove('menu');
      status.classList.remove('close-menu');
      status.classList.remove('appear');
      status.classList.add('open-menu');

      let appear = document.querySelectorAll('.test');
      for (const iterator of appear) {
        iterator.classList.add('hide');
        iterator.classList.remove('test');
        let pmenu = document.querySelectorAll('.menu');
        for (const ite of pmenu) {
          ite.classList.remove('appear');
        }
      }

      status.innerHTML = '--------<br>--------<br>--------<br>';
    }
  },

  // Pour afficher toutes les leçons en cliquant

  handleLessonStatus: function () {

    // Pour changer le statut dans mon menu et faire apparaître les choix possibles

    let status = document.querySelector('#lesson_status');

    if (status.className === 'full_lessons open_lessons') {

      status.classList.remove('open_lessons');
      status.classList.add('close_lessons')
      let show_lessons = document.querySelector('#all_lessons');
      show_lessons.classList.remove('hide');
      let name = document.querySelector('.name');
      name.textContent = 'Cacher';

    } else {

      status.classList.add('open_lessons');
      status.classList.remove('close_lessons')
      let hide_lessons = document.querySelector('#all_lessons');
      hide_lessons.classList.add('hide');
      let name = document.querySelector('.name');
      name.textContent = 'Afficher';

    };
  },
};


document.addEventListener('DOMContentLoaded', app.init);