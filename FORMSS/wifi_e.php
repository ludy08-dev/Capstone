<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>REQUEST FORM FOR WIFI EXTENSION</title>
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
    input[type="email"],
    select {
      width: 95%;
      margin-left: 5%;
      padding: 10px;
      margin-top: 5px;
      border: 1.8px solid #000000;
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
      width: 97.5%;
      margin-left: 2.5%;
      padding: 10px;
      margin-top: 5px;
      border: 1.8px solid #000000;
      border-radius: 4px;
      box-sizing: border-box;
    }
   

/*HEADER WITH LINE*/
    .section-header {
      margin-top: 20px;
      margin-bottom: 0px;
    }

    .section-header h3 {
      color: #000966;
      font-size: 18px;
      margin: 0;
      margin-bottom: 0px; /* This brings the line closer */
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
      height: 50px; /*Malaki pero fixed*/
      padding: 10px;
      margin-left: 2%;
      font-size: 14px;
      resize: none; /*Prevent manual resizing */
      box-sizing: border-box;
      border-radius: 4px;
      
      
    }

/*VIEW UPLOAD PHOTO*/ 
    .preview-box {
      margin-top: 0px;
      padding: 1px;
      margin-left: 2%;
      background-color: #ffffff;
      border-radius: 6px;
      display: flex;
      justify-content: center; /* 👈 centers image inside */
      align-items: center;
      text-align: center;
    }

/*TIME*/
    input[type="time"] {
      width: 95%;
      height: 40px;
      padding: 10px;
      font-size: 14px;
      box-sizing: border-box;
      border: 1px solid #000000;
      border-radius: 4px;
      margin-left: 5%;
      
    }

/*TEXT BELOW*/
    .below-text {
      display: block;
      margin-top: 4px;
      margin-left: 5%;
      font-size: 0.85em;
      color: #555;
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
        <h2>REQUEST FORM FOR WI-FI EXTENSION</h2>
        
<!-- Requester Information Header -->
    <div class="section-header">
      <h3>Requester Information</h3>
      <div class="header-line"></div>
      </div>
      <label>Full Name:</label>
      <input type="text1" name="fullName" placeholder="Last Name, First Name, Middle Name">

<!-- Position / Designation and Department / Office -->
    <div class="row">
      <div class="column">
    <label>Designation / Position: </label>
      <input type="text" name="gradeLevel" placeholder="e.g., Grade 11 - STEM / 2nd Year - BSIT">
      </div>
      <div class="column">
      <label>Department / Office:</label>
      <input type="text" name="department" placeholder="e.g., College of Education">
      </div>
      </div>

<!-- Mobile Number and Email -->
    <div class="row">
      <div class="column">
      <label>Mobile Number:</label>
      <input type="tel" name="idNumber" placeholder="09XXXXXXXXX">
      </div>
      <div class="column">
      <label>Email:</label>
      <input type="email" name="schoolEmail" placeholder="domain@smccnasipit.edu.ph">
      </div>
      </div>

<!-- Document Type -->
 <div class="section-header">
      <h3>Wi-fi Extension Details</h3>
      <div class="header-line"></div>
      </div>
    <div class="row">
      <div class="column">
      <label>Reason For Request:</label>
      <textarea name="requestPurpose" placeholder="State your purpose ( e.g., Examination, Event, Research Presentation)" class="textarea-field"></textarea>
      </div>
      </div>

    <div class="row" style="margin-top:0px;">
      <div class="column">
      <label>Start Date:</label>
      <input type="date" name="paymentDate" placeholder="mm / dd / yy">
      </div>
      <div class="column">
      <label>End Date:</label>
      <input type="date" name="paymentDate" placeholder="mm / dd / yy">
      </div>
      </div>

      <div class="row" style="margin-top:0px;">
      <div class="column">
      <label>Start Time:</label>
      <input type="time" name="paymentDate" placeholder="mm / dd / yy">
      </div>
      <div class="column">
      <label>End Time:</label>
      <input type="time" name="paymentDate" placeholder="mm / dd / yy">
      </div>
      </div>

    <div class="row">
      <div class="column">
      <label>Location / Room:</label>
      <input type="text" name="location/room" placeholder="AVR, Gymnasium, Room 203">
      </div>
      </div>

<!-- UPLOAD PHOTO FUNCTION -->
    <div class="column">
      <label>Upload Supporting Document (optional): </label>
      <input type="file" id="receiptFile" name="receiptFile" accept="image/jpeg,image/png">
      <small class="below-text">Optional: Attach approval memo, letter, or permit if available..</small>
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

    <div class="row">
      <div class="column">
      <label>Endorsed by:</label>
      <input type="text" name="fullName" placeholder="Department Head / Program Head">
      </div>
      <div class="column">
      <label>Date Endorsed:</label>
      <input type="date" name="paymentDate" placeholder="mm / dd / yy">
      </div>
      </div>


<!-- Reminder Box -->
    <div style="border-radius: 8px; margin-top: 3%; margin-bottom: 4px;">
      <div style="display: flex; align-items: center;">
      <img src="ICON.png" alt="Check Icon" style="width: 30px; height: 30px; margin-right: 8px;">
      <span style="color: black; font-size: 16px; line-height: 1.4;">
      <strong>Reminder:</strong> Please review all details before submitting. Incorrect or incomplete information may delay the processing of your Wifi Extension Request.
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
