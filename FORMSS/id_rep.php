<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>REQUEST FORM FOR ID REPLACEMENT</title>
  <style>
    /*form*/
   body {
  min-height: 100vh;          /* full viewport height */
  background: linear-gradient(#0be9fd, #000435);
  background-attachment: fixed; /* stays fixed when scrolling */
  background-size: cover;       /* ensures full coverage */
  background-repeat: no-repeat;
  font-family: Arial, sans-serif;
}

    .form-container {
      width: 100%; /* fills screen width */
      max-width: 800px; /* cap size on desktop */
      margin: 20px auto; /* centered */
      background-color: #fff;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 0 12px rgba(0,0,0,0.15);
    }

/* Responsive arrangement */
@media (max-width: 768px) {
  .row {
    flex-direction: column;   /* stack columns vertically */
    gap: 0;
  }
  .row .column {
    width: 100%;              /* full width per field */
  }
  input, select {
    width: 100%;              /* inputs always fit */
    margin: 5px 0;            /* clean margins */
  }
}

/* Buttons stack neatly on mobile */
@media (max-width: 600px) {
  .buttons {
    flex-direction: column;
    gap: 12px;
  }
  .buttons button {
    width: 100%;
    padding: 12px;
  }
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
    
    /*inside the form*/
    .form-body {
      padding: 30px 40px;
    }
    h2 {
      text-align: center;
      margin-top: -10px;
      margin-bottom: 20px;
      color: #000;
      text-decoration: underline;
    }
    .row {
      display: flex;
      gap: 15px;
    }
    .row .column {
      flex: 1;
    }
    label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
      color: #000;
    }
    input[type="text"],
    input[type="tel"],
    input[type="date"],
    input[type="file"],
    select {
      width: calc(100% - 15px);
      padding: 10px;
      margin: 5px 50px 0 10px; /* top right bottom left */
      border: 1px solid #000000;
      border-radius: 7px;
      box-sizing: border-box;
    }
    
    .buttons {
      display: flex;
      justify-content: center;
      gap: 10px;
      margin-top: 8px;
    }

    .buttons button {
      padding: 10px 160px;
      font-weight: bold;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s ease;
    }
    .reason-options {
      display: flex;
      gap: 10px;
      margin-top: 0px;
      margin-left: 15px;
      flex-wrap: wrap;
    }

    .reason-item {
      background-color: #f4f4f4;
      padding: 6px 6px ;
      border-radius: 6px;
      display: inline-flex;
      align-items: center;
      gap: 2px;
      font-weight: bold;
      cursor: pointer;
      margin-top: 5px;
      transition: background-color 0.3s ease;
      white-space: nowrap; /* prevents wrapping inside pad */
    }
    .reason-item input[type="radio"] {
      margin: 0;
    }

    .reason-item span {
      margin-left: 6px;
    }
    .reason-item:hover {
      background-color: #ffffff;
    }

    #changeInfoContainer {
      border: 1px solid transparent; /* isolates space */
      padding: 5px 0;
    }

    #newInfoWrapper {
      display: block; /* ensures it doesn't interfere with flex rows */
    }

    #newInfoField {
      transition: opacity 0.3s ease;
    }

    #newInfoField[style*="display: block"] {
      opacity: 1;
    }

    .preview-box {
      margin-top: 10px;
      border: 1px solid #00000000;
      padding: 8px;
      border-radius: 6px;
      background-color: #00000000;
    }

    .preview-box img {
      max-width: 250px;
      border-radius: 4px;
      margin-top: 5px;
      display: block;
    }

    .preview-box p {
      font-size: 20px;
      color: #000000;
    }

    .column {
      flex: 1;
    }
    .normal-text {
      font-weight: normal; /* removes bold only for (Student) */
    }

    .back-container {
      margin-bottom: 20px;
    }

    /*back button*/
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
/* Pag maliit ang screen, gawing sunod-sunod ang lahat ng fields */
@media (max-width: 768px) {
  .row {
    flex-direction: column;   /* mula 2 columns → 1 column */
    gap: 0;
  }
  .row .column {
    width: 100%;              /* bawat field full width */
  }

  /* Inputs at selects mas maluwag at madaling i-tap */
  input[type="text"],
  input[type="tel"],
  input[type="date"],
  input[type="file"],
  select {
    width: 100%;
    margin: 8px 0;            /* simpleng margin para hindi dikit-dikit */
    padding: 14px;            /* mas malaking tap area */
    font-size: 16px;          /* readable sa phone */
  }

  /* Buttons stacked para madaling pindutin */
  .buttons {
    flex-direction: column;
    gap: 12px;
  }
  .buttons button {
    width: 100%;
    padding: 14px;
    font-size: 18px;
  }
}


