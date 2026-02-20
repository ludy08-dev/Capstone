<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>REQUEST FORM FOR REFUND</title>
  <style> 
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(#0be9fd,#000435);
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
  gap: 15px; /* controls spacing between logos and text */
  position: relative;
}

.form-header img {
  height: 60px;
  flex-shrink: 0;
}

.school-name {
  text-align: center;
  max-width: 500px;
}
  .school-title {
  font-family: "Times New Roman", serif;
  font-size: 32px;         /* Bigger yellow title */
  font-weight: bold;
  color: #f5bc17;
  line-height: 1.1;
  margin-bottom: 0px;
}

.school-address,
.school-tel {
  font-family: "Times New Roman", serif;
  font-size: 21px;         /* Slightly larger white text */
  color: #ffffff;
  font-weight: normal;
  line-height: 1.2;
  margin-bottom: 0px;
}

.school-web a {
  font-family: "Times New Roman", serif;
  font-size: 21px;         /* Slightly larger light blue text */
  color: #15e3fb;
  text-decoration: underline;
  font-weight: normal;
  margin-bottom: 0px;
}

.form-header img {
  height: 100px;
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
      padding: 30px 40px;
      
    }

    h2 {
    text-align: center;
    margin-top: -10px;   /* pulls it closer to the yellow line */
    margin-bottom: 20px; /* slightly tighter bottom spacing */
    color: #000;
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
    select,
    textarea {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    textarea {
      resize: vertical;
      height: 80px;
    }

    .checkboxes {
      margin-top: 20px;
    }

    .checkboxes label {
      font-weight: normal;
      display: block;
      margin-top: 10px;
    }

    .buttons {
      display: flex;
      justify-content: flex-end;
      gap: 15px;
      margin-top: 30px;
    }

    .buttons button {
      padding: 10px 20px;
      font-weight: bold;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .submit-btn {
  background-color: #120c4f;
  color: white;
  padding: 12px 24px;
  font-size: 16px;
}

.reset-btn {
  background-color: #5dade2;
  color: white;
  padding: 12px 24px;
  font-size: 16px;
}


  </style>
</head>
<body>
  <div class="form-container">
    <form action="save_refund.php" method="POST" enctype="multipart/form-data">
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
    <h2 style="text-decoration: underline;">REQUEST FORM FOR REFUND</h2>
    <label>Full Name</label>
    <div class="row">
    <div class="column">
    <input type="text" name="fullName" placeholder="">
    </div>
    </div>

  <div class="row">
    <div class="column">
    <label for="gradeLevel">Grade Level / Year & Section</label>
    <input type="text" id="gradeLevel" name="gradeLevel" placeholder="e.g., Grade 11 - STEM A / 2nd Year - BSIT">
    </div>
    <div class="column">
    <label for="studentID">Student ID Number</label>
    <input type="text" id="studentID" name="studentID" placeholder="2025XXXXX">
  </div>
  </div>

<div class="row">
  <div class="column">
  <label for="contactNumber">Contact Number</label>
  <input type="tel" id="contactNumber" name="contactNumber" placeholder="09XXXXXXXXX">
  </div>
  <div class="column">
    <label for="refundType">Refund Type</label>
    <select id="refundType" name="refundType">
      <option value="">-- Select Refund Type --</option>
      <option value="tuition">Tuition Refund</option>
      <option value="miscellaneous">Miscellaneous Refund</option>
      <option value="others">Others</option>
    </select>

<!-- Hidden input for "Others" -->
  <div id="otherRefundContainer" style="display: none; margin-top: 8px;">
    <label for="otherRefund">Please specify:</label>
    <input type="text" id="otherRefund" name="otherRefund" placeholder="Enter specific refund type">
    </div>
    </div>
</div>

<script>
  const refundType = document.getElementById('refundType');
  const otherContainer = document.getElementById('otherRefundContainer');
  const otherInput = document.getElementById('otherRefund');

  refundType.addEventListener('change', function () {
    if (this.value === 'others') {
      otherContainer.style.display = 'block';
      otherInput.required = true; // make it required when visible
    } else {
      otherContainer.style.display = 'none';
      otherInput.required = false; // remove requirement when hidden
      otherInput.value = ''; // clear input if user switches back
    }
  });
</script>


  <div class="row">
  <div class="column">
    <label for="amount">Amount</label>
    <input type="text" id="amount" name="amount" value="0.00">
  </div>
  <div class="column">
    <label for="semester">Semester / School Year</label>
    <input type="text" id="semester" name="semester" placeholder="e.g., 1st Semester, S.Y. 2024 - 2025">
  </div>
  </div>


<label for="statementFile">Attach Statement of Account:</label>
<input type="file" id="statementFile" name="statementFile">

  <div class="row">
  <div class="column">
    <label for="signature">Student E-Signature</label>
    <div style="text-align: center;">
      <canvas id="signature-pad" width="450" height="180" style="border:1px solid #ccc; border-radius:4px;"></canvas>
      <br>
      <button type="button" onclick="clearSignature()" style="margin-top:10px; padding:10px 20px; font-size:16px; font-weight: bold; background-color:#d9d9d9; color:#000; border:none; border-radius:5px; cursor:pointer;">
        Clear Signature
      </button>
      </div>
    </div>
  <div class="column">
    <label for="date">Date</label>
    <input type="date" id="date" name="date">
    </div>
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
    onmouseover="this.style.backgroundColor='#1a252f'"
    onmouseout="this.style.backgroundColor='#2c3e50'"
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
    onmouseover="this.style.backgroundColor='#3498db'"
    onmouseout="this.style.backgroundColor='#5dade2'"
    onmousedown="this.style.transform='scale(0.98)'"
    onmouseup="this.style.transform='scale(1)'"
  >
    Reset
  </button>
</div>

  
  <script>
  const canvas = document.getElementById('signature-pad');
  const ctx = canvas.getContext('2d');
  let drawing = false;

  canvas.addEventListener('mousedown', () => { drawing = true; });
  canvas.addEventListener('mouseup', () => { drawing = false; ctx.beginPath(); });
  canvas.addEventListener('mousemove', draw);

  function draw(event) {
    if (!drawing) return;
    ctx.lineWidth = 2;
    ctx.lineCap = 'round';
    ctx.strokeStyle = '#000';
    ctx.lineTo(event.offsetX, event.offsetY);
    ctx.stroke();
    ctx.beginPath();
    ctx.moveTo(event.offsetX, event.offsetY);
  }

  function clearSignature() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
  }
</script>


</body>
</html>
