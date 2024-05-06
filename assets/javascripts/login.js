const passwordInput = document.querySelector('.pasinp');

// Selecting the button
const toggleButton = document.getElementById('toggleBtn');

// Adding click event listener to the button
toggleButton.addEventListener('click', function() {
    // Toggling the type attribute of the password input
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
    } else {
        passwordInput.type = 'password';
    }
});