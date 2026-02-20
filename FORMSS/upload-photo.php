<?php
if (isset($_POST['image'])) {
    $image = $_POST['image'];
    $image = str_replace('data:image/png;base64,', '', $image);
    $image = str_replace(' ', '+', $image);
    $fileData = base64_decode($image);

    // Make sure uploads folder exists and is writable
    if (!is_dir('uploads')) {
        mkdir('uploads', 0777, true);
    }

    $fileName = 'uploads/photo_' . time() . '.png';
    file_put_contents($fileName, $fileData);

    echo "Photo saved as: " . $fileName;
} else {
    echo "No image received.";
}
?>
