<?php

$file_size = 10 * 1024 * 1024;

$allowedFileTypes = array('image/jpeg', 'image/png');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_FILES['file']['error'] === UPLOAD_ERR_OK) {
        $fileName = $_FILES['file']['name'];
        $fileType = $_FILES['file']['type'];
        $fileSize = $_FILES['file']['size'];
        $fileTmpPath = $_FILES['file']['tmp_name'];
        if (in_array($fileType, $allowedFileTypes)) {
            if ($fileSize <= $file_size) {
                $destinationPath = 'C:' . $fileName;
                if (move_uploaded_file($fileTmpPath, $destinationPath)) {
                    echo 'File uploaded successfully.<br>';
                    echo "filename : $fileName<br>";
                    echo "fileType : $fileType<br>";
                    echo "fileSize : $fileSize<br>";

                } else {
                    echo 'Failed to move the uploaded file.';
                }
            } else {
                echo 'File size exceeds the allowed limit.';
            }
        } else {
            echo 'Invalid file type.';
        }
    } else {
        echo 'File upload error: ' . $_FILES['file']['error'];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="file" required>
        <button type="submit">Upload</button>
    </form>
</body>
</html>