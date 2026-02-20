<!DOCTYPE html>
<html lang="en">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<head>
  
  <title>Student Sign-Up</title>
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
  background: url('SMCC.png') no-repeat center/cover;
}

.header {
  display: flex;
  align-items: center;
  padding: 12px 20px;
  background: #120c4f;
  border-bottom: 5px solid #FFD700;
}

.logo { width: 100px; margin-right: 3px; }
.logo-right { width: 100px; margin-left: auto; margin-right: 1%; }

.title-group { display: flex; flex-direction: column; }
.school-name {
  font-size: 1.6rem;
  font-weight: bold;
  margin: 0;
  padding-bottom: 4px;
  border-bottom: 3px solid #FFD700;
}
.system-name { font-size: 1.5rem; margin: 0; opacity: 0.85; }

.signup-container {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 90vh;
  background: url("image/smcc-background.jpg") no-repeat center/cover;
  padding: 20px;
}

.signup-form {
  background: linear-gradient(to right, #000080, #120c4f); /* gradient background */
  color: #ffffff; /* text color */
  border-radius: 13px;
  padding: 20px 35px; /* neat padding */
  width: 100%;
  max-width: 750px;
  text-align: left; /* keep form fields aligned left */
  
  /* golden border outline */
  border: 4px solid #FFD700;
  
  /* shadow for depth */
  box-shadow:
    0 8px 24px rgba(0, 0, 0, 0.5),
    0 12px 36px rgba(0, 0, 0, 0.3);
}


.signup-form h1 {
  text-align: center;
  color: #FFD700;
  margin-bottom: 20px;
  font-size: 2rem;
  font-weight: bold;
}

.form-grid {
  display: grid;
  grid-template-columns: 1.5fr 1fr;
  gap: 30px; /* wider gap between columns */
}

.form-left, .form-right {
  padding: 10px; /* inner padding for neatness */
}

.form-left label, .form-right label {
  display: block;
  margin-top: 5px;
  font-weight: bold;
  font-size: 0.95rem;
}

.form-left input, .form-right input {
  width: 100%;
  padding: 5px 10px;
  margin: 3px 0 3px; /* consistent spacing */
  border-radius: 3px;
  border: 1px solid #ccc;
  background: #fff;
  color: #000;
  font-size: 0.9rem;
  margin-left: 10px;
}

.upload-note {
  font-size: 0.5rem;
  margin-top: 3px;
  margin-bottom: 12px;
  color: #ffffff;
  line-height: 1.4;
  text-align: center;
}

.form-right1 {
  display: flex;
  flex-direction: column;
  align-items: flex-end; /* 👉 aligns content to the right */
}

.camera-btn {
  display: inline-block;
  padding: 10px 20px;
  background: transparent;       /* no background */
  color: #fff;                   /* white text */
  border: 2px solid #fff;        /* white outline */
  border-radius: 6px;
  font-weight: bold;
  margin-top: 10px;
  cursor: pointer;
  transition: all 0.3s ease;     /* smooth hover effect */
}

.camera-btn:hover {
  background: #fff;              /* fill white on hover */
  color: #000;                   /* text turns black */
}

.camera-btn1 {
  display: inline-block;
  padding: 10px 20px;
  background: transparent;       /* no background */
  color: #000000;                   /* white text */
  border: 2px solid #000000;        /* white outline */
  border-radius: 6px;
  font-weight: bold;
  margin-top: 10px;
  cursor: pointer;
  transition: all 0.3s ease;     /* smooth hover effect */
}

.camera-btn:hover {
  background: #fff;              /* fill white on hover */
  color: #000;                   /* text turns black */
}

.submit-btn {
  width: 40%;
  padding: 10px;
  background: linear-gradient(to left,#ffff00,#f5bc17);
  color: #120c4f;
  font-weight: bold;
  font-size: 1.1rem;
  border: none;
  border-radius:40px;
  cursor: pointer;
  margin-top: 20px;

  display: block;        /* make it block-level */
  margin-left: auto;     /* push from left */
  margin-right: auto;    /* push from right */
}


.login-link {
  text-align: center;
  margin-top: 10px;
  font-size: 1.3rem;
}
.login-link a { color: #FFD700; text-decoration: underline; }

/* Modal styles */
.modal {
  display: none;
  position: fixed;
  z-index: 999;
  left: 0; top: 0;
  width: 100%; height: 100%;
  background: rgba(0,0,0,0.7);
}
.modal-content {
  background: #fff;
  margin: 10% auto;
  padding: 20px;
  border-radius: 8px;
  width: 90%;
  max-width: 400px;
  text-align: center;
}
.close { float: right; font-size: 1.5rem; cursor: pointer; }
#cameraStream {
  width: 100%;
  
  border-radius: 8px;
  margin-bottom: 10px;
}

/* Preview image pad */
#previewImage {
  display: block;
  width: 100%;              /* fill the pad horizontally */
  max-height: 300px;        /* control vertical size */
  margin-top: 15px;
  background: #fff;
  border-radius: 8px;
  box-sizing: border-box;
  object-fit: contain;      /* keep aspect ratio, fit neatly */
  border: 2px solid #FFD700;/* optional golden border */
  padding: 0;               /* remove extra padding */
}

#approvalScreen .signup-container {
  min-height: auto;
  padding: 20px 20px;
}

