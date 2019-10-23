<div id="" class="tab-content">
                <h2>Logout</h2>
                <p>
<?php
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
session_destroy();

header('location:../admin/login.php'); ?> 
</p>
               
            </div>
           