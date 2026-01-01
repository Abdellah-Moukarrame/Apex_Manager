<?php

class Login
{
    function LoginRole()
    {
        if (isset($_POST["btn_login"])) {
            $role = $_POST['role'];
            
            if ($role == "admin") {
                header("location: ../dashboards/admin_dashboard.php ");
                exit;
            }
            elseif ($role == "journalist") {
                header("location: ../dashboards/journaliste_dashboard.php");
                exit;
            }

        }
    }
}
