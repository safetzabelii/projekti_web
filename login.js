const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');
let errors = []

form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
    console.log("hereeee123", errors)
    if (errors.length === 0) {
        window.location.href = "homepage.html";
    }
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};



const validateInputs = () => {
    const usernameValue = username.value.trim();

    const passwordValue = password.value.trim();
    ;

    if (usernameValue === '') {
        setError(username, 'Username is required');
        errors.push('Username is required');
    } else {
        setSuccess(username);
        if (errors.length > 0) {
            errors = errors.filter(error => error !== 'Username is required');

        }
    }



    if (passwordValue === '') {
        setError(password, 'Password is required');
        errors.push('Password is required');
    } else if (passwordValue.length < 8) {
        setError(password, 'Password must be at least 8 character.')
        errors.push('Password must be at least 8 character.');
    } else {
        setSuccess(password);
        if (errors.length > 0) {
            const requiredError = errors.find(error => error === 'Password is required');
            if (requiredError) {
                errors = errors.filter(error => error !== 'Password is required');
            } else {
                errors = errors.filter(error => error !== 'Password must be at least 8 character.')
            }
        }
    }




};
