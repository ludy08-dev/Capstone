<!DOCTYPE html>
<html lang="en">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<head>
  <title>SMCC EDP Portal</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style>
    /* Base layout */
    body, html {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      color: #fff;
    }

    .background {
      position: fixed;
      inset: 0;
      z-index: -1;
      background: linear-gradient(#0be9fd, #000435);
    }

    /* Header */
    .header {
      display: flex;
      align-items: center;
      padding: 12px 20px;
      flex-wrap: wrap;
      background-color: #120c4f;
      border-bottom: 5px solid #f5bc17;
      width: 100%;
      box-sizing: border-box;
    }

    .logo {
      width: 100px;
      height: auto;
      object-fit: contain;
      margin-right: 3px;
      flex-shrink: 0;
    }

    .logo-right {
      width: 100px;
      height: auto;
      object-fit: contain;
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
      border-bottom: 3px solid #f5bc17;
      color: #ffffff;
    }

    .system-name {
      font-size: 1.5rem;
      margin: 0;
      color: #ffffff;
      opacity: 0.85;
    }

    /* Main content */
    .main {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: flex-start; /* Align content to top */
      padding: 0.5in 20px; /* Set top spacing to 0.5 inch */
    }

    .card {
     background: white;
     border-radius: 13px;
     padding: 15px 30px 30px 30px; /* tighter padding inside card */
     max-width: 900px; /* slightly narrower */
     width: 100%; text-align: center; 
     box-shadow: 0 6px 18px rgba(0, 0, 0, 0.4);
    }

    .card-title {
      font-size: 2rem; /* slightly smaller title */
      margin: 0 0 15px 0; /* reduced bottom margin */
      color: #120c4f
    }

   /* Layout ng apat na buttons para maging 2x2 grid */
    .role-buttons {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 12px; /* tighter gap */
    }

    .center-button {
      display: flex;
      justify-content: center;
      margin-top: 15px;
    }

    .center-button .role {
      width: 60%;
    }

    .logout-button {
      position: absolute;
      bottom: 50px;
      right: 80px;
    }

    .logout{
      padding: 5px 40px 7px 40px;
      background:linear-gradient(to left,#ffff00,#f5bc17);
      color: #000;
      border-radius: 10px;
      font-weight: bold;
      text-decoration: none;
      font-size: large;
    }


/* Button style – pantay-pantay ang size at padding */
    .role {
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 10px; /* compact padding */
      min-height: 50px; /* shorter height */
      background: linear-gradient(to left, #ffff00, #f5bc17);
      border-radius: 5px;
      font-weight: bold;
      color: #120c4f;
      font-size: 1.3rem; /* slightly smaller font */
      text-decoration: none;
      box-sizing: border-box;
    }

/* Optional hover effect (gaya lang pero simple) */
    .role:hover {
      background-color: #f5bc17;
      cursor: pointer;
    }


    .edp-welcome {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-left: auto;
      margin-right: 1%;
    }

    .welcome-inline {
      display: flex;
      align-items: center;
      gap: 6px;
      white-space: nowrap; /* ← This forces the text to stay in one line */
      font-size: 1.5rem;
      color: #ffffff;
    }

    .highlight {
      color: #f5bc17;
      font-weight: bold;
    }

    .welcome-inline i {
      font-size: 3rem;
      color: #ffffff;
    }

    .center-button .role {
      background:linear-gradient(to left,#ffff00,#f5bc17);
      
      }

   .student-dropdown {
  position: absolute;
  top: 90px;
  right: 150px;
  background: white;
  color: #120c4f;
  border-radius: 8px;
  box-shadow: 0 6px 18px rgba(0,0,0,0.3);
  display: none;
  z-index: 1000;
  font-size: medium;
}

.student-dropdown ul {
  list-style: none;
  margin: 0;
  padding: 10px 0;
}

.student-dropdown li {
  padding: 10px 20px;
  cursor: pointer;
  display: flex;
  align-items: center;
  gap: 10px;
}

.student-dropdown li:hover {
  background-color: #f5bc17;
  color: #fff;
}

/* Student icon pointer */
.fa-user-graduate {
  cursor: pointer;
}



.modal {
  display: none;
  position: fixed;
  z-index: 9999;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.6);
  justify-content: center;
  align-items: center;
}

.modal-content {
  position: relative;
  background: white;
  padding: 30px 35px;
  border-radius: 12px;
  width: 420px;
  color: #120c4f;
  box-shadow: 0 8px 24px rgba(0,0,0,0.4);
  display: flex;
  flex-direction: column;
  gap: 3px;
}

.modal-content h2 {
  margin: 0 0 10px 0;
  font-size: 1.6rem;
  text-align: center;
}

.modal-content label {
  font-weight: bold;
  font-size: 20px;
  margin-top: 5px;
}

.modal-content input {
  width: 100%;
  padding: 8px 10px;
  border-radius: 6px;
  border: 1px solid #ccc;
  font-size: 1rem;
  box-sizing: border-box;
  margin-left: 10px;
}

.modal-buttons {
  display: flex;
  justify-content: space-between;
  margin-top: 20px;
}

.modal-buttons {
  display: flex;
  justify-content: flex-end; /* align both buttons to the right */
  gap: 12px;                 /* equal spacing between buttons */
  margin-top: 20px;
}

.edit-btn, .save-btn {
  padding: 10px 20px;        /* same padding for both */
  font-size: 1rem;
  border: none;
  border-radius: 20px;
  cursor: pointer;
  min-width: 120px;          /* ensures equal width */
  text-align: center;
}

.save-btn1 {
  padding: 10px 20px;        /* same padding for both */
  font-size: 1rem;
  border: none;
  border-radius: 20px;
  cursor: pointer;
  min-width: 120px;          /* ensures equal width */
  text-align: center;
}

.cls_btn {
  padding: 10px 20px;        /* same padding for both */
  font-size: 1rem;
  font-weight: bold;
  border-radius: 20px;
  cursor: pointer;
  min-width: 120px;          /* ensures equal width */
  text-align: center;

  border: 2px solid #120c4f; /* outline color and thickness */
  background-color: transparent; /* optional: keeps it clean */
  color: #120c4f;            /* text color matches outline */
}

.edit-btn {
  background-color: #1800AD;
  color: white;
}

.cls_btn {
  background-color: #ffffff;
  color: rgb(0, 0, 89);
  
}

.save-btn {
  background-color: #28a745;
  color: white;
}


.save-btn1 {
  background-color: #1800AD;
  color: white;
}


.close-btn {
  position: absolute;
  top: 10px;
  right: 15px;
  font-size: 1.8rem;
  font-weight: bold;
  color: #120c4f;
  cursor: pointer;
}

.closebtn {
  position: absolute;
  top: 10px;
  right: 15px;
  font-size: 1.8rem;
  font-weight: bold;
  color: #120c4f;
  cursor: pointer;
}

.close_btn{
  position: absolute;
  top: 10px;
  right: 15px;
  font-size: 1.8rem;
  font-weight: bold;
  color: #120c4f;
  cursor: pointer;
}


#historyModal .modal-content {
  width: 700px;          /* mas pahaba para kumasya ang table */
  max-width: 90%;        /* responsive, hindi lalampas sa screen */
  padding: 25px 30px;    /* balanced spacing */
  gap: 12px;
}


#passwordModal input {
  width: 100%;
  padding: 8px 10px;
  border-radius: 6px;
  border: 1px solid #ccc;
  font-size: 1rem;
  box-sizing: border-box;
}

#historyModal table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 10px;
  font-size: 0.95rem;
  color: #120c4f;
}

