<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>REQUEST FORM FOR RESET PASSWORD</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(#0be9fd,#000435,#0be9fd);
      margin: 0;
      padding: 20px;
    }
    .form-container {
      max-width: 800px;
      margin: auto;
      background-color: #fff;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 0 12px rgba(0,0,0,0.15);
    }
    .form-header {
      background-color: #120c4f;
      color: white;
      padding: 15px 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 15px;
      position: relative;
    }
    .form-header img {
      height: 100px;
      flex-shrink: 0;
    }
    .school-name {
      text-align: center;
      max-width: 500px;
    }
    .school-title {
      font-family: "Times New Roman", serif;
      font-size: 32px;
      font-weight: bold;
      color: #f5bc17;
      line-height: 1.1;
      margin-bottom: 0px;
    }
    .school-address,
    .school-tel {
      font-family: "Times New Roman", serif;
      font-size: 21px;
      color: #ffffff;
      font-weight: normal;
      line-height: 1.2;
      margin-bottom: 0px;
    }
    .school-web a {
      font-family: "Times New Roman", serif;
      font-size: 21px;
      color: #15e3fb;
      text-decoration: underline;
      font-weight: normal;
      margin-bottom: 0px;
    }
    .yellow-line {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 5px;
      background-color: #f5bc17;
    }
    
    .form-body {
  max-width: 700px;
  margin: auto;
  padding: 30px 40px;
  background-color: #fff;
  border-radius: 12px;
  box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

h2 {
  text-align: center;
  margin-bottom: 10px;
  color: #000;
  text-decoration: underline;
}


.row {
  display: flex;
  gap: 6px;        /* was 10–15px, now tighter */
  margin-top: 6px; /* was 10px, reduced */
}

.column {
  flex: 1;
}

label {
  display: block;
  margin-top: 8px;   /* was 12–15px */
  margin-bottom: 2px; /* keeps label close to input */
  font-weight: bold;
  color: #000;
}

input[type="text"],
input[type="tel"],
input[type="email"],
textarea,
select {
  width: 96%;
  padding: 6px 8px;   /* was 8–10px, now more compact */
  margin-top: 0;      /* removes extra gap under label */
  border: 1px solid #000000;
  border-radius: 4px;
  font-size: 14px;
  box-sizing: border-box;
  margin-left: 10px;
}

input[type="text1"],
textarea,
select {
  width: 98%;
  padding: 6px 8px;   /* was 8–10px, now more compact */
  margin-top: 0;      /* removes extra gap under label */
  border: 1px solid #000000;
  border-radius: 4px;
  font-size: 14px;
  box-sizing: border-box;
  margin-left: 10px;
}


.checkbox-group label {
  font-weight: normal;
  margin-top: 6px;
}

.reason-options {
  display: flex;
  gap: 10px;
  flex-wrap: wrap;
  margin-top: 6px;
}

.reason-item {
  background-color: #f4f4f4;
  padding: 6px 10px;
  border-radius: 6px;
  display: flex;
  align-items: center;
  font-weight: normal;
  cursor: pointer;
  transition: background-color 0.3s ease;
  margin-left: 10px;
  margin-bottom: 10px;
}

.reason-item:hover {
  background-color: #fff;
}

.form-tip {
  font-size: 13px;
  color: #666;
  margin-top: 10px;
}

.privacy-box {
  margin: 0px 0;          /* spacing above and below the box */
  padding: 12px 15px;      /* internal spacing for text */
  background-color: #f9f9f9;
  border-radius: 6px;
  border: 1px solid #ddd;  /* subtle border for clarity */
  margin-left: 10px;
}

.buttons {
  display: flex;
  justify-content: center;
  gap: 20px;
  margin-top: 20px;
}

.buttons button {
  padding: 10px 40px;
  font-weight: bold;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 15px;
  background-color: #120c4f;
  color: #fff;
  transition: background-color 0.3s ease;
}

.buttons button:hover {
  background-color: #1a1570;
}

.account-row {
  display: flex;
  gap: 10px; /* spacing between the two boxes */
  margin-top: 6px;
  flex-wrap: wrap;
}

.account-box {
  flex: 1;
  min-width: 280px;
  border: 1px solid #696969;
  border-radius: 6px;
  padding: 10px;
  background-color: #F4F4F4;
  margin-left: 10px;
}

.account-option {
  display: flex;
  align-items: center;
  gap: 8px; /* spacing between checkbox, label, and input */
}

.account-option input[type="email"],
.account-option input[type="text"] {
  flex: 1; /* makes the input stretch to fill space */
  padding: 6px 8px;
  font-size: 14px;
  border: 1px solid #696969;
  border-radius: 4px;
  box-sizing: border-box;
}

.back-container {
  margin-bottom: 20px;
}

.back-btn {
  font-size: 16px;
  font-family: inherit;
  font-weight: bold;       /* arrow + text bold */
  color: #000;
  text-decoration: none;
  position: relative;
  transition: color 0.3s ease, transform 0.3s ease;
}

.back-btn::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: -2px;
  width: 0%;
  height: 2px;
  background: #000;
  transition: width 0.3s ease;
}

.back-btn:hover {
  color: #444;             /* slight color shift */
  transform: translateX(-6px); /* smooth slide left */
}

.back-btn:hover::after {
  width: 100%;             /* underline grows in */
}



  </style>
</head>
<body>

  <div class="back-container">
  <a href="service_sel_per.html" class="back-btn">
    ← Back
  </a>
