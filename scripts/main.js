document.getElementById('queryForm').addEventListener('submit', function (event) {
    event.preventDefault();

    document.getElementById('error-msg').textContent = '';
    document.querySelector('.response-msg .error').style.display = 'none';
    document.querySelector('.response-msg .success').style.display = 'none';

    var name = document.getElementById('name-input').value;
    console.log(name)
    if (name.trim() === '' && /\d/.test(name)) {
        showError('Please enter your name.');
        return;
    }

    var contact = document.getElementById('mobile-input').value;
    var phonePattern = /^[0-9]{10}$/;
    if (!contact.match(phonePattern)) {
        showError('Please enter a valid 10-digit contact number.');
        return;
    }

    var dob = document.getElementById('dob-input').value;
    if (!dob) {
        showError('Please select your date of birth.');
        return;
    }

    var gender = document.querySelector('input[name="gender"]:checked');
    if (!gender) {
        showError('Please select your gender.');
        return;
    }

    var query = document.getElementById('query').value;
    if (query.trim() === '') {
        showError('Please type your query.');
        return;
    }

    showSuccess('Your query is successfully submitted to us.');
});

function showError(message) {
    document.getElementById('error-msg').textContent = message;
    document.querySelector('.response-msg .error').style.display = 'inline';
}

function showSuccess(message) {
    document.querySelector('.response-msg .success span').textContent = message;
    document.querySelector('.response-msg .success').style.display = 'inline';

    setTimeout(function () {
        document.querySelector('.response-msg .success').style.display = 'none';
    }, 3000);
}
