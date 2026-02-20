<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "document_request_db";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 2. Collect form data
$fullName      = $_POST['fullName'] ?? '';
$gradeLevel    = $_POST['gradeLevel'] ?? '';
$department    = $_POST['department'] ?? '';
$designation   = $_POST['designation'] ?? '';
$idNumber      = $_POST['idNumber'] ?? '';
$dob           = $_POST['dob'] ?? '';
$reason        = $_POST['reason'] ?? '';
$infoToChange  = $_POST['infoToChange'] ?? '';
$newInfoInput  = $_POST['newInfoInput'] ?? '';
$otherReason   = $_POST['otherReason'] ?? '';
$mobileNumber  = $_POST['mobileNumber'] ?? '';
$schoolEmail   = $_POST['schoolEmail'] ?? '';
$paymentDate   = $_POST['paymentDate'] ?? '';

// 3. Handle file uploads (if any)
$affidavitPath = null;
$damagePath    = null;
$receiptPath   = null;

// Make sure uploads folder exists
if (!is_dir("uploads")) {
    mkdir("uploads", 0777, true);
}

if (!empty($_FILES['affidavitLost']['name'])) {
    $affidavitName = time() . "lost" . basename($_FILES['affidavitLost']['name']);
    $affidavitPath = "uploads/" . $affidavitName;
    move_uploaded_file($_FILES['affidavitLost']['tmp_name'], $affidavitPath);
}

if (!empty($_FILES['proofDamage']['name'])) {
    $damageName = time() . "damaged" . basename($_FILES['proofDamage']['name']);
    $damagePath = "uploads/" . $damageName;
    move_uploaded_file($_FILES['proofDamage']['tmp_name'], $damagePath);
}

if (!empty($_FILES['receiptFile']['name'])) {
    $receiptName = time() . "receipt" . basename($_FILES['receiptFile']['name']);
    $receiptPath = "uploads/" . $receiptName;
    move_uploaded_file($_FILES['receiptFile']['tmp_name'], $receiptPath);
}

// 4. Insert into database (you can name the table as you want)
// Example table: id_replacement_requests

$sql = "INSERT INTO id_replacement_requests 
    (full_name, grade_level, department, designation, id_number, dob, reason, info_to_change, new_info_value, other_reason,
     mobile_number, school_email, payment_date, affidavit_file, damage_file, receipt_file)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param(
    "ssssssssssssssss",
    $fullName,
    $gradeLevel,
    $department,
    $designation,
    $idNumber,
    $dob,
    $reason,
    $infoToChange,
    $newInfoInput,
    $otherReason,
    $mobileNumber,
    $schoolEmail,
    $paymentDate,
    $affidavitPath,
    $damagePath,
    $receiptPath
);

if ($stmt->execute()) {
    echo "<h2 style='color:green; text-align:center'>ID Replacement Request Submitted Successfully!</h2>";
    echo "<p style='text-align:center'>Thank you, $fullName. Your request has been recorded.</p>";
} else {
    echo "<h2 style='color:red; text-align:center'>Error saving request</h2>";
    echo "<p style='text-align:center'>" . $stmt->error . "</p>";
}

$stmt->close();
$conn->close();
?>