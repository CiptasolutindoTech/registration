<?php
session_start();
include("koneksi.php");

if (isset($_POST['login'])) {
    // Get user input
    $username = mysqli_real_escape_string($db, $_POST['name']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    // Create query
    $sql = "SELECT * FROM users WHERE name = '$name'";
    $query = mysqli_query($db, $sql);

    // Check if the query was successful
    if ($query) {
        $user = mysqli_fetch_assoc($query);
        if ($user) {
            // Verify password
            if ($password == $user['password']) {
                // If password is correct, set session variables
                $_SESSION['name'] = $user['name'];
                $_SESSION['is_logged_in'] = true;

                    // Redirect to rekap_transaksi.php with success status
                    header('Location: regristation?status=sukses');
                    exit(); 

            }else{

                // If password is incorrect, redirect to login.php with error status
                header('Location: welcome.php?status=gagal');
                exit();
            }
        } else {
            // If username doesn't exist, redirect to index.php with error status
            header('Location: welcome.php?status=gagal');
            exit();
        }
    } else {
        // If query failed, redirect to index.php with error status
        header('Location: welcome.php?status=gagal');
        exit();
    }
} else {
    die("Akses tidak sah.");
}
?>
