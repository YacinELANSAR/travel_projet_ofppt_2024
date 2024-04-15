let login_form = document.querySelector('#login_form')
login_form.onsubmit = (event) => {
    let inputs = login_form.querySelectorAll('.form-input')
    let isEmpty = false;

    inputs.forEach(input => {
        let val = input.value.trim();
        let form_group = input.parentElement;
        let err_span = form_group.querySelector(`span[data-err-for="${input.id}"]`);

        switch(input.getAttribute('type')) {
           

            case 'password':
                if (val.length < 6) {
                    form_group.classList.add('err');
                    form_group.classList.remove('success');
                    err_span.innerHTML = 'Password must be at least 6 characters';
                    isEmpty = true;
                } else {
                    form_group.classList.add('success');
                    form_group.classList.remove('err');
                    err_span.innerHTML = '';
                }
                break;

            case 'email':
                if (val.length === 0 || !validateEmail(val)) {
                    form_group.classList.add('err');
                    form_group.classList.remove('success');
                    err_span.innerHTML = 'Email is invalid';
                    isEmpty = true;
                } else {
                    form_group.classList.add('success');
                    form_group.classList.remove('err');
                    err_span.innerHTML = '';
                }
                break;
        }
    });

    if (isEmpty) {
        event.preventDefault();
    }
};
