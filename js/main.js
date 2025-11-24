// Register User
document.getElementById("registerForm").addEventListener("submit", async (e) => {
    e.preventDefault();

    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const age = document.getElementById("age").value;
    const password = document.getElementById("password").value;

    const response = await axios.post(`${API_URL}/registerUser`, { name, email, age, password });

    if (response.status === 200) {
        window.location.href = "login.php";
    } else {
        alert("Registration failed!");
    }
});

// Login User
document.getElementById("loginForm").addEventListener("submit", async (e) => {
    e.preventDefault();

    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;

    const response = await axios.post(`${API_URL}/loginUser`, { email, password });

    if (response.status === 200) {
        sessionStorage.setItem("user", JSON.stringify(response.data.isEmail)); // Store user data in session
        window.location.href = "index.php"; // Redirect to dashboard
    } else {
        alert("Invalid credentials");
    }
});

// Logout Function
function logout() {
    sessionStorage.removeItem("user"); // Clear session
    window.location.href = "login.php"; // Redirect to login page
}
