// Get the modals
var loginModal = document.getElementById("loginModal");
var signupModal = document.getElementById("signupModal");
var resetPasswordModal = document.getElementById("resetPasswordModal");

// Get the buttons that open the modals
var designerBtn = document.getElementById("designerBtn");
var clientBtn = document.getElementById("clientBtn");
var openSignupBtn = document.getElementById("openSignup");
var openResetPasswordBtn = document.getElementById("openResetPassword");

// Get the <span> elements that close the modals
var closeLogin = document.getElementById("closeLogin");
var closeSignup = document.getElementById("closeSignup");
var closeResetPassword = document.getElementById("closeResetPassword");

// Open login modal
designerBtn.onclick = function() {
    loginModal.style.display = "block";
}
clientBtn.onclick = function() {
    loginModal.style.display = "block";
}

// Open sign-up modal
openSignupBtn.onclick = function() {
    loginModal.style.display = "none"; // Close login modal
    signupModal.style.display = "block"; // Open sign-up modal
}

// Open reset password modal
openResetPasswordBtn.onclick = function() {
    loginModal.style.display = "none"; // Close login modal
    resetPasswordModal.style.display = "block"; // Open reset password modal
}

// Close login modal
closeLogin.onclick = function() {
    loginModal.style.display = "none";
}

// Close sign-up modal
closeSignup.onclick = function() {
    signupModal.style.display = "none";
}

// Close reset password modal
closeResetPassword.onclick = function() {
    resetPasswordModal.style.display = "none";
}

// Close modals when clicking outside of them
window.onclick = function(event) {
    if (event.target === loginModal) {
        loginModal.style.display = "none";
    } else if (event.target === signupModal) {
        signupModal.style.display = "none";
    } else if (event.target === resetPasswordModal) {
        resetPasswordModal.style.display = "none";
    }
}

// Toggle password visibility for login
function togglePassword() {
    var passwordInput = document.getElementById("password");
    passwordInput.type = passwordInput.type === "password" ? "text" : "password";
}

function toggleNewPassword() {
    var newPasswordInput = document.getElementById("newPassword");
    newPasswordInput.type = newPasswordInput.type === "password" ? "text" : "password";
}

function toggleConfirmPassword() {
    var confirmPasswordInput = document.getElementById("confirmPassword");
    confirmPasswordInput.type = confirmPasswordInput.type === "password" ? "text" : "password";
}

// Add event listener to the Sign In link in the Sign Up modal
document.getElementById("backToLogin").addEventListener("click", function(event) {
    event.preventDefault(); // Prevent default anchor behavior
    
    // Hide the Sign Up modal
    document.getElementById("signupModal").style.display = "none";
    
    // Show the Login modal
    document.getElementById("loginModal").style.display = "block";
});

