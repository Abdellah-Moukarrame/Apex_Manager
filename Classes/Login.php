<?php

class Login
{
    function LoginRole()
    {
        session_start();
        if (isset($_POST["btn_login"])) {
            $role = $_POST['role'];

            if ($role == "admin") {
                $_SESSION['role'] = "admin";
                header("location: ../dashboards/admin_dashboard.php ");
                exit;
            } elseif ($role == "journalist") {
                $_SESSION['role'] = "journalist";
                header("location: ../dashboards/journaliste_dashboard.php");
                exit;
            }
        }
    }
}