#approvalScreen {
  position: absolute;
  top: 60%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
}


.login-btn {
  width: 60px;              /* fixed width */
  height: 60px;             /* fixed height */
  background-color: transparent;
  color: #ccc;
  font-weight: bold;
  font-size: 0.9rem;
  border: 2px solid #ccc;
  border-radius: 8px;       /* square corners with slight rounding */
  cursor: not-allowed;
  margin-top: 10px;
  transition: all 0.25s ease;
  display: flex;            /* center text inside */
  justify-content: center;
  align-items: center;
}

/* When approved */
.login-btn.approved {
  background-color: #0d6efd; /* clear blue */
  color: #fff;
  border-color: #0d6efd;
  cursor: pointer;
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

  <div class="signup-container">
    <form class="signup-form">
      <h1 style="margin-top: 0px; margin-bottom: 0px;">Sign up</h1>
      <div class="form-grid">
        <div class="form-left">
          <label>Full Name</label><input type="text" />
          <label>Username</label><input type="text" />
          <label>Email</label><input type="email" placeholder="" />
          <label>Password</label><input type="password" />
          <label>Confirm Password</label><input type="password" />
          <label>ID Number</label><input type="text" />
        </div>
        <div class="form-right">
            <!-- Image preview area -->
          <label>Upload ID Picture</label>
          <p class="upload-note"><span style="font-weight: bold;">Note:</span> Place your student ID flat, avoid reflections, include the full card, and keep the text readable. If you don’t have your student ID available, take a clear and formal selfie instead.</p>
          <img id="previewImage" alt="Captured photo" style="width:100%; margin-top:10px; border-radius:8px;" />
          
          <div class="form-right1">
            <button type="button" class="camera-btn" onclick="openCamera()">Use Camera</button>
          </div>
         
        </div>
        
      </div>
      <button type="submit" class="submit-btn">Sign Up</button>
      <div class="login-link">Already have an account? <a href="login.html">Login</a></div>
    </form>
  </div>

  <!-- Camera Modal -->
  <div id="cameraModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeCamera()">&times;</span>
      <video id="cameraStream" autoplay playsinline></video>
      <button type="button" class="camera-btn1" onclick="takePhoto()">Capture</button>
      <canvas id="snapshot" style="display:none;"></canvas>
    </div>
  </div>

  <!-- Approval Pending Screen -->
<div id="approvalScreen" style="display:none;">
  <div class="signup-container">
    <div class="signup-form">
      <h1 style="text-align:center; color:#FFD700; margin-bottom:10px;">Register Submitted</h1>
      <p style="text-align:center; color:#fff; font-size:1rem; margin:0 0 20px 0;">
        Your request to access this form is currently pending approval from the administrator.<br>
        Please wait until your request is approved before proceeding.
      </p>

      <!-- Pending with spinner -->
      <div class="pending-row">
  <h2 class="pending-text">Pending</h2>
  <i class="fas fa-spinner fa-spin" style="color:#FFD700;"></i>
</div>

      <!-- Login button (initially disabled and transparent) -->
      <button id="loginBtn" disabled class="login-btn">Login</button>
    </div>
  </div>

  <!-- Log out button outside -->
  <div style="text-align:right; padding:20px;">
    <a href="logout.html" class="logout-link">Log out</a>
  </div>
</div>




<script>
document.querySelector(".signup-form").addEventListener("submit", function(e) {
  e.preventDefault();
  this.style.display = "none";
  document.getElementById("approvalScreen").style.display = "block";

  // Simulate admin approval after 5 seconds
  setTimeout(() => {
    const loginBtn = document.getElementById("loginBtn");
    loginBtn.disabled = false;
    loginBtn.classList.add("approved");
  }, 5000); // replace with real approval logic later
});


</script>





  <script>
    function openCamera() {
      document.getElementById('cameraModal').style.display = 'block';
      navigator.mediaDevices.getUserMedia({ video: true })
        .then(stream => { document.getElementById('cameraStream').srcObject = stream; })
        .catch(err => alert("Camera access denied: " + err));
    }
    function closeCamera() {
      document.getElementById('cameraModal').style.display = 'none';
      let stream = document.getElementById('cameraStream').srcObject;
      if (stream) stream.getTracks().forEach(track => track.stop());
    }
    function takePhoto() {
  const video = document.getElementById('cameraStream');
  const canvas = document.getElementById('snapshot');
  const context = canvas.getContext('2d');

  canvas.width = video.videoWidth;
  canvas.height = video.videoHeight;
  context.drawImage(video, 0, 0, canvas.width, canvas.height);

  const photoData = canvas.toDataURL("image/png");

  // 👉 Display image preview
  document.getElementById('previewImage').src = photoData;

  // 👉 Send to backend
  fetch("upload-photo.php", {
    method: "POST",
    headers: { "Content-Type": "application/x-www-form-urlencoded" },
    body: "image=" + encodeURIComponent(photoData)
  })
  .then(res => res.text())
  .then(data => {
    alert("Server response: " + data);
  })
  .catch(err => console.error("Upload failed:", err));

  closeCamera();
}

  </script>
</body>
</html>