</style>
</head>
<body>
  <!---Back Button-->
  <div class="back-container">
  <a href="service_sel_per.html" class="back-btn">
    ← Back
  </a>
  </div>
 
  <div class="form-container">
  <form action="save_id_rep.php" method="POST" enctype="multipart/form-data"> 
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
  <h2>REQUEST FORM FOR ID REPLACEMENT</h2>
  <label>Full Name:</label>
  <input type="text" name="fullName" placeholder="Last Name, First Name, Middle Name">
  <div class="row">
  <div class="column">
  <label>Grade Level / Year & Section: <span class="normal-text">(Student)</span></label>
  <input type="text" name="gradeLevel" placeholder="e.g., Grade 11 - STEM / 2nd Year - BSIT">
  </div>
  <!-- Select departments -->
  <div class="column">
  <label>Department:</label>
  <select name="department">
    <option value="" disabled selected>Select Department</option>
    <option value="es">Elementary Department</option>
    <option value="jhs">Junior High School Department</option>
    <option value="shs">Senior High School Department</option>
    <option value="cas">College of Arts and Sciences</option>
    <option value="ccis">College of Computing and Information Sciences</option>
    <option value="cbm">College of Business and Management</option>
    <option value="ccje">College of Criminal Justice Education</option>
    <option value="cte">College of Teacher Education</option>
    <option value="cthm">College of Tourism and Hospitality Management</option>
    </select>
    </div>
    </div>

<!-- Position / Designation (same size as Grade Level) -->
  <div class="row">
  <div class="column">
  <label>Position / Designation: <span class="normal-text">(Personnel)</span></label>
  <input type="text" name="designation">
  </div>
  <div class="column">
  </div>
  </div>

<!-- ID Number + Date of Birth -->
  <div class="row">
  <div class="column">
  <label>ID Number:</label>
  <input type="text" name="idNumber" placeholder="e.g., 2025XXXXX">
  </div>
  <div class="column">
  <label>Date of Birth:</label>
  <input type="date" name="dob" placeholder="mm / dd / yy">
  </div>
  </div>

  <label>Reason for Replacement</label>
  <div class="reason-options">
  <label class="reason-item">
  <input type="radio" name="reason" value="Lost"> <span>Lost</span>
  </label>
  <label class="reason-item">
  <input type="radio" name="reason" value="Damaged"> <span>Damaged</span>
  </label>
  <label class="reason-item">
  <input type="radio" name="reason" value="Change of Info"> <span>Change of Info</span>
  </label>
  <label class="reason-item">
  <input type="radio" name="reason" value="Other"> <span>Other</span>
  </label>
  </div>

<!-- Change of Info Section -->
  <div id="changeInfoContainer" style="display:none; margin-top:0px;">
  <label for="infoToChange">Select the information you want to change:</label>
  <select id="infoToChange" name="infoToChange">
    <option value="">-- Select Info --</option>
    <option value="Name">Name</option>
    <option value="ID Number">ID Number</option>
    <option value="Department">Department</option>
    <option value="Position">Position / Designation (Personnel)</option>
    <option value="Birthdate">Birthdate</option>
    <option value="Address">Address</option>
    <option value="Guardian">Guardian</option>
    <option value="Contact Number">Contact Number</option>
  </select>

<!-- Dynamic input field -->
  <div id="newInfoField" style="display:none; margin-top:12px;">
  <label id="newInfoLabel" for="newInfoInput">New Value</label>
  <input type="text" id="newInfoInput" name="newInfoInput">
  </div>
  </div>

  <div id="otherReasonContainer" style="display:none; margin-top:15px;">
  <label for="otherReason">Please specify reason:</label>
  <input type="text" id="otherReason" name="otherReason" placeholder="Enter reason">
  </div>

<!-- Others Section -->
  <div id="otherReasonContainer" style="display:none; margin-top:15px;">
  <label for="otherReason">If Others Please Specify:</label>
  <input type="text" id="otherReason" name="otherReason" placeholder="Enter reason">
  </div>

<!-- Lost -->
  <div id="uploadLost" style="display:none; margin-top:15px;">
  <label>Upload Affidavit of Lost (JPG, PNG)</label>
  <input type="file" id="affidavitLost" name="affidavitLost" accept="image/*,.pdf">
  <small style="color:#666; font-size: 0.85em;margin-left: 10px;">Photo should JPG and PNG file.</small>
  <div id="previewLost" class="preview-box"></div>
  </div>

<!-- Damaged -->
  <div id="uploadDamaged" style="display:none; margin-top:15px;">
  <label>Upload Proof of Damage (JPG, PNG)</label>
  <input type="file" id="proofDamage" name="proofDamage" accept="image/*,.pdf">
  <div id="previewDamaged" class="preview-box"></div>
  </div>

