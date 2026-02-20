// auth.js

// Guard check for protected pages
(function() {
  const token = localStorage.getItem("authToken");
  if (!token) {
    // No token → redirect to login / sign-up UI
    window.location.href = "signupas.html"; // adjust filename of your first UI
  }
})();
