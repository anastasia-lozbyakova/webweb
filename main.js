//form validation
const form = document.getElementById('form');
const email = document.getElementById('email_field');
const password = document.getElementById('password_field');

form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success');
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = "";
    inputControl.classList.add('success');
    inputControl.classList.remove('error');

};

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const validateInputs = () => {
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();

    if(emailValue === '') {
        setError(email, 'email is required');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
    } else {
        setSuccess(email);
    }

    if(passwordValue === '') {
        setError(password, 'password is required');
    } else if (passwordValue.length < 8) {
        setError(password, 'Password must be at least 8 character');
    } else {
        setSuccess(password);
    }
};
//form validation end

//theme changer
let lightMode = localStorage.getItem('lightMode');
const lightModeToggle = document.querySelector('#theme_toggle');

const enableLightMode = () => {
    //1. add the class lightmode to the body
    document.body.classList.add('light_theme');
    //2. update lightMode in the localStorage
    localStorage.setItem('lightMode', 'enabled');
};

const disableLightMode = () => {
    //1. add the class lightmode to the body
    document.body.classList.remove('light_theme');
    //2. update lightMode in the localStorage
    localStorage.setItem('lightMode', null);
};

if (lightMode === 'enabled') {
    enableLightMode();
}

lightModeToggle.addEventListener('click', () => {
    lightMode = localStorage.getItem("lightMode");
    if (lightMode !== 'enabled') {
        enableLightMode();
        console.log(lightMode);
    } else {
        disableLightMode();
        console.log(lightMode);
    }
});
//theme changer end