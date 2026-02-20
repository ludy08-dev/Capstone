<?php
// Start PHP at the very top
session_start();
$host = "localhost";
$username = "root";
$password = "";
$database = "document_request_db";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$message = "";

// Handle form submit
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email    = $_POST['email']    ?? '';
    $password = $_POST['password'] ?? '';

    // Simple validation
    if ($email === '' || $password === '') {
        $message = "Please enter both email and password.";
    } else {
        // Look for user by email
        $sql  = "SELECT user_id, full_name, email, password, role 
                 FROM users 
                 WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($row = $result->fetch_assoc()) {
            // Password in DB was stored using password_hash()
            if (password_verify($password, $row['password'])) {
                // Login success – set session
                $_SESSION['user_id']   = $row['user_id'];
                $_SESSION['full_name'] = $row['full_name'];
                $_SESSION['role']      = $row['role'];
                $_SESSION['email']     = $row['email'];

                // Redirect to dashboard or home page
                header("Location: dashboard.php");
                exit;
            } else {
                $message = "Invalid email or password.";
            }
        } else {
            $message = "Invalid email or password.";
        }

        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>SMCC EDP Sign-Up</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style>
    body, html {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
      height: 100%;
      color: #fff;
    }

    .background {
      position: fixed;
      inset: 0;
      z-index: -1;
      background-image: url('SMCC.png');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }

    .header {
      display: flex;
      align-items: center;
      padding: 12px 20px;
      background-color: #120c4f;
      border-bottom: 5px solid #FFD700;
      width: 100%;
      box-sizing: border-box;
    }

    .logo {
      width: 100px;
      margin-right: 3px;
    }

    .logo-right {
      width: 100px;
      margin-left: auto;
      margin-right: 1%;
    }

    .title-group {
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .school-name {
      font-size: 1.6rem;
      font-weight: bold;
      margin: 0;
      padding-bottom: 4px;
      border-bottom: 3px solid #FFD700;
      color: #ffffff;
    }

    .system-name {
      font-size: 1.5rem;
      margin: 0;
      color: #ffffff;
      opacity: 0.85;
    }

    .login-container {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: calc(100vh - 150px);
      padding: 10px 20px;
    }

    .login-card {
      background: linear-gradient(to right, #000080, #120c4f);
      color: #ffffff;
      border-radius: 13px;
      padding: 10px 25px;
      max-width: 400px;
      width: 100%;
      text-align: center;
      border: 3px solid #FFD700;
      box-shadow:
        0 8px 24px rgba(0, 0, 0, 0.5),
        0 12px 36px rgba(0, 0, 0, 0.3);
    }

    .login-card h2 {
      margin-bottom: 20px;
      font-size: 1.6rem;
      font-weight: bold;
    }

    .login-card label {
      display: block;
      text-align: left;
      margin: 10px 0 5px;
      font-weight: bold;
    }

    .login-card input {
      width: 90%;
      padding: 10px;
      border-radius: 6px;
      border: none;
      font-size: 0.95rem;
      margin-bottom: 15px;
      background: #fff;
      color: #000;
    }

    .login-btn {
      width: 70%;
      padding: 12px;
      background: linear-gradient(to left, #ffff00, #f5bc17);
      color: #120c4f;
      font-weight: bold;
      font-size: 1.1rem;
      border: none;
      border-radius: 20px;
      cursor: pointer;
      margin-top: 20px;
      margin-bottom: 10px;
    }

    .error-message {
      color: #ffcccc;
      background-color: rgba(255, 0, 0, 0.2);
      border-radius: 6px;
      padding: 8px 10px;
      margin-bottom: 10px;
      font-size: 0.9rem;
    }

  </style>
</head>
<body>

  <div class="background"></div>

  <header class="header">
    <img src="LOGO.png" alt="SMCC Logo" class="logo" />
    <div class="title-group">
      <h1 class="school-name">Saint Michael College of Caraga</h1>
      <p class="system-name">Electronic Data Processing (EDP)</p>
    </div>
    <img src="EDP.png" alt="EDP Logo" class="logo-right" />
  </header>

  <div class="login-container">
    <div class="login-card">
      <h2 style="margin-top: 1px;color: #f5bc17;">Log In</h2>

      <?php if ($message !== ""): ?>
        <div class="error-message"><?= htmlspecialchars($message) ?></div>
      <?php endif; ?>

      <form method="POST" action="">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="" required />

        <label for="password" style="margin-top: 0px;">Password</label>
        <input type="password" id="password" name="password" required />

        <button type="submit" class="login-btn">Log In</button>
      </form>
    </div>
  </div>

</body>
</html>