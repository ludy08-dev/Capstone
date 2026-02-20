<!DOCTYPE html>
<html lang="en">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<style>
  /* Background and layout */
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
  background-size: cover;       /* fills the screen */
  background-position: center;  /* keeps it centered */
  background-repeat: no-repeat;
  background-attachment: fixed; /* prevents background from "following" zoom */
}


/* Header */
.header {
  display: flex;
  align-items: center;
  padding: 12px 20px;              /* reduced vertical padding */
  background-color: #120c4f;
  border-bottom: 5px solid #FFD700;


  /* Ito ang critical na linya */
  width: 100%;
  box-sizing: border-box;
}

.logo {
  width: 100px;              /* slightly larger than text height */
  height: auto;
  object-fit: contain;
  margin-right: 3px;
  flex-shrink: 0;
}

.logo-right {
  width: 100px;
  height: auto;
  object-fit: contain;
  margin-left: auto; /* pushes it to the far right */
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
  margin: 0px 0 0;
  color: #ffffff;
  opacity: 0.85;
}


/* Main card container */
.main {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0;
  position: absolute;
  top: 60%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
}

.card {
  background: linear-gradient(to right, #000080, #120c4f);
  color: #FFD700;
  border-radius: 13px;
  padding: 20px 5px 24px 5px;
  max-width: 400px;
  width: 100%;
  text-align: center;
  border: 3px solid #FFD700;
  box-shadow:
    0 8px 24px rgba(0, 0, 0, 0.5),
    0 12px 36px rgba(0, 0, 0, 0.3);
}

.card-title {
  font-size: 2.2rem;
  font-weight: 500;
  margin: 0 0 20px 0;
  color: #f9f908;
}

.role-buttons {
  display: flex;
  flex-direction: column;
  gap: 14px;
}

.role {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  padding: 10px 20px;
  width: 220px;           /* fixed width for visual balance */
  margin: 0 auto;         /* center horizontally */
  border-radius: 10px;
  text-decoration: none;
  font-weight: 600;
  font-size: 1.5rem;
  background-color: #f9fbfc;
  color: #1a1f24;
  border: 1px solid #e6eaef;
  transition: transform 0.2s ease, box-shadow 0.2s ease;
}
.role i {
  font-size: 1.5rem;
}

.role.student i { color: #120c4f; }
.role.personnel i { color: #120c4f; }
.role.admin i { color: #120c4f; }

.role:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 16px rgba(0,0,0,0.1);
}

</style>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>SMCC EDP Sign-Up</title>
  <link rel="stylesheet" href="styles.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>
<body>
  <!-- Background handled entirely in CSS -->
 <div class="background"></div>

  <header class="header">
    <img src="LOGO.png" alt="SMCC Logo" class="logo" />
  
</style>
    <div class="title-group">
      <h1 class="school-name">Saint Michael College of Caraga</h1>
      <p class="system-name">Electronic Data Processing (EDP)</p>
    </div>
       <img src="EDP.png" alt="EDP Logo" class="logo-right" />
  </header>

  <main class="main">
    <section class="card">
      <h2 class="card-title">Sign Up As</h2>
      <div class="role-buttons">
        <a href="#" class="role student">
          <i class="fas fa-user-graduate"></i>
          <span>Student</span>
        </a>
        <a href="signup-personnel.php" class="role personnel">
          <i class="fas fa-user-tie"></i>
          <span>Personnel</span>
        </a>
        <a href="signup-admin.php" class="role admin">
          <i class="fas fa-user-shield"></i>
          <span>Admin</span>
        </a>
      </div>
    </section>
  </main>
 <script>
  document.querySelector('.role.student').addEventListener('click', function (e) {
    e.preventDefault();
    document.getElementById('student-signup').classList.remove('hidden');
  });
</script>

</body>
</html>

<main class="main">
  <section class="card">
    <h2 class="card-title">Sign Up As</h2>
    <div class="role-buttons">
      <a href="signupform.php" class="role student">
        <i class="fas fa-user-graduate"></i>
        <span>Student</span>
      </a>
      <a href="signupform.php" class="role personnel">
        <i class="fas fa-user-gear"></i>
        <span>Personnel</span>
      </a>
      <a href="login.php" class="role admin">
        <i class="fas fa-user"></i>
        <span>Admin</span>
      </a>
    </div>
  </section>
</main>
