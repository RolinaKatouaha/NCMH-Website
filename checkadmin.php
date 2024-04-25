<?php
//--------------------------- This for direct each logged in user to his dashboard  ---------------------------

session_start();
include('connect.php');

if (isset($_POST['SignIn'])) {
    $email = $_POST['email'];
    $password = $_POST['password']; // Assuming passwords are not hashed for simplicity

    // Prepare the query
    $query = $conn->prepare("SELECT * FROM login WHERE email = ? AND password = ?");
    $query->bind_param("ss", $email, $password);
    $query->execute();
    $result = $query->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc(); // Fetch the user data

        // Check the role of the user and redirect accordingly
        if ($user['role'] == 'admin') {
            header("Location: drResultsOld.php"); // Redirect to admin dashboard
        } elseif ($user['role'] == 'user') {
            header("Location: orgRepotrs.php"); // Redirect to user dashboard
        }
    } else { // Login failed
        echo "<script>alert('كلمة المرور غير صحيحة');
        window.history.back();
        </script>";
    }
}
