<?php
session_start();
include "mitcdb.php";

if (isset($_POST['id']) && isset($_POST['password'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $id = validate($_POST['id']);
    $pass = validate($_POST['password']);

    if (empty($id)) {
        header("Location: adminLogin.php?error=ID is required");
        exit();
    } else if (empty($pass)) {
        header("Location: adminLogin.php?error=Password is required");
        exit();
    } else {
        $sqlchk = "SELECT * FROM admin WHERE Admin_ID='$id' AND password='$pass'";
        $result = mysqli_query($mitc, $sqlchk);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['Admin_ID'] === $id && $row['password'] === $pass) {
                $_SESSION['Admin_ID'] = $row['Admin_ID'];
                header("Location: adminMenu.php");
                exit();
            } else {
                header("Location: adminLogin.php?error=Incorrect ID or password");
                exit();
            }
        } else {
            header("Location: adminLogin.php?error=Incorrect ID or password");
            exit();
        }
    }
} else {
    header("Location: adminLogin.php");
    exit();
}
?>