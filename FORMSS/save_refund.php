<?php
// 1. Connect to DB
require_once __DIR__ . "/db_connect.php";

// 2. Collect form data safely
$fullName      = $_POST['fullName']      ?? '';
$gradeLevel    = $_POST['gradeLevel']    ?? '';
$studentID     = $_POST['studentID']     ?? '';
$contactNumber = $_POST['contactNumber'] ?? '';
$refundType    = $_POST['refundType']    ?? '';
$otherRefund   = $_POST['otherRefund']   ?? '';
$amount        = $_POST['amount']        ?? '0.00';
$semester      = $_POST['semester']      ?? '';
$requestDate   = $_POST['date']          ?? '';

// If "Others" refund type is selected, replace main type text
if ($refundType === 'others' && !empty($otherRefund)) {
    $refundType = $otherRefund;
}

// 3. Handle file upload (Statement of Account)
$statementPath = null;

if (!empty($_FILES['statementFile']['name'])) {
    if (!is_dir("uploads")) {
        mkdir("uploads", 0777, true);
    }

    $fileName = time() . "soa" . basename($_FILES['statementFile']['name']);
    $targetPath = "uploads/" . $fileName;

    if (move_uploaded_file($_FILES['statementFile']['tmp_name'], $targetPath)) {
        $statementPath = $targetPath;
    }
}

// 4. Insert into database
$sql = "INSERT INTO refund_requests 
        (full_name, grade_level, student_id, contact_number, refund_type,
         amount, semester, request_date, statement_file)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param(
    "sssssssss",
    $fullName,
    $gradeLevel,
    $studentID,
    $contactNumber,
    $refundType,
    $amount,
    $semester,
    $requestDate,
    $statementPath
);

if ($stmt->execute()) {
    echo "<h2 style='color:green; text-align:center;'>Refund Request Submitted Successfully!</h2>";
    echo "<p style='text-align:center;'>Thank you, <strong>" . htmlspecialchars($fullName) . "</strong>. Your refund request has been recorded.</p>";
} else {
    echo "<h2 style='color:red; text-align:center;'>Error submitting refund request.</h2>";
    echo "<p style='text-align:center;'>" . htmlspecialchars($stmt->error) . "</p>";
}

$stmt->close();
$conn->close();
?>