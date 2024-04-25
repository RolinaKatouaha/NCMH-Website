<?php
header('Content-Type: application/json'); // Ensure JSON response
require 'connect.php';


if (isset($_POST["submit"])) {
    if (isset($_FILES["fileUpload"]) && $_FILES["fileUpload"]["error"] == 0) {
        $targetDir = "uploads/";
        $fileName = basename($_FILES["fileUpload"]["name"]);
        $fileTimestamp = time();
        $fileNameWithTimestamp = $fileTimestamp . '_' . $fileName;
        $targetFilePath = $targetDir . $fileNameWithTimestamp;
        $universityId = $_POST['universityId']; // Make sure 'universityId' matches the hidden input's name attribute

        if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $targetFilePath)) {
            $insertQuery = "INSERT INTO fileUpload (file_name, file_path, university_id) VALUES (?, ?, ?)";
            $stmt = mysqli_prepare($conn, $insertQuery);
            mysqli_stmt_bind_param($stmt, "ssi", $fileNameWithTimestamp, $targetFilePath, $universityId);


            // Execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                header('Location: orgLetters.php?success=1');
                exit();
            } else {
                // Handle the SQL execution error
                header('Location: orgLetters.php?error=1');
                exit();
            }
        } else {
            header('Location: orgLetters.php?error=1');
            exit();
        }
    } else {
        header('Location: orgLetters.php?error=1');
        exit();
    }
} else {
    header('Location: orgLetters.php?error=1');
    exit();
}