<!-- Mobile Number + School Email -->
  <div class="row">
  <div class="column">
  <label>Mobile Number</label>
  <input type="text" name="mobileNumber" placeholder="09XXXXXXXXX">
  <small style="color:#666; font-size: 0.85em; margin-left:10px;">Input the old number in your ID</small>
  </div>
  <div class="column">
  <label>School Email:</label>
  <input type="text" name="schoolEmail" placeholder="domain@smccnasipit.edu.ph">
  </div>
  </div>

<!-- Upload Receipt + Date of Payment -->
  <div class="row" style="margin-top:0px;">
  <div class="column">
  <label>Upload Receipt <span style="font-size: 0.8em;">(Supported files types: JPG, PNG)</span></label>
  <input type="file" id="receiptFile" name="receiptFile" accept="image/jpeg,image/png">
  <div id="previewReceipt" class="preview-box"></div>
  </div>
  <div class="column">
  <label>Date of Payment</label>
  <input type="date" name="paymentDate" placeholder="mm / dd / yy">
  </div>
  </div>

  <!-- Reminder Box -->
  <div style="border-radius: 8px; margin-top: 5px; margin-bottom: 4px;">
  <div style="display: flex; align-items: center;">
  <img src="ICON.png" alt="Check Icon" style="width: 30px; height: 30px; margin-right: 8px;">
  <span style="color: black; font-size: 16px; line-height: 1.4;">
  <strong>Reminder:</strong> Please review all details before submitting. Incorrect or incomplete information may delay the processing of your ID Replacement Request.
  </span>
  </div>
  </div>

<!-- Confirmation Checkbox -->
  <div style="margin-top: 0px; margin-bottom: 20px;">
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

<!---conditions for reason of replacement--->
<script>
  const reasonRadios = document.querySelectorAll('input[name="reason"]');
  const uploadLost = document.getElementById('uploadLost');
  const uploadDamaged = document.getElementById('uploadDamaged');
  const changeInfoContainer = document.getElementById('changeInfoContainer');
  const otherReasonContainer = document.getElementById('otherReasonContainer');
  const infoToChange = document.getElementById('infoToChange');
  const newInfoField = document.getElementById('newInfoField');
  const newInfoLabel = document.getElementById('newInfoLabel');
  const newInfoInput = document.getElementById('newInfoInput');

  // Toggle sections based on reason
  reasonRadios.forEach(radio => {
  radio.addEventListener('change', () => {
  const value = radio.value;
  uploadLost.style.display = value === 'Lost' ? 'block' : 'none';
  uploadDamaged.style.display = value === 'Damaged' ? 'block' : 'none';
  changeInfoContainer.style.display = value === 'Change of Info' ? 'block' : 'none';
  otherReasonContainer.style.display = value === 'Other' ? 'block' : 'none';

  // reset dynamic input
  newInfoField.style.display = 'none';
  newInfoInput.value = '';
  });
  });

  // Show input field when selecting Change of Info option
  infoToChange.addEventListener('change', () => {
  const selected = infoToChange.value;
    if (selected) {
      newInfoLabel.textContent = `Enter new ${selected}`;
      newInfoInput.type = selected === 'Birthdate' ? 'date' : 'text';
      newInfoInput.placeholder = `New ${selected}`;
      newInfoField.style.display = 'block';
    } else {
      newInfoField.style.display = 'none';
      newInfoInput.value = '';
    }
  });

  // Preview function (for all uploads)
  function previewFile(input, previewId) {
    const previewBox = document.getElementById(previewId);
    previewBox.innerHTML = "";
    const file = input.files[0];
    if (file) {
      if (file.type.startsWith("image/")) {
        const img = document.createElement("img");
        img.src = URL.createObjectURL(file);
        previewBox.appendChild(img);
      } else {
        const p = document.createElement("p");
        p.textContent = `Uploaded file: ${file.name}`;
        previewBox.appendChild(p);
      }
      }
      }

  // Attach listeners for previews
  document.getElementById("affidavitLost").addEventListener("change", function() {
    previewFile(this, "previewLost");
  });
  document.getElementById("proofDamage").addEventListener("change", function() {
    previewFile(this, "previewDamaged");
  });
  
</script>

<script>
  function previewFile(input, previewId) {
    const previewBox = document.getElementById(previewId);
    previewBox.innerHTML = "";
    const file = input.files[0];
    if (file) {
      if (file.type.startsWith("image/")) {
        const img = document.createElement("img");
        img.src = URL.createObjectURL(file);
        img.style.maxWidth = "250px";
        img.style.marginTop = "10px";
        img.style.borderRadius = "6px";
        previewBox.appendChild(img);
      } else {
        const p = document.createElement("p");
        p.textContent = `Uploaded file: ${file.name}`;
        previewBox.appendChild(p);
      }
    }
  }

  // Always active preview for recent picture
  document.getElementById("recentPicture").addEventListener("change", function() {
    previewFile(this, "previewPicture");
  });
</script>

</script>
</body>
</html>
