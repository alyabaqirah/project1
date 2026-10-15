<?php
include "mitcdb.php";

    if (!$mitc) {
        echo "Database Connection Failed" . mysqli_connect_error();
    } else {
        // guna isset untuk check wheter variable tu kosong kah tidaks
        $aid = isset($_POST['id']) ? mysqli_real_escape_string($mitc, $_POST['id']) : '';
        $aname = isset($_POST['name']) ? mysqli_real_escape_string($mitc, $_POST['name']) : '';
        $aphonenum = isset($_POST['phone']) ? mysqli_real_escape_string($mitc, $_POST['phone']) : '';
        $aemail = isset($_POST['email']) ? mysqli_real_escape_string($mitc, $_POST['email']) : '';
        $apassword = isset($_POST['password']) ? mysqli_real_escape_string($mitc, $_POST['password']) : '';

        if ($aid && $aname && $aphonenum && $aemail && $apassword) {
            $chkrec = "SELECT * FROM `admin` WHERE `admin_ID` = '$aid';";
            $sqlchk = mysqli_query($mitc, $chkrec);
            $reccount = mysqli_num_rows($sqlchk);

            if ($reccount < 1) {
                $sqlin = "INSERT INTO `admin` (`admin_ID`, `Admin_name`, `Admin_phoneNo`, `Admin_email`, `password`) VALUES ('$aid', '$aname', '$aphonenum', '$aemail', '$apassword');";
                $sqlchk = mysqli_query($mitc, $sqlin);
                if ($sqlchk) {
                    echo "<script>alert('Successfully Added!'); window.location.href='adminLogin.php';</script>";
                } else {
                    echo "<script>alert('Failed to Add: " . mysqli_error($mitc) . "'); window.location.href='adminSignup.php';</script>";
                }
            } else {
                echo "<script>alert('Admin ID already exists'); window.location.href='adminSignup.php';</script>";
            }
        }
         else {
            echo "<script>alert('All fields are required'); window.location.href='adminSignup.php';</script>";

        mysqli_close($mitc);
    }
}
?>