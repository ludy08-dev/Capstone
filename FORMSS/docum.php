<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>REQUEST FORM FOR DOCUMENT</title>
  <style>
  /*HEADER*/
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

/*FORM*/
    .form-body {
      padding: 40px 50px;
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
      margin-top: 0px;
    }

    .column {
      flex: 1;
    }

/*TEXTBOX*/
    label {
      display: block;
      margin-top: 10px;
      font-weight: bold;
      color: #000;
    }
    input[type="text"],
    input[type="tel"],
    input[type="date"],
    input[type="file"],
    select {
      width: 98%;
      margin-left: 2%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #000000;
      border-radius: 4px;
      box-sizing: border-box;
    }
   
/*TEXTBOX*/
    label {
      display: block;
      margin-top: 10px;
      font-weight: bold;
      color: #000;
    }
    input[type="text1"],
    select {
      width: 99%;
      margin-left: 1%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #000000;
      border-radius: 4px;
      box-sizing: border-box;
    }

/*HEADER WITH LINE*/
    .section-header {
      margin-top: 20px;
      margin-bottom: 10px;
    }

    .section-header h3 {
      color: #000966;
      font-size: 18px;
      margin: 0;
      margin-bottom: 4px; /* This brings the line closer */
    }

    .header-line {
      height: 3px;
      background-color: #00BCD4;
      width: 100%;
      border-radius: 2px;
    }

/*PURPOSE OF REQUEST PAD*/  
    .textarea-field {
      width: 98%;
      height: 100px; /*Malaki pero fixed*/
      padding: 10px;
      margin-left: 2%;
      font-size: 14px;
      resize: none; /*Prevent manual resizing */
      box-sizing: border-box;
      border-radius: 4px
      
    }

/*VIEW UPLOAD PHOTO*/ 
    .preview-box {
      margin-top: 10px;
      padding: 5px;
      margin-left: 2%;
      background-color: #ffffff;
      border-radius: 6px;
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


/*Header*/
  </style>
  </head>
  <body>
<div class="back-container">
  <a href="service_sel_per.php" class="back-btn">
    ← Back
  </a>
</div>

    <div class="form-container">
    <form action="save_request.php" method="POST" enctype="multipart/form-data">

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
        <h2>REQUEST FORM FOR DOCUMENT</h2>
        
<!-- Requester Information Header -->
    <div class="section-header">
      <h3>Requester Information</h3>
      <div class="header-line"></div>
      </div>
      <label>Full Name:</label>
      <input type="text1" name="fullName" placeholder="">

    <div class="row">
      <div class="column">
      <label>Grade Level / Year & Section: <span style="font-weight: lighter;">( Student )</span></label>
      <input type="text" name="gradeLevel" placeholder="e.g., Grade 11 - STEM / 2nd Year - BSIT">
      </div>
      <div class="column">
      <label>Department:</label>
      <input type="text" name="department">
      </div>
      </div>

<!-- Position / Designation (same size as Grade Level) -->
    <div class="row">
      <div class="column">
      <label>Position / Designation: <span style="font-weight: lighter;">( Personnel )</span></label>
      <input type="text" name="designation">
      </div>
      <div class="column">
      <label>Contact Number:</label>
      <input type="text" name="contactNumber" placeholder="09XXXXXXXXX">
      </div>
      </div>

<!-- ID Number + Date of Birth -->
    <div class="row">
      <div class="column">
      <label>ID Number:</label>
      <input type="text" name="schoolId">
      </div>
      <div class="column">
      <label>Email:</label>
      <input type="text" name="schoolEmail" placeholder="domain@smccnasipit.edu.ph">
      </div>
      </div>

    <div class="section-header">
      <h3>Document Request Details</h3>
      <div class="header-line"></div>
      </div>

<!-- Document Type -->
    <div class="row">
      <div class="column">
      <label style="margin-top: 0px;">Document Type:</label>
      <input type="text" name="documentType" placeholder="e.g. Transcript of Records" class="input-field">
      </div>
      </div>

<!-- Purpose of Request -->
    <div class="row">
      <div class="column">
      <label>Purpose of Request:</label>
      <textarea name="requestPurpose" placeholder="State the purpose..." class="textarea-field"></textarea>
      </div>
      </div>

<!-- Number of Copies + Preffered Released Date -->
    <div class="row" style="margin-top:0px;">
      <div class="column">
      <label>Number of Copies:</label>
      <input type="text" name="copies" placeholder="e.g., 2">
      </div>
      <div class="column">
      <label>Preferred Released Date:</label>
      <input type="date" name="paymentDate" placeholder="mm / dd / yy">
      </div>
      </div>

<!-- UPLOAD RECEIPT -->
    <div class="column">
      <label>Upload Supporting Document (optional): </label>
      <input type="file" id="receiptFile" name="receiptFile" accept="image/jpeg,image/png">
      <div id="previewReceipt" class="preview-box"></div>
      </div>

    <script>
      document.getElementById("receiptFile").addEventListener("change", function () {
      const file = this.files[0];
      const preview = document.getElementById("previewReceipt");
      preview.innerHTML = ""; // Clear previous preview

      if (file && file.type.startsWith("image/")) {
      const reader = new FileReader();
      reader.onload = function (e) {
      const img = document.createElement("img");
      img.src = e.target.result;
      img.style.maxWidth = "100%";
      img.style.maxHeight = "200px";
      img.style.border = "1px solid #ccc";
      img.style.borderRadius = "6px";
      preview.appendChild(img);
       };
        reader.readAsDataURL(file);
      } else {
      preview.textContent = "Selected file is not an image.";
      }
      });
    </script>

<!-- Reminder Box -->
    <div style="border-radius: 8px; margin-top: 0px; margin-bottom: 4px;">
      <div style="display: flex; align-items: center;">
      <img src="ICON.png" alt="Check Icon" style="width: 30px; height: 30px; margin-right: 8px;">
      <span style="color: black; font-size: 16px; line-height: 1.4;">
      <strong>Reminder:</strong> Please review all details before submitting. Incorrect or incomplete information may delay the processing of your Document Request.
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

<!-- SUBMIT REQUEST AND RESET BUTTON -->
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

 
</body>
</html>
