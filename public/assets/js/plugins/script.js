
const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});

$(document).ready(function () {
    if (!$.browser.webkit) {
        $('.wrapper').html('<p>Sorry! Non webkit users. :(</p>');
    }
});