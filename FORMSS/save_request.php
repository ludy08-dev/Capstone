<?php
// 1. Connect to database
$host = "localhost";
$username = "root";
$password = "";
$database = "document_request_db";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 2. Collect form data
$fullName       = $_POST['fullName'];
$gradeLevel     = $_POST['gradeLevel'];
$department     = $_POST['department'];
$designation    = $_POST['designation'];
$contactNumber  = $_POST['contactNumber'] ?? '';
$schoolId       = $_POST['schoolId']      ?? ($_POST['idNumber'] ?? '');
$email          = $_POST['schoolEmail'];

$documentType   = $_POST['documentType'];
$requestPurpose = $_POST['requestPurpose'];
$copies         = $_POST['copies'];
$releaseDate    = $_POST['paymentDate'];

// TEMPORARY ROLE UNTIL LOGIN SYSTEM
$role = "Student";
$passwordHash = password_hash($schoolId, PASSWORD_DEFAULT);  

/* -----------------------------------------------------------------
   3. CHECK IF USER ALREADY EXISTS (BY EMAIL)
   ----------------------------------------------------------------- */
$sqlCheck = "SELECT user_id FROM users WHERE email = ?";
$stmtCheck = $conn->prepare($sqlCheck);
$stmtCheck->bind_param("s", $email);
$stmtCheck->execute();
$stmtCheck->store_result();

if ($stmtCheck->num_rows > 0) {
    // ✅ User already exists → reuse their user_id
    $stmtCheck->bind_result($user_id);
    $stmtCheck->fetch();
} else {
    // ✅ New email → insert once into USERS table
    $sqlUser = "INSERT INTO users (full_name, email, contact_number, id_number, role, password)
                VALUES (?, ?, ?, ?, ?, ?)";

    $stmtUser = $conn->prepare($sqlUser);
    $stmtUser->bind_param("ssssss", $fullName, $email, $contactNumber, $schoolId, $role, $passwordHash);

    if (!$stmtUser->execute()) {
        die("Error inserting user: " . $stmtUser->error);
    }

    // Get user_id of the newly inserted user
    $user_id = $conn->insert_id;
}

$stmtCheck->close();
/* -----------------------------------------------------------------
   4. Insert into REQUESTS table
   ----------------------------------------------------------------- */
$sqlReq = "INSERT INTO requests (user_id, request_type, description, status)
           VALUES (?, ?, ?, 'Pending')";

$stmtReq = $conn->prepare($sqlReq);
$stmtReq->bind_param("iss", $user_id, $documentType, $requestPurpose);

if (!$stmtReq->execute()) {
    die("Error inserting request: " . $stmtReq->error);
}

// request_id for foreign key
$request_id = $conn->insert_id;
$stmtReq->close();

/* -----------------------------------------------------------------
   5. Upload document if provided  → DOCUMENTS table
   ----------------------------------------------------------------- */
if (!empty($_FILES['receiptFile']['name'])) {

    $fileName = $_FILES['receiptFile']['name'];
    $tmpName  = $_FILES['receiptFile']['tmp_name'];

    if (!is_dir("uploads")) {
        mkdir("uploads", 0777, true);
    }

    $filePath = "uploads/" . $fileName;
    move_uploaded_file($tmpName, $filePath);

    $sqlDoc = "INSERT INTO documents (request_id, file_name, file_path)
               VALUES (?, ?, ?)";

    $stmtDoc = $conn->prepare($sqlDoc);
    $stmtDoc->bind_param("iss", $request_id, $fileName, $filePath);

    if (!$stmtDoc->execute()) {
        die("Error inserting document: " . $stmtDoc->error);
    }

    $stmtDoc->close();
}

/* -----------------------------------------------------------------
   6. Insert NOTIFICATION
   ----------------------------------------------------------------- */
$notif = "Your document request (#$request_id) is submitted and pending review.";

$sqlNotif = "INSERT INTO notifications (user_id, message, status)
             VALUES (?, ?, 'Unread')";

$stmtNotif = $conn->prepare($sqlNotif);
$stmtNotif->bind_param("is", $user_id, $notif);

if (!$stmtNotif->execute()) {
    die("Error inserting notification: " . $stmtNotif->error);
}

$stmtNotif->close();

/* -----------------------------------------------------------------
   7. Success message
   ----------------------------------------------------------------- */
echo "
<h2 style='color:green;'>Request Submitted Successfully!</h2>
<p>Your request ID: <strong>$request_id</strong></p>
<p>You will receive updates soon.</p>
";

$conn->close();
?>