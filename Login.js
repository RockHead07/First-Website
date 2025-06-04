// Selecting elements from the HTML
const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

// Admin credentials
const adminUsername = "admin";
const adminPassword = "admin123";

// Switch to registration form
    registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

// Switch to login form
loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});

// Handle the Sign In button click for login functionality
document.querySelector('.sign-in form').addEventListener('submit', (e) => {
    e.preventDefault(); // Prevent form submission to server

    const username = document.querySelector('.sign-in input[type="text"]').value;
    const password = document.querySelector('.sign-in input[type="password"]').value;

    // Check credentials
    if (username === adminUsername && password === adminPassword) {
        alert("Welcome Back, Admin!");
        window.location.href = 'index.html'; // Redirect if credentials are correct
    } else {
        alert("Invalid username or password");
    }
});