</div>
  <div class="form-container">
    <form>
      <div class="form-header">
        <img src="LOGO.png" alt="SMCC Logo Left">
        <div class="school-name">
          <div class="school-title">Saint Michael College of Caraga</div>
          <div class="school-address">Barangay. 4, Nasipit, Agusan del Norte, Philippines</div>
          <div class="school-tel">Tel. (085) - 225 - 02088</div>
          <div class="school-web"><a href="http://www.smccnasipit.edu.ph" target="_blank">www.smccnasipit.edu.ph</a></div>
        </div>
        <img src="EDP.png" alt="SMCC Logo Right">
        <div class="yellow-line"></div>
      </div>

<div class="form-body">
  <h2>REQUEST FORM FOR RESETTING PASSWORD IN GSUITE OR LMS ACCOUNT</h2>

  <label>Full Name:</label>
  <input type="text1" placeholder="Last Name, First Name, Middle Name">

  <div class="row">
    <div class="column">
      <label>Grade Level / Year & Section: <span style="font-weight: normal;">(Student)</span></label>
      <input type="text" placeholder="e.g. Grade 11 - STEM / 2nd Year - BSIT">
    </div>
    <div class="column">
      <label>Department:</label>
      <input type="text" placeholder="e.g. College of Computing Studies">
    </div>
  </div>

  <div class="row">
    <div class="column">
      <label>Position / Designation: <span style="font-weight: normal;">(Personnel)</span></label>
      <input type="text" placeholder="e.g. Instructor / Admin Assistant">
    </div>
    <div class="column">
      <label>Contact Number:</label>
      <input type="tel" placeholder="e.g. 09XXXXXXXXX">
    </div>
  </div>

  <div class="row">
    <div class="column">
      <label>ID Number:</label>
      <input type="text" placeholder="e.g. 2025XXXXX">
    </div>
    <div class="column">
      <label>Email:</label>
      <input type="email" placeholder="e.g. name@smccnasipit.edu.ph">
    </div>
  </div>

 <label>Account(s) to Reset:</label>
<div class="account-row">
  <div class="account-box">
    <div class="account-option">
      <input type="checkbox" name="resetGSuite">
      <span style="text-align: center;">GSuite <br>(School Email)</span>
      <input type="email" placeholder="name@smccnasipit.edu.ph">
    </div>
  </div>

  <div class="account-box">
    <div class="account-option">
      <input type="checkbox" name="resetLMS">
      <span style="text-align: center;">LMS <br>(ID Number)</span>
      <input type="text" placeholder="Enter Your ID Number">
    </div>
  </div>
</div>

<p class="form-tip" style="margin-left: 10px;">
  Tip: Check the account(s) you want reset and fill the corresponding email/ID number. At least one account must be selected.
</p>



  <label>Reason for Reset:</label>
  <div class="reason-options">
    <label class="reason-item"><input type="radio" name="reason"> <span>Forgot Password</span></label>
    <label class="reason-item"><input type="radio" name="reason"> <span>Account Locked</span></label>
    <label class="reason-item"><input type="radio" name="reason"> <span>Suspected Compromise</span></label>
    <label class="reason-item"><input type="radio" name="reason"> <span>Other</span></label>
  </div>

  <input type="text1" placeholder="If other specify,(optional)">

  <label>Additional Information (optional):</label>
  <textarea rows="3" placeholder="Provide any extra details that will help the IT staff..."></textarea>

  <div class="privacy-box">
    <p class="form-tip">
      <h3 style="margin-bottom: 0;">Privacy / Processing</h3>
      By submitting, you confirm you are the owner of the account(s). The IT/EDP Office will verify your identity before applying changes. Temporary passwords will be communicated via the contact you provide.
    </p>
  </div>
      
  



        

     

       <!-- Reminder Box -->
<div style="border-radius: 8px; margin-top: 30px; margin-bottom: 4px;">
  <div style="display: flex; align-items: center;">
    <img src="ICON.png" alt="Check Icon" style="width: 30px; height: 30px; margin-right: 8px;">
    <span style="color: black; font-size: 16px; line-height: 1.4;">
      <strong>Reminder:</strong> Please review all details before submitting. Incorrect or incomplete information may delay the processing of your Refund Request.
      </span>
      </div>
      </div>

<!-- Confirmation Checkbox -->
<div style="margin-top: 0; margin-bottom: 20px;">
  <label style="font-size: 16px; display: flex; align-items: center;">
    <input type="checkbox" name="confirmInfo" required style="margin-right: 8px; width: 20px; height: 20px;">
    <span style="line-height: 1.4;">I confirm that all information provided is true, accurate, and complete.</span>
    </label>
    </div>

        <!-- Button Section -->
<div style="width: 100%; display: flex; justify-content: center; gap: 10px; margin-top: 8px;">
  <button type="submit" style="
    background-color: #120c4f;
    color: white;
    padding: 10px 160px;
    font-size: 16px;
    font-weight: bold;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  "
    onmouseover="this.style.backgroundColor='#120c4f'"
    onmouseout="this.style.backgroundColor='#120c4f'"
    onmousedown="this.style.transform='scale(0.98)'"
    onmouseup="this.style.transform='scale(1)'"
  >
    Submit Request
  </button>

  <button type="reset" style="
    background-color: #99fbff;
    color:#120c4f;
    padding: 10px 100px;
    font-size: 16px;
    font-weight: bold;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  "
    onmouseover="this.style.backgroundColor='#99fbff'"
    onmouseout="this.style.backgroundColor='#99fbff'"
    onmousedown="this.style.transform='scale(0.98)'"
    onmouseup="this.style.transform='scale(1)'"
  >
    Reset
  </button>
</div>
      </div>
    </form>
  </div>



</script>
</body>
</html>
