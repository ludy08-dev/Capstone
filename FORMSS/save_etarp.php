<?php
require_once "db_connect.php";

// Get form data
$fullName      = $_POST['fullName'];
$idNumber      = $_POST['idNumber'];
$designation   = $_POST['gradeLevel'];
$department    = $_POST['department'];
$mobileNumber  = $_POST['mobileNumber'];
$email         = $_POST['schoolEmail'];

$event         = $_POST['event'];
$dimension     = $_POST['dimension'];
$startDate     = $_POST['startDate'];
$endDate       = $_POST['endDate'];
$layout        = $_POST['layout'];
$designPref    = $_POST['designPreference'];
$slogan        = $_POST['slogan'];

// File uploads
$supporting = "";
$reference  = "";

if (!empty($_FILES['supportingDoc']['name'])) {
    $supporting = "uploads/" . basename($_FILES['supportingDoc']['name']);
    move_uploaded_file($_FILES['supportingDoc']['tmp_name'], $supporting);
}

if (!empty($_FILES['referenceDesign']['name'])) {
    $reference = "uploads/" . basename($_FILES['referenceDesign']['name']);
    move_uploaded_file($_FILES['referenceDesign']['tmp_name'], $reference);
}

// Insert to database
$sql = "INSERT INTO etarp_requests 
(full_name, id_number, designation, department, mobile, email,
 event_name, dimension, start_date, end_date, layout, design_pref, slogan,
 supporting_doc, reference_doc)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssssssssss", 
    $fullName, $idNumber, $designation, $department, $mobileNumber, $email,
    $event, $dimension, $startDate, $endDate, $layout, $designPref, $slogan,
    $supporting, $reference
);

if ($stmt->execute()) {
    echo "<h2 style='color:green'>E-Tarp Request Submitted Successfully!</h2>";
} else {
    echo "Error: " . $stmt->error;
}

$conn->close();
?>