#historyModal thead th {
  background-color: #2970ff;
  color: #fff;
  font-weight: 600;
  padding: 12px 16px;
  border-bottom: 2px solid #ccc;
  text-align: left;
}

#historyModal tbody td {
  padding: 10px 16px;
  border-bottom: 1px solid #eee;
}

#historyModal tbody tr:nth-child(even) {
  background-color: #f9f9f9;
}

#historyModal tbody tr:hover {
  background-color: #eaeaea;
}

#historyModal td:nth-child(2),
#historyModal td:nth-child(3),
#historyModal th:nth-child(2),
#historyModal th:nth-child(3) {
  text-align: center;
}


.password-wrapper {
  position: relative;
  display: flex;
  align-items: center;
}

.password-wrapper input {
  flex: 1;
  padding-right: 35px; /* space for eye */
}

.toggle-eye {
  cursor: pointer;
  margin-left: -30px;
  color: #0d009c;
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
  <div class="edp-welcome">
    <div class="welcome-inline">
      <span>Welcome, <span class="highlight">Student</span></span>
      <i class="fas fa-user-graduate"></i>
    </div>
    <img src="EDP.png" alt="EDP Logo" class="logo-right" />
  </div>
 
</header>

<main class="main">
  <section class="card">
    <h2 class="card-title">Service Selection</h2>
   <div class="role-buttons">
      <a href="refund.php" class="role">Refund Request</a>
      <a href="id_rep.php" class="role">ID Replacement Request</a>
      <a href="reset_pass.php" class="role">Password Reset Request</a>
      <a href="docum.php" class="role">Document Request</a>
    </div>

  

    <div class="logout-button">
      <a href="signupas.php" class="logout">Log out</a>
    </div>
  </section>
</main>

<div class="student-dropdown" id="studentDropdown">
  <ul>
    <li id="studentInfo"><i class="fas fa-user-graduate"></i> Student Info</li>
    <li id="changePassword"><i class="fas fa-lock"></i> Change Password</li>
    <li id="historyServices"><i class="fas fa-history"></i> History Services</li>
    <li id="signOut"><i class="fas fa-sign-out-alt"></i> Sign out</li>
  </ul>
</div>

<!-- Student Info Modal -->
<div id="studentModal" class="modal">
  <div class="modal-content">
    <span class="close-btn">&times;</span>
    <h2>Student Info</h2>
    <label>Full Name</label>
    <input type="text" placeholder="" disabled />
    <label>Username</label>
    <input type="text" placeholder="" disabled />
    <label>Email</label>
    <input type="email" placeholder="" disabled />
    <label>ID Number</label>
    <input type="text" placeholder="" disabled />

    <div class="modal-buttons">
      <button id="editBtn" class="edit-btn">Edit</button>
      <button id="saveBtn" class="save-btn">Save Changes</button>
    </div>
  </div>
</div>

<!-- Change Password Modal -->
<div id="passwordModal" class="modal">
  <div class="modal-content">
    <span class="closebtn">&times;</span>
    <h2>Change Password</h2>
    <label>Current Password</label>
<div class="password-wrapper">
  <input type="password" id="currentPassword" oninput="showEye('currentPasswordEye', this)" />
  <span id="currentPasswordEye" class="toggle-eye" onclick="togglePassword('currentPassword', this)" style="display:none;">
    <i class="fa fa-eye-slash"></i>
  </span>
</div>

<label>New Password</label>
<div class="password-wrapper">
  <input type="password" id="newPassword" oninput="showEye('newPasswordEye', this)" />
  <span id="newPasswordEye" class="toggle-eye" onclick="togglePassword('newPassword', this)" style="display:none;">
    <i class="fa fa-eye-slash"></i>
  </span>
</div>

<label>Confirm New Password</label>
<div class="password-wrapper">
  <input type="password" id="confirmPassword" oninput="showEye('confirmPasswordEye', this)" />
  <span id="confirmPasswordEye" class="toggle-eye" onclick="togglePassword('confirmPassword', this)" style="display:none;">
    <i class="fa fa-eye-slash"></i>
  </span>
</div>



    <div class="modal-buttons">
      <button id="savePasswordBtn" class="save-btn1">Save Changes</button>
      <button id="closePasswordBtn" type="button" class="cls_btn">Close</button>
    </div>
  </div>
</div>
  </div>
</div>

<!-- History Services Modal -->
<div id="historyModal" class="modal">
  <div class="modal-content">
    <span class="close_btn">&times;</span>
    <h2>History Services</h2>
    <table id="historyTable" style="width:100%; border-collapse: collapse;">
      <thead>
        <tr style="text-align:left; border-bottom: 2px solid #ccc;">
          <th>Request Type</th>
          <th>Date Requested</th>
          <th>Date Approved</th>
        </tr>
      </thead>
      <tbody>
        <!-- rows will be injected here -->
      </tbody>
    </table>

    <div class="modal-buttons" style="margin-top: 20px;">
      <button id="closeHistoryBtn" type="button" class="cls_btn">Close</button>
    </div>
  </div>
</div>


<script>
  // Eye toggle (unchanged)
  function togglePassword(id, eyeElement) {
    const input = document.getElementById(id);
    const icon = eyeElement.querySelector("i");

    if (input.type === "password") {
      input.type = "text";
      icon.classList.remove("fa-eye-slash");
      icon.classList.add("fa-eye");
    } else {
      input.type = "password";
      icon.classList.remove("fa-eye");
      icon.classList.add("fa-eye-slash");
    }
  }

  function showEye(eyeId, input) {
    const eye = document.getElementById(eyeId);
    eye.style.display = input.value.length > 0 ? "inline" : "none";
  }
</script>

<script>
  // Student dropdown + info modal
  const studentIcon = document.querySelector('.fa-user-graduate');
  const dropdown = document.getElementById('studentDropdown');
  const studentInfo = document.getElementById('studentInfo');
  const modal = document.getElementById('studentModal');
  const closeBtn = document.querySelector('.close-btn');

  // Toggle dropdown kapag icon ang na-click
  studentIcon.addEventListener('click', () => {
    dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
  });

  // Pag-click sa Student Info → hide dropdown + show modal
  studentInfo.addEventListener('click', () => {
    dropdown.style.display = 'none';
    modal.style.display = 'flex';
    document.body.style.overflow = 'hidden';
  });

  // Close modal
  closeBtn.addEventListener('click', () => {
    modal.style.display = 'none';
    document.body.style.overflow = 'auto';
  });

  // Close modal kapag click sa labas
  window.addEventListener('click', (e) => {
    if (e.target === modal) {
      modal.style.display = 'none';
      document.body.style.overflow = 'auto';
    }
  });
</script>

<!-- Change Password Modal -->
<script>
  const changePasswordItem = document.getElementById('changePassword'); 
  const passwordModal = document.getElementById('passwordModal');
  const closePasswordBtn = document.getElementById('closePasswordBtn'); 
  const savePasswordBtn = document.getElementById('savePasswordBtn');
  const close = document.querySelector('.closebtn'); 

  changePasswordItem.addEventListener('click', () => {
    dropdown.style.display = 'none';
    passwordModal.style.display = 'flex';
    document.body.style.overflow = 'hidden';
  });

  closePasswordBtn.addEventListener('click', () => {
    passwordModal.style.display = 'none';
    document.body.style.overflow = 'auto';
  });

  close.addEventListener('click', () => {
    passwordModal.style.display = 'none';
    document.body.style.overflow = 'auto';
  });

  savePasswordBtn.addEventListener('click', () => {
    const inputs = passwordModal.querySelectorAll('input');
    const current = inputs[0].value;
    const newPass = inputs[1].value;
    const confirmPass = inputs[2].value;

    if (!current || !newPass || !confirmPass) {
      alert('Please fill in all fields.');
      return;
    }
    if (newPass !== confirmPass) {
      alert('New passwords do not match.');
      return;
    }

    alert('Password changed successfully!');
    passwordModal.style.display = 'none';
    document.body.style.overflow = 'auto';
  });
</script>

<script>
  const historyItem = document.getElementById('historyServices');
  const historyModal = document.getElementById('historyModal');
  const closeHistoryBtn = document.getElementById('closeHistoryBtn');
  const historyTableBody = document.querySelector('#historyTable tbody');
  const close_btn = document.querySelector('.close_btn');

  const historyData = [
    { type: 'ID Replacement', requested: '2025-10-08', approved: '2025-10-09' },
    { type: 'Password Reset', requested: '2025-10-10', approved: '2025-10-11' },
    { type: 'Document', requested: '2025-10-16', approved: '2025-10-17' }
  ];

  function renderHistory() {
    historyTableBody.innerHTML = '';
    historyData.forEach(item => {
      const row = document.createElement('tr');
      row.innerHTML = `
        <td>${item.type}</td>
        <td>${item.requested}</td>
        <td>${item.approved}</td>
      `;
      historyTableBody.appendChild(row);
    });
  }

  historyItem.addEventListener('click', () => {
    dropdown.style.display = 'none';
    renderHistory();
    historyModal.style.display = 'flex';
    document.body.style.overflow = 'hidden';
  });

  closeHistoryBtn.addEventListener('click', () => {
    historyModal.style.display = 'none';
    document.body.style.overflow = 'auto';
  });

  close_btn.addEventListener('click', () => {
    historyModal.style.display = 'none';
    document.body.style.overflow = 'auto';
  });

  window.addEventListener('click', (e) => {
    if (e.target === historyModal) {
      historyModal.style.display = 'none';
      document.body.style.overflow = 'auto';
    }
  });
</script>


 






</body>
</html>
