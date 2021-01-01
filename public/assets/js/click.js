let counter = 0;
let real_click = 0;
let double = 1;

const click = {
    init: function () {
        console.log('click init');

        let clicker = document.querySelector('#counter');
        clicker.addEventListener('click', click.handleClick);

        let clean = document.querySelector('#clean_trophy');
        clean.addEventListener('click', click.handleCleanTrophy);

        let double_click = document.querySelector('#double_click');
        double_click.addEventListener('click', click.handleDoubleClick);
    },

    handleClick: function () {
        let count = document.querySelector('#count');

        if (double === 4){
            counter += double;
            real_click++;

        } else if(double === 3){
            counter += double;
            real_click++;

        } else if (double === 2){
            counter += double;
            real_click++;

        } else {
            counter++;
            real_click++;
        };

        click.messageFunction();
        click.trophyFunction();
    
        count.textContent = counter;
    },

    messageFunction: function () {

        let twenty = real_click / 20;

        if (Number.isInteger(twenty)){
            let message = document.querySelector('#message_perso');
            let mess = 'Tu as réellement cliqué ' + real_click + ' fois ! Continue comme ça !';
            message.textContent = mess;
        } else {

            let message = document.querySelector('#message_perso');
            message.textContent = '';
        }

    },

    trophyFunction: function () {

        let thirty = real_click / 30;

        if (Number.isInteger(thirty)){
            let trophy_area = document.querySelector('#trophy');

            let last_trophy = document.querySelector('#last_trophy');

            let trophy = '<div class="trophy_bloc"><p class="trophy_icon">🏆</p><p class="trophy_text">' + real_click + ' clicks !</p></div>';

            last_trophy.innerHTML = trophy;

            trophy_area.innerHTML = trophy + trophy_area.innerHTML;

        }
    },

    handleCleanTrophy: function () {
        let trophy_area = document.querySelector('#trophy');
        trophy_area.textContent = '';
    },

    handleDoubleClick: function () {
        let count = document.querySelector('#count');
        let multiple_click = document.querySelector('#double_click');

        if (double === 1 && counter >= 100){
            counter -= 100;
            double++;
            count.textContent = counter;
            multiple_click.textContent = 'Triple clic';

        
        } else if (double === 2 && counter >= 500) {
            counter -= 500;
            double++;
            count.textContent = counter;
            multiple_click.textContent = 'Quadruple clic';


        } else if (double === 3 && counter >= 1000) {
            counter -= 1000;
            double++;
            count.textContent = counter;
            multiple_click.className = 'hide';


        }
    }
}


document.addEventListener('DOMContentLoaded', click.init);