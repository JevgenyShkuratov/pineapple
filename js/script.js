let email = document.getElementById('email');
let checkbox = document.getElementById('checkbox');


function validateForm() {
    if (email.value === '') {
        alert('Email address is required');
        return false;
    }
    if (checkbox.checked === false) {
        alert('You must accept the terms and conditions');
        return false;
    }

    if (email.value.endsWith('.co')) {
        alert('We are not accepting subscriptions from Colombia emails');
        return false;
    }
    return true;

}