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
        window.location.href = "login.html";
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

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const validateInputs = () => {
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();

    if (usernameValue === '') {
        setError(username, 'Username is required');
        errors.push('Username is required');
    } else {
        setSuccess(username);
        if (errors.length > 0) {
            errors = errors.filter(error => error !== 'Username is required');

        }
    }

    if (emailValue === '') {
        setError(email, 'Email is required');
        errors.push('Email is required');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
        errors.push('Provide a valid email address');
    } else {
        setSuccess(email);
        if (errors.length > 0) {
            const requiredError = errors.find(error => error === 'Email is required');
            if (requiredError) {
                errors = errors.filter(error => error !== 'Email is required');
            } else {
                errors = errors.filter(error => error !== 'Provide a valid email address')
            }
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

    if (password2Value === '') {
        setError(password2, 'Please confirm your password');
        errors.push('Please confirm your password');
    } else if (password2Value !== passwordValue) {
        setError(password2, "Passwords do not match");
        errors.push('Passwords do not match');
    } else {
        setSuccess(password2);
        if (errors.length > 0) {
            const confirmError = errors.find(error => error === 'Please confirm your password');
            if (confirmError) {
                errors = errors.filter(error => error !== 'Please confirm your password');
            } else {
                errors = errors.filter(error => error !== 'Passwords do not match')
            }
        }
    }


};
