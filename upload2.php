<?php

//--------------------------- This for uploading a new pdf on drP5 ---------------------------

require 'connect.php';

$uploadDirectory = 'uploads/';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['fileUpload'])) {
    $fileTmpPath = $_FILES['fileUpload']['tmp_name'];
    $fileName = $_FILES['fileUpload']['name'];
    $fileSize = $_FILES['fileUpload']['size'];
    $fileType = $_FILES['fileUpload']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    // Sanitize file-name
    $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
    $uploadFileDir = $uploadDirectory . $newFileName;

    // Ensure the upload directory exists
    if (!is_dir($uploadDirectory)) {
        mkdir($uploadDirectory, 0777, true);
    }

    if (move_uploaded_file($fileTmpPath, $uploadFileDir)) {
        $sql = "INSERT INTO uploaded_files (file_name, file_path) VALUES (?, ?)";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("ss", $fileName, $uploadFileDir);
            if ($stmt->execute()) {
                echo json_encode(['status' => 'success']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'There was an error executing the query.']);
            }
            $stmt->close();
        } else {
            echo json_encode(['status' => 'error', 'message' => 'There was an error preparing the query.']);
        }
    }
}

$conn->close